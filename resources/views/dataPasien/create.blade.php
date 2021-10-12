@extends('dataPasien.layout')
@section('content')
  
{{-- Input Data section begin --}}
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Input Data Pasien</h2>
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
                    </div>
                    <form method="post" action="{{ route('dataPasien.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="featured__controls">
                            <div class="form-group">
                                <label for="nama">Nama Pemilik</label>
                                <input type="nama" name="nama" class="form-control" id="nama" readonly value="{{$data->nama_pemilik}}" aria-describedby="nama" >
                            </div>

                            <div class="form-group">
                                <label for="jenis_hewan">Hewan Peliharaan</label>
                                <input type="jenis_hewan" name="jenis_hewan" class="form-control" id="jenis_hewan" readonly value="{{$data->jenis_hewan}}" aria-describedby="jenis_hewan" >
                            </div>

                            <div class="form-group">
                                <label for="usia">Usia Hewan</label>
                                <input type="usia" name="usia" class="form-control" id="usia" readonly value="{{$data->usia}}" aria-describedby="usia" >
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal Periksa</label>
                                <input type="tanggal" name="tanggal" class="form-control" id="tanggal" value="{{$data->tanggal}}" aria-describedby="tanggal" >
                            </div>

                            <div class="form-group">
                                <label for="penyakit">Riwayat Penyakit</label>
                                <input type="penyakit" name="penyakit" class="form-control" id="penyakit" readonly value="{{$data->riwayat_penyakit}}" aria-describedby="penyakit" >
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="alamat" name="alamat" class="form-control" id="alamat" readonly value="{{$data->alamat}}" aria-describedby="alamat" >
                            </div>

                            <div class="form-group">
                                <label for="nama_dokter">Nama Dokter</label>
                                <select class="select2-single-placeholder form-control" name="nama_dokter" class="form-control" id="nama_dokter">
                                    <option value="Niken">Niken</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    @foreach ($data1 as $dktr)
                                <option value="{{$dktr->id}}">{{$dktr->nama_dokter}}</option>
                            @endforeach
                                </select>
                </div>
                            </div>
                            <br><br>
                            <button type="submit" class="btn btn-primary">Submit</button>


                        </div>
                    </div>
                </div>


    {{-- Input Data section end --}}
