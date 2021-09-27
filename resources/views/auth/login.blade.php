@include('layouts.app') 
   
@section('sidebar')
  @parent
@endsection
    
@section('content')
<body class="bg-gradient-login">
  <!-- Login Content -->
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
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Pendaftar Lama</h6>
                </div>
                <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('action') }}" method="post">
            @csrf
                <div class="card-body">
                  <form class="user">
                  <div class="form-group">
                    <label>Nama Pemilik</label>
                    <input type="name" name="nama_pemilik" class="form-control" placeholder="Masukkan Nama Pemilik" required="">
                        <small id="nameHelp" class="form-text text-muted">Pastikan nama yang terisi sudah pernah melakukan pendaftaran sebelumnya.</small>
                    </div>
                    <div class="form-group">
                    <label>Jenis Hewan Peliharaan</label>
                    <input type="name" name="jenis_hewan" class="form-control" placeholder="Masukkan Jenis Hewan" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <hr>
                    <div class="row">
                  <div class="col-lg-12 text-center">
                    <p>Gagal Akses ?</p>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register.html">Cek Status Pendaftaran</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
                @extends('layouts.footer')
                </div>

  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>