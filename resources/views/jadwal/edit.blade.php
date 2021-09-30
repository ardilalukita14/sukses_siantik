@extends('jadwal.layout')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Jadwal Dokter
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

                    <form method="post" action="{{ route('jadwal.update', $Jadwal->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    

                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="Nama" name="Nama" class="form-control" id="Nama" value="{{$Jadwal->Nama}}" aria-describedby="Nama" >
                    </div>

                    <div class="form-group">
                        <label for="Jam_Praktik">Jam_Praktik</label>
                        <input type="Jam_Praktik" name="Jam_Praktik" class="form-control" id="Jam_Praktik" value="{{$Jadwal->Jam_Praktik}}" aria-describedby="Jam_Praktik" >
                    </div>

                    <div class="form-group">
                        <label for="Hari_Praktik">Hari_Praktik</label>
                        <input type="Hari_Praktik" name="Hari_Praktik" class="form-control" id="Hari_Praktik" value="{{$Jadwal->Hari_Praktik}}" aria-describedby="Hari_Praktik" >
                    </div>

                    <div class="form-group">
                        <label for="Kuota">Kuota</label>
                        <input type="Kuota" name="Kuota" class="form-control" id="Kuota" value="{{$Jadwal->Kuota}}" aria-describedby="Kuota" >
                    </div>


                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection