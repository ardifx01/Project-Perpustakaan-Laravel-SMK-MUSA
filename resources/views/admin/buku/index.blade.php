@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
            @endif

        <div class="card">
            <div class="card-header"></div>
            <h5>Data Buku Perpustakaan</h5>
            <div class="card-body"></div>
            <a class="btn btn-succes" href="{{ URL::to("admin/buku/create") }}">+</a>
            <table class="table">
                <thead>
                    <tr>
                    <th> No</th>
                    <th> Nama Buku</th>
                    <th> Jenis Buku</th>
                    <th> Foto </th>
                    <th> Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $nomor = 1; // 
                    @endphp
                    @foreach($Buku as $dt) 
                    <tr>
                        <td> {{ $nomor }} </td>
                        <td> {{ $dt->nama_buku}} </td>
                        <td> {{ $dt->jenis_buku}} </td>
                        <td> 
                            <img style="width: 70px; height; 70px;" src=" {{ asset("images/". $dt->foto_buku)}}" alt="" srcset="">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ URL::to("admin/buku/" . $dt->id."/edit") }}">Ubah</a>
                            <a class="btn btn-primary" href="{{ URL::to("admin/buku/" . $dt->id."/pinjam") }}">Pinjam</a>
                            <a class="btn btn-danger" href="{{ URL::to("admin/buku/hapus/" . $dt->id) }}">Hapus</a>
                           
                        </td>
                    </tr>

                    @php
                    $nomor++; 
                    @endphp

                    @endforeach    
                    
                </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection