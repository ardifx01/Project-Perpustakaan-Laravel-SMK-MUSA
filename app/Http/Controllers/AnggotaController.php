<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = DB::table("Anggotas AS ag")
                    ->join("users AS us" , "ag.user_id","=" ,"us.id")
                    ->get();
        
        return view("admin.anggota.index", compact('data') );
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.anggota.create");
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \App\Http\Requests\StoreAnggotaRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. Simpan ke Tabel users
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" =>bcrypt($request->password)
        ]);
        // 2. Simpan ke Tabel anggota
        $nama_file ="";

        if ( $request->hasFile("foto")) {
            $nama_file = time(). '_'. $request->file("foto")->getClientOriginalName();
            $request->foto->move( public_path("images/"), $nama_file );

            $anggota = Anggota::create([
                "user_id" => $user->id,
                "no_anggota" => $request->no_anggota,
                "alamat" => $request->alamat,
                "telephone" => $request->telephone,
                "foto" => $nama_file,
                "keterangan" => $request->keterangan
            ]);
        }else {
            $anggota = Anggota::create([
                "user_id" => $user->id,
                "no_anggota" => $request->no_anggota,
                "alamat" => $request->alamat,
                "telephone" => $request->telephone,
                "keterangan" => $request->keterangan
            ]);

        }

        return redirect('admin\anggota')->with('success', 'Data anggota berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param \App\Models\Anggota $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table("anggotas AS ag")
                    ->join("users AS us" , "ag.user_id","=" ,"us.id")
                    ->where("ag.user_id", "=" , $id)
                    ->select("ag.id" , "us.name", "us.email","ag.no_anggota", "ag.alamat", "ag.telephone", "ag.keterangan", "ag.user_id","ag.foto")
                    ->first();
                 

        //return response()->json($data);
        return view ("admin.anggota.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \App\Http\Requests\UpdateAnggotaRequest $request
     * @param \App\Models\Anggota $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //1. Ubah ke tabel users
        $user = User::where("id", $request->user_id)
                ->update([
                    "name" => $request->name,
                    "email" => $request->email,

                ]);
          
        //2. ubah tabel anggota
        $anggota = Anggota::where("id",$id)
                    ->update([
                        "no_anggota" => $request->no_anggota,
                        "alamat" => $request->alamat,
                        "telephone" => $request->telephone,
                        "keterangan" => $request->keterangan
                    ]);
                    return redirect('admin\anggota')->with('success', 'Data anggota berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param \App\Http\Requests\UpdateAnggotaRequest $request
     * @param \App\Models\Anggota $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hapus tabel user
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('admin\anggota')->with('success', 'Data anggota berhasil dihapus');
    }
}
