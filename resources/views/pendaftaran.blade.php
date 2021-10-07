@include('layouts.app')
@section('sidebar')
  @parent
@endsection


@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Pendaftar Baru</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Form Pendaftar Baru</li>
            </ol>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-6">
              <!-- Select2 -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Pendaftaran</h6>
                </div>
                <div class="card-body">
                  <p>Harap memasukkan data dengan benar.</p>

                <form method="post" action="{{ '/daftar' }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pemilik</label>
                            <input type="input" class="form-control" name="pemilik" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Hewan Peliharaan</label>
                        <input type="input" name="jenis_hewan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jenis Hewan">
                    </div>

                    <div class="form-group">
                        <label for="select2SinglePlaceholder">Usia Hewan</label>
                        <select class="select2-single-placeholder form-control" name="usia" id="select2SinglePlaceholder">
                        <option value="Masukkan Usia Hewan">Usia Hewan dalam Bulan</option>
                        @for ($x = 1; $x <= 10; $x++) {
                            <option value="{{$x}}">{{$x}}</option>
                        }
                        @endfor
                        </select>
                    </div>


                    <div class="form-group" id="simple-date1">
                        <label for="simpleDataInput">Tanggal Periksa</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input name="tanggal" type="text" class="form-control" value="25/09/2021" id="simpleDataInput">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="input" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="select2SinglePlaceholder">Nama Dokter</label>
                        <select name="id_dokter" class="select2-single-placeholder form-control" name="state" id="select2SinglePlaceholder">
                            @foreach($dokter as $dokter)
                                <option value="{{$dokter->id}}">{{$dokter->nama_dokter}}</option>
                            @endforeach

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                  </div>
                </div>
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
  <!-- Select2 -->
  <script src="vendor/select2/dist/js/select2.min.js"></script>
  <!-- Bootstrap Datepicker -->
  <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap Touchspin -->
  <script src="vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
  <!-- ClockPicker -->
  <script src="vendor/clock-picker/clockpicker.js"></script>
  <!-- RuangAdmin Javascript -->
  <script src="js/ruang-admin.min.js"></script>
  <!-- Javascript for this page -->
  <script>
    $(document).ready(function () {


      $('.select2-single').select2();

      // Select2 Single  with Placeholder
      $('.select2-single-placeholder').select2({
        placeholder: "Select a Province",
        allowClear: true
      });

      // Select2 Multiple
      $('.select2-multiple').select2();

      // Bootstrap Date Picker
      $('#simple-date1 .input-group.date').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,
      });

      $('#simple-date2 .input-group.date').datepicker({
        startView: 1,
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        todayBtn: 'linked',
      });

      $('#simple-date3 .input-group.date').datepicker({
        startView: 2,
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        todayBtn: 'linked',
      });

      $('#simple-date4 .input-daterange').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        todayBtn: 'linked',
      });

      // TouchSpin

      $('#touchSpin1').TouchSpin({
        min: 0,
        max: 100,
        boostat: 5,
        maxboostedstep: 10,
        initval: 0
      });

      $('#touchSpin2').TouchSpin({
        min:0,
        max: 100,
        decimals: 2,
        step: 0.1,
        postfix: '%',
        initval: 0,
        boostat: 5,
        maxboostedstep: 10
      });

      $('#touchSpin3').TouchSpin({
        min: 0,
        max: 100,
        initval: 0,
        boostat: 5,
        maxboostedstep: 10,
        verticalbuttons: true,
      });

      $('#clockPicker1').clockpicker({
        donetext: 'Done'
      });

      $('#clockPicker2').clockpicker({
        autoclose: true
      });

      let input = $('#clockPicker3').clockpicker({
        autoclose: true,
        'default': 'now',
        placement: 'top',
        align: 'left',
      });

      $('#check-minutes').click(function(e){
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
      });

    });
  </script>

</body>

</html>
