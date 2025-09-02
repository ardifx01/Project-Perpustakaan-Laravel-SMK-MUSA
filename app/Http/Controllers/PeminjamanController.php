<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $buku = Buku::all();

        $anggota = DB::table('anggotas AS agt')
                      ->join('users AS us', 'agt.user_id', '=', 'us.id')
                      ->select('agt.id', 'us.name')
                      ->get();
        return view("admin.peminjaman.create", compact('anggota', 'buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeminjamanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeminjamanRequest $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
