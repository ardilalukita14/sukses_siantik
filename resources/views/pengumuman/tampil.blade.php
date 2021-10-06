@include('layouts.app') 
@section('sidebar')
  @parent
@endsection

@section('content')
              <!-- Additional Content -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                  <h1 class="m-0 font-weight-bold text-primary">PENGUMUMAN</h1>
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
                      "Hewan adalah makhluk hidup, cerdas, tanggap, lucu dan menghibur. Kita berutang kepada mereka tugas menjaga seperti yang kita lakukan kepada anak-anak." - Michael Morpurgo
                    </p>
                    @endforeach
                  </div>
                </div>
              </div>
      <!-- Footer -->
      @extends('layouts.footer')
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
