@extends('dataPasien.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Data Pasien
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama Pemilik: </b>{{$Daftar->nama_pemilik}}</li>
                    <li class="list-group-item"><b>Hewan Peliharaan: </b>{{$Daftar->jenis_hewan}}</li>
                    <li class="list-group-item"><b>Usia Hewan: </b>{{$Daftar->usia}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Daftar->alamat}}</li>
                    <li class="list-group-item"><b>Tanggal Periksa: </b>{{$Daftar->tanggal}}</li>
                    <li class="list-group-item"><b>Nama Dokter: </b>{{$Dokter->nama_dokter}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('dataPasienAdmin.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
