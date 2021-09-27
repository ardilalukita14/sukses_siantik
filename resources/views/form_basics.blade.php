@include('layouts.app') 
   
@section('sidebar')
  @parent
@endsection
    
@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Pendaftar Lama</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Form Pendaftar Lama</li>
            </ol>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Pendaftar Lama</h6>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="InputNama">Nama Pemilik</label>
                      <input type="name" class="form-control" id="InputNama" name="Nama Pemilik" placeholder="Masukkan Nama">
                      <small id="emailHelp" class="form-text text-muted">Pastikan nama yang terisi sudah pernah melakukan pendaftaran sebelumnya.</small>
                    </div>
                    <div class="form-group">
                      <label for="InputJenisHewan">Jenis Hewan Peliharaan</label>
                      <input type="name" class="form-control" id="InputJenisHewan" name="Jenis Hewan Peliharaan" placeholder="Masukkan Jenis Hewan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
        
        <!---Container Fluid-->
        </div>
        </div>
        </div>

      @extends('layouts.footer')

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>