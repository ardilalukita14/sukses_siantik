@include('layouts.app') 
   
@section('sidebar')
  @parent
@endsection
    
@section('content')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">DataTables</li>
            </ol>
          </div>
          
          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                </div>
                <!-- Topbar Search -->
          <form  action="{{route('dataPasienAdmin.index')}}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input name="search" type="text" class="form-control bg-light border-5 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                   
                  <table class="table table-bordered">
                    <tr>
                        <th>Nama Pemilik</th>
                        <th>Hewan Peliharaan</th>
                        <th>Usia Hewan</th>
                        <th>Alamat</th>
                        <th>Tanggal Periksa</th>
                        <th>Nama Dokter</th>
                        <th width="280px">Action</th>
                      </tr>
                      @foreach ($daftars as $data)
                    <tr>

                        <td>{{ $data->nama_pemilik }}</td>
                        <td>{{ $data->jenis_hewan }}</td>
                        <td>{{ $data->usia }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->dokter->nama_dokter }}</td>
                   
                      
                        <td>
                      
                            <a class="btn btn-info" href="{{ route('dataPasienAdmin.show',$data->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('dataPasienAdmin.edit',$data->id) }}">Update</a>
                            <!--<a class="btn btn-primary" href="{{ route('dataPasien.create',$data->id) }}">Create</a>-->
                          
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        <br><br>
                          </td>
                    </tr>
                    @endforeach
                </table>
            
         
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      </div>
  </div>
  </div>
  </div>
      @extends('layouts.footer')
      <!-- Footer -->
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>