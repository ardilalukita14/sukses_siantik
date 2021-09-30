@extends('jadwal.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Jadwal Dokter
                </div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Id : </b>{{$Jadwal->id}}</li>
                        <li class="list-group-item"><b>Nama : </b>{{$Jadwal->nama_dokter}}</li>
                        <li class="list-group-item"><b>Jam_Praktik : </b>{{$Jadwal->jam_praktek}}</li>
                        <li class="list-group-item"><b>Hari_Praktik : </b>{{$Jadwal->hari_praktek}}</li>
                        <li class="list-group-item"><b>Kuota : </b>{{$Jadwal->kuota}}</li>
                    </ul>
                </div>

                <a class="btn btn-success mt3" href="/tampilJadwal">Kembali</a>
            </div>
        </div>
    </div>
@endsection