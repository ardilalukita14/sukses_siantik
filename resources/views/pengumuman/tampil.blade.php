@include('layouts.app1') 
@section('sidebar')
  @parent
@endsection

@section('content')
              <!-- Additional Content -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h1 class="m-0 font-weight-bold text-primary">KLINIK HEWAN</h1>
                </div>
                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                    @foreach ($Pengumuman as $pengumuman)
                    <h4 class="alert-heading">{{ $pengumuman->Judul }}</h4>
                    <p>
                      {{ $pengumuman->Isi }}
                    </p>
                    <hr>
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to keep things nice
                      and tidy.
                    </p>
                    @endforeach
                  </div>
                </div>
              </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
  <!-- Scrollto to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
