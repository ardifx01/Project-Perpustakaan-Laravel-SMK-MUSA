<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $Buku = DB::table("bukus AS ag")      
                    ->get();
        
        return view("admin.buku.index", compact('Buku') );
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.buku.create");
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Http\Requests\StoreBukuRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. Simpan ke Tabel Buku
        $nama_file ="";

        if ( $request->hasFile("foto")) {
            $nama_file = time(). '_'. $request->file("foto")->getClientOriginalName();
            $request->foto->move( public_path("images/"), $nama_file );

            $bukus = Buku::create([
                "id" => $request->id,
                "id_buku" => $request->id_buku,
                "no_buku" => $request->no_buku,
                "nama_buku" => $request->nama_buku,
                "jenis_buku" => $request->jenis_buku,
                "foto_buku" => $nama_file,
                "keterangan" => $request->keterangan,
            ]);
        }else {
            $bukus = Buku::create([
                "id" => $request->id,
                "id_buku" => $request->id_buku,
                "no_buku" => $request->no_buku,
                "nama_buku" => $request->nama_buku,
                "jenis_buku" => $request->jenis_buku,
                "keterangan" => $request->keterangan,
            ]);

        }

        return redirect('admin/buku')->with('success', 'Data Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $Buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Buku = DB::table("bukus AS ag")
                    ->where("ag.id", "=" , $id)
                    ->first();
                 

        // return response()->json($Buku);
        return view ("admin.buku.edit", compact("Buku"));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \App\Http\Requests\UpdateBukuRequest $request
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
         // 1. Simpan ke Tabel Buku
         $nama_file ="";

         if ( $request->hasFile("foto")) {
             $nama_file = time(). '_'. $request->file("foto")->getClientOriginalName();
             $request->foto->move( public_path("images/"), $nama_file );
 
             $Bukus = Buku::where('id', $request->id)
                            ->update([
                                "id" => $request->id,
                                "id_buku" => $request->id_buku,
                                "no_buku" => $request->no_buku,
                                "nama_buku" => $request->nama_buku,
                                "jenis_buku" => $request->jenis_buku,
                                "foto_buku" => $nama_file,
                                "keterangan" => $request->keterangan,
                            ]);
         }else {
            $Bukus = Buku::where('id', $request->id)
            ->update([
                "id" => $request->id,
                "id_buku" => $request->id_buku,
                "no_buku" => $request->no_buku,
                "nama_buku" => $request->nama_buku,
                "jenis_buku" => $request->jenis_buku,
                "keterangan" => $request->keterangan,
            ]);
 
         }
 
         return redirect('admin/buku')->with('success', 'Data Buku berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param \App\Http\Requests\UpdateBukuRequest $request
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hapus tabel buku
        $Buku= Buku::where('id', $id)->delete();
        return redirect('admin/buku')->with('success', 'Data buku berhasil dihapus');
    }
}
