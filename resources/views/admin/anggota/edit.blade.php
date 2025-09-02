@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ URL::to("admin\anggota". $data->id)}}" method="post" enctype="multipart/form-data">

        @csrf
        @method("PUT")

        <input type="hidden" name="user_id" class="form-control" value="{{$data->user_id}}">

        <div class="row">
          <div class="col-md-12">
            <label> Nama Lengkap</label>
            <input type="text" name="name" class="form-control" value="{{ $data->name}}">
          </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label> Email </label>
              <input type="email" name="email" class="form-control" value="{{ $data->email}}">
      
            </div>
            </div>
            <div class="row">
              <div class="col-md-12">
               <label> Password</label>
               <input type="password" name="password" class="form-control">
              </div>
              </div>      
              <hr>


              <div class="row">
                <div class="col-md-12">
                  <label> Nomor Anggota</label>
                  <input type="text" name="no_anggota" class="form-control" value ="{{$data->no_anggota}}">
                </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label> Alamat</label>
                  <textarea name="alamat" class="form-control">{{$data->no_anggota}}</textarea> 
                  </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <label> Nomor telephone</label>
                      <input type="text" name="telephone" class="form-control" value ="{{$data->telephone}}">
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <label> Foto</label>
                        <input type="file" name="foto" class="form-control" value="{{$data->foto}}">
                      </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <label> Keterangan</label>
                          <textarea name="keterangan" class="form-control">{{$data->keterangan}}</textarea> 
                        </div>
                        </div>
                        <input type="submit" value="Simpan" class="btn btn-success">
             
      </form>
      </div>
      </div>
       
      
@endsection