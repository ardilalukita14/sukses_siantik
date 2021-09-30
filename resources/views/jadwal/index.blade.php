@extends('layouts.app1')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>KLINIK HEWAN</h2>
            </div>
            
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('jadwal.create') }}"> Input jadwal</a>
            </div>
        </div>
    </div>
    <!-- Form Search
    <div class="float-left my-2">
        <form action="{{ route('pengumuman.index') }}" method="GET">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                </span>
            </div>
        </form>
    </div>
    End Form Search --> 

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div> 
    @endif
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Jam_Praktik</th>
            <th>Hari_Praktik</th>
            <th>Kuota</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($Jadwal as $jadwal)
        <tr>


            <td>{{ $jadwal->id }}</td>
            <td>{{ $jadwal->Nama }}</td>
            <td>{{ $jadwal->Jam_Praktik }}</td>
            <td>{{ $jadwal->Hari_Praktik }}</td>
            <td>{{ $jadwal->Kuota }}</td>
            <td>
            <form action="{{ route('jadwal.destroy',$jadwal->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('jadwal.show',$jadwal->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('jadwal.edit',$jadwal->id) }}">Edit</a>

                @csrf 
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr> 
        @endforeach
    </table>
@endsection
