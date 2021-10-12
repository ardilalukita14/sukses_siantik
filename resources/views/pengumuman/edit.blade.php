@extends('pengumuman.layout')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Pengumuman
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

                    <form method="post" action="{{ route('pengumuman.update', $Pengumuman->Id) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="featured__controls">
                    <div class="form-group">
                        <label for="Judul">Judul</label>
                        <input type="Judul" name="Judul" class="form-control" id="Judul" value="{{$Pengumuman->Judul}}" aria-describedby="Judul" >
                    </div>

                    <div class="form-group">
                        <label for="Isi">Isi</label>
                        <input type="Isi" name="Isi" class="form-control" id="alamat" value="{{$Pengumuman->Isi}}" aria-describedby="alamat" >
                    </div>

                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection