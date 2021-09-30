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
                        <li class="list-group-item"><b>Nama : </b>{{$Jadwal->Nama}}</li>
                        <li class="list-group-item"><b>Jam_Praktik : </b>{{$Jadwal->Jam_Praktik}}</li>
                        <li class="list-group-item"><b>Hari_Praktik : </b>{{$Jadwal->Hari_Praktik}}</li>
                        <li class="list-group-item"><b>Kuota : </b>{{$Jadwal->Kuota}}</li>
                    </ul>
                </div>

                <a class="btn btn-success mt3" href="{{ route('pengumuman.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection