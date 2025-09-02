@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ URL::to("admin\peminjaman")}}" method="post" >

        @csrf
        <div class="row">
          <div class="col-md-12">
            <label> Nama Peminjam</label>
            <select name="anggota_id" class="form-control">
              @foreach ($anggota as $agt)
                <option value="{{ $agt->id }}"> {{ $agt->name}}</option>
              @endforeach
            </select>
          </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label> Id buku </label>
              <select name="id_buku" class="form-control">
              @foreach ($buku as $bku)
              <option value="{{ $bku->id }}"> {{ $bku->id_buku}}</option>
              @endforeach
              </select>
            </div>
            </div>
            <div class="row">
              <div class="col-md-12">
               <label> No Buku</label>
               <select name="no_buku" class="form-control">
                @foreach ($buku as $bku)
                <option value="{{ $bku->id }}"> {{ $bku->no_buku}}</option>
                @endforeach
                </select>
              </div>
              </div>      
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <label> Nama Buku</label>
                  <select name="nama_buku" class="form-control">
                    @foreach ($buku as $bku)
                    <option value="{{ $bku->id }}"> {{ $bku->nama_buku}}</option>
                    @endforeach
                    </select>
                </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label> Tanggal Pinjam</label>
                    <select name="tgl_pinjam" class="form-control">
                      @foreach ($buku as $bku)
                      <option value="{{ $bku->id }}"> {{ $bku->tgl_pinjam}}</option>
                      @endforeach
                      </select>
                  </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <label> Tanggal Kembali</label>
                      <select name="tgl_kembali" class="form-control">
                        @foreach ($buku as $bku)
                        <option value="{{ $bku->id }}"> {{ $bku->tgl_kembali}}</option>
                        @endforeach
                        </select>
                    </div>
                    </div>

                    
                  <div class="row">
                    <div class="col-md-12">
                      <label> Keterangan</label>
                      <select name="keterangan" class="form-control">
                        @foreach ($buku as $bku)
                        <option value="{{ $bku->id }}"> {{ $bku->keterangan}}</option>
                        @endforeach
                        </select>
                    </div>
                    </div>
                        <input type="submit" value="Simpan" class="btn btn-success">
             
      </form>
      </div>
      </div>
       
      
@endsection