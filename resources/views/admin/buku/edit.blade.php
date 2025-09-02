@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ url("admin/buku/". $Buku->id) }}" method="post" enctype="multipart/form-data">

        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{ $Buku->id}}">
        
        <div class="row">
          <div class="col-md-12">
          <label> id_Buku</label>
          <input type="text" name="id_buku" class="form-control" value="{{ $Buku->id_buku}} ">
          </div>
          </div>
              
          <div class="row">
            <div class="col-md-12">
            <label> no_buku</label>
            <input type="text" name="no_buku" class="form-control" value="{{ $Buku->no_buku }}" >
            </div>
            </div>

              <div class="row">
              <div class="col-md-12">
              <label> Nama Buku</label>
              <input type="text" name="nama_buku" class="form-control" value="{{ $Buku->nama_buku}} ">
              </div>
              </div>

              <div class="row">
              <div class="col-md-12">
              <label> Jenis Buku </label>
              <input type="text" name="jenis_buku" class="form-control" value = "{{ $Buku->jenis_buku}}" >
              </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label> Foto</label>
                  <input type="file" name="foto" class="form-control"  >
                </div>
                </div>  
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <label> Keterangan</label>
                    <textarea name="keterangan" class="form-control">{{$Buku->keterangan}}</textarea> 
                      </div>
                        </div>                  
                            <input type="submit" value="Simpan" class="btn btn-success">   
      </form>
      </div>
      </div>
       
      
@endsection