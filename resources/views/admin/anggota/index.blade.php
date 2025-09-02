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
            <h5>Data Anggota</h5>
            <div class="card-body"></div>
            <a class="btn btn-success" href="{{ URL::to("admin/anggota/create") }}">+</a>
            <table class="table">
                <thead>
                    <tr>
                    <th> No.</th>
                    <th> Nama Anggota</th>
                    <th> Nomor Anggota</th>
                    <th> Alamat </th>
                    <th> Foto </th>
                    <th> Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $nomor = 1; // 
                    @endphp
                    @foreach($data as $dt) 
                    <tr>
                        <td> {{ $nomor }} </td>
                        <td> {{ $dt->name}} </td>
                        <td> {{ $dt->no_anggota}} </td>
                        <td> {{ $dt->alamat}} </td>
                        
                        
                        <td> 
                            <img style="width: 90px; height; 90px;" src=" {{ asset("images/". $dt->foto)}}" alt="" srcset="">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ URL::to("admin/anggota/" . $dt->id."/edit") }}">Ubah</a>
                            <a class="btn btn-danger" href="{{ URL::to("admin/anggota/hapus/" . $dt->id) }}">Hapus</a> 
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