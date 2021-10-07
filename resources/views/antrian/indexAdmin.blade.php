@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Antrian</h2>
            </div>

            {{-- <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('jadwal.create') }}"> Input jadwal</a>
            </div> --}}
        </div>
    </div>
    <!-- Form Search
    <div class="float-left my-2">
        <form action="" method="GET">
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
            <th>Tanggal</th>
            <th>No Antrian</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $data)
        <tr>


            <td>{{ $data->tanggal }}</td>
            <td>{{ $data->no_antrian }}</td>
            <td>
            <form action="{{ route('antrianAdmin.destroy',$data->id) }}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
