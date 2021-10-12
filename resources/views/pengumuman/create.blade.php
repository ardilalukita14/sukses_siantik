@extends('pengumuman.layout')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Pengumuman
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
                <form method="post" action="{{ route('pengumuman.store') }}" id="myForm" enctype="multipart/form-data">
                @csrf

                            <div class="form-group">
                                <label for="Judul">Judul</label>
                                <input type="Judul" name="Judul" class="form-control" id="Judul" aria-describedby="Judul" >
                            </div>

                            <div class="form-group">
                                <label for="Isi">Isi</label>
                                <input type="Isi" name="Isi" class="form-control" id="Isi" aria-describedby="Isi" >
                            </div>

                            <br><br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection