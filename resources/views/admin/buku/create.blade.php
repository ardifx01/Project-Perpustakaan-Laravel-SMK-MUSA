@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ URL::to("admin/buku")}}" method="post" enctype="multipart/form-data">

        @csrf
          <div class="row">
            <div class="col-md-12">
              <label> id_buku</label>
              <input type="text" name="id_buku" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
              <label> no_buku</label>
              <input type="text" name="no_buku" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
            <label> Nama Buku</label>
            <input type="text" name="nama_buku" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
            <label> Jenis Buku </label>
            <input type="text" name="jenis_buku" class="form-control">
            </div>
            </div>
              <hr>
            <div class="row">
            <div class="col-md-12">
            <label> Foto</label>
            <input type="file" name="foto" class="form-control">
            </div>
            </div>

            <div class="row">
            <div class="col-md-12">
            <label> Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea> 
            </div>
            </div>
            <input type="submit" value="Simpan" class="btn btn-success">
      </form>
      </div>
      </div>
       
      
@endsection