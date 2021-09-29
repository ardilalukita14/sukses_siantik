@extends('pengumuman.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    PENGUMUMAN
                </div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Judul : </b>{{$Pengumuman->Judul}}</li>
                        <li class="list-group-item"><b>Isi : </b>{{$Pengumuman->Isi}}</li>
                    </ul>
                </div>

                <a class="btn btn-success mt3" href="{{ route('pengumuman.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection