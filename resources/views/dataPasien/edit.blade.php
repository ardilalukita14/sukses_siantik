@extends('dataPasien.layout')
@section('content')
    {{-- Input Data section begin --}}


    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Pendaftar Lama</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Form Pendaftar Lama</li>
            </ol>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-6">
              <!-- Select2 -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Pendaftaran</h6>
                </div>
                <div class="card-body">        
                  <p>Harap memasukkan data dengan benar.</p>          
                  <div class="form-group">
                      
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data Pasien
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('dataPasien.update', $Daftar->id) }}" id="myForm" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')
                <div class="featured__controls">
                            <div class="form-group">
                                <label for="nama_pemilik">Nama Pemilik</label>
                                <input type="nama_pemilik" name="nama_pemilik" class="form-control" id="nama_pemilik" readonly value="{{ $Daftar->nama_pemilik}}" aria-describedby="nama" >
                            </div>

                            <div class="form-group">
                                <label for="jenis_hewan">Hewan Peliharaan</label>
                                <input type="jenis_hewan" name="jenis_hewan" class="form-control" id="jenis_hewan" readonly value="{{$Daftar->jenis_hewan}}" aria-describedby="jenis_hewan" >
                            </div>

                            <div class="form-group">
                                <label for="usia">Usia Hewan</label>
                                <input type="usia" name="usia" class="form-control" id="usia" readonly value="{{$Daftar->usia}}" aria-describedby="usia" >
                            </div>

                            <div class="form-group" id="simple-date1">
                        <label for="simpleDataInput">Tanggal Periksa</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                        <input type="text" name="tanggal" class="form-control" id="tanggal" value="{{$Daftar->tanggal}}" aria-describedby="Tanggal_Lahir" > 
                    </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="alamat" name="alamat" class="form-control" id="alamat" readonly value="{{$Daftar->alamat}}" aria-describedby="alamat" >
                            </div>

                            <div class="form-group">
                                <label for="dokter">Nama Dokter</label>
                                <select type="dokter" name="dokter" class="form-control" id="dokter">
                                    @foreach($dokter as $dktr)
                                <option value="{{ $dktr->id }}" 
                                    {{ $Daftar->dokter_id == $dktr->id ? 'selected' : '' }}>
                                    {{ $dktr->nama_dokter}}</option>
                            @endforeach
                                </select>
                </div>
                            </div>

                <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('dataPasien.index') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
