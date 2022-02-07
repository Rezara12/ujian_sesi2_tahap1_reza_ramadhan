
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Puskesmas Pemurus Dalam</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>PD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pemurus Dalam</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/logo_rs.png  " class="user-image" alt="User Image">
              <span class="hidden-xs"><?=ucfirst($this->fungsi->user_login()->nama_user)?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/logo_rs.png" class="img-circle" alt="User Image">

                <p>
                <?=ucfirst($this->fungsi->user_login()->nama_user)?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=site_url('auth/logout')?>" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/logo_rs.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=ucfirst($this->fungsi->user_login()->nama_user)?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header">DASHBOARD</li>
      <li <?= $this->uri->segment(1) == 'aktif' ? 'class="active"' : ''?>>
          <a href="<?=site_url('dashboard')?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'aktif' ? 'class="active"' : ''?>>
          <a href="<?=site_url('pembayaranpasien')?>">
            <i class="fa fa-home"></i> <span>Pembayaran Pasien</span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'aktif' ? 'class="active"' : ''?>>
          <a href="<?=site_url('akademik')?>">
            <i class="fa fa-home"></i> <span>Akademik</span>
          </a>
        </li>
      <?php if ($this->fungsi->user_login()->level == 1 or $this->fungsi->user_login()->level == 2) { ?>
        <li class="header">ADMIN</li>
        <li <?= $this->uri->segment(2) == 'non_aktif' ? 'class="active"' : ''?>>
          <a href="<?=site_url('datapasien/non_aktif')?>">
            <i class="fa fa-users"></i> <span>Aktivasi Data Pasien</span>
          </a>
        </li>
        <li <?= $this->uri->segment(2) == 'aktif' ? 'class="active"' : ''?>>
          <a href="<?=site_url('datapasien/aktif')?>">
            <i class="fa fa-medkit"></i> <span>Data Pasien</span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'datasuratsehat' ? 'class="active"' : ''?>>
          <a href="<?=site_url('datasuratsehat')?>">
            <i class="fa fa-eyedropper"></i>
            <span>Data Surat Sehat</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'datadokter' ? 'class="active"' : ''?>>
          <a href="<?=site_url('datadokter')?>">
            <i class="fa fa-stethoscope"></i> <span>Data Dokter</span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'datarawatjalan' ? 'class="active"' : ''?>>
          <a href="<?=site_url('datarawatjalan')?>">
            <i class="fa fa-ambulance"></i>
            <span>Daftar Rawat Jalan</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'daftarsuratsehat' ? 'class="active"' : ''?>>
          <a href="<?=site_url('daftarsuratsehat')?>">
            <i class="fa fa-ambulance"></i>
            <span>Daftar Surat Sehat</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview <?= $this->uri->segment(2) == 'form_laporan_pasien' || 
                                $this->uri->segment(2) == 'form_laporan_dokter' ||
                                $this->uri->segment(2) == 'form_laporan_rawat' ||
                                $this->uri->segment(2) == 'form_laporan_bpjs' ||
                                $this->uri->segment(2) == 'form_laporan_umum' ? 'active' : ''?>">
          <a href="#">
            <i class="fa fa-print"></i> <span>Cetak Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $this->uri->segment(2) == 'form_laporan_pasien' ? 'class="active"' : ''?>><a href="<?=site_url('datapasien/form_laporan_pasien')?>"><i class="fa fa-circle-o"></i>Data Pasien</a></li>
            <li <?= $this->uri->segment(2) == 'form_laporan_dokter' ? 'class="active"' : ''?>><a href="<?=site_url('datadokter/form_laporan_dokter')?>"><i class="fa fa-circle-o"></i>Data Dokter</a></li>
            <li <?= $this->uri->segment(2) == 'form_laporan_rawat' ? 'class="active"' : ''?>><a href="<?=site_url('datarawatjalan/form_laporan_rawat')?>"><i class="fa fa-circle-o"></i>Data Rawat Jalan</a></li>
            <li <?= $this->uri->segment(2) == 'form_laporan_bpjs' ? 'class="active"' : ''?>><a href="<?=site_url('pemeriksaan/form_laporan_bpjs')?>"><i class="fa fa-circle-o"></i>Data Pemeriksaan Pasien BPJS</a></li>
            <li <?= $this->uri->segment(2) == 'form_laporan_umum' ? 'class="active"' : ''?>><a href="<?=site_url('pemeriksaan/form_laporan_umum')?>"><i class="fa fa-circle-o"></i>Data Pemeriksaan Pasien Umum</a></li>
          </ul>
        </>
        <?php } ?>

        <?php if ($this->fungsi->user_login()->level == 1 or $this->fungsi->user_login()->level == 4) { ?>
        <li class="header">PERAWAT</li>
        <li <?= $this->uri->segment(2) == 'daftar' ? 'class="active"' : ''?>>
          <a href="<?=site_url('pemeriksaan/daftar')?>">
            <i class="fa fa-heartbeat"></i> <span>Daftar Pemeriksaan</span>
          </a>
        </li>
        <li <?= $this->uri->segment(2) == 'hasil' ? 'class="active"' : ''?>>
          <a href="<?=site_url('pemeriksaan/hasil')?>">
            <i class="fa fa-user-md"></i> <span>Hasil Pemeriksaan</span>
          </a>
        </li>
        <li <?= $this->uri->segment(2) == 'daftar_sehat' ? 'class="active"' : ''?>>
          <a href="<?=site_url('pemeriksaan_sehat/daftar_sehat')?>">
            <i class="fa fa-user-md"></i> <span>Daftar Surat Sehat</span>
          </a>
        </li>
        <li <?= $this->uri->segment(2) == 'hasil_sehat' ? 'class="active"' : ''?>>
          <a href="<?=site_url('pemeriksaan_sehat/hasil_sehat')?>">
            <i class="fa fa-user-md"></i> <span>Hasil Surat Sehat</span>
          </a>
        </li>
        <?php } ?>

        <?php if ($this->fungsi->user_login()->level == 1 or $this->fungsi->user_login()->level == 3) { ?>
        <li class="header">KASIR</li>
        <li <?= $this->uri->segment(2) == 'pembayaran' ? 'class="active"' : ''?>>
          <a href="<?=site_url('pembayaran/pembayaran')?>">
            <i class="fa fa-money"></i> <span>Pembayaran</span>
          </a>
        </li>
        <li <?= $this->uri->segment(2) == 'hasilpembayaran' ? 'class="active"' : ''?>>
          <a href="<?=site_url('pembayaran/hasilpembayaran')?>">
            <i class="fa fa-money"></i> <span>Hasil Pembayaran</span>
          </a>
        </li>
        <?php } ?>

        <?php if ($this->fungsi->user_login()->level == 1) { ?>
        <li class="header">MASTER DATA</li>
        <li <?= $this->uri->segment(1) == 'dataobat' ? 'class="active"' : ''?>>
          <a href="<?=site_url('dataobat')?>">
            <i class="fa fa-plus-square"></i> <span>Data Obat</span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'dataperawat' ? 'class="active"' : ''?>>
          <a href="<?=site_url('dataperawat')?>">
            <i class="fa fa-heart"></i> <span>Data Perawat</span>
          </a>
        </li>
        <?php } ?>

        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php if ($this->fungsi->user_login()->id_dokter) { ?>
    <?php } ?>
    <?= $contents; ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>


<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
    $('#table1').DataTable()
  })
</script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
    $('#table2').DataTable()
  })
</script>
</body>
<script>
$(document).ready(function() {
  $(document).on('click', '#select', function(){
    var id_pasien = $(this).data('id_pasien');
    var kodepasien = $(this).data('kodepasien');
    var nama_pasien = $(this).data('nama_pasien');
    var jenis_kelamin = $(this).data('jenis_kelamin');
    var tempat_lahir = $(this).data('tempat_lahir');
    var tanggal_lahir = $(this).data('tanggal_lahir');
    var alamat = $(this).data('alamat');
    $('#id_pasien').val(id_pasien);
    $('#kodepasien').val(kodepasien);
    $('#nama_pasien').val(nama_pasien);
    $('#jenis_kelamin').val(jenis_kelamin);
    $('#tempat_lahir').val(tempat_lahir);
    $('#tanggal_lahir').val(tanggal_lahir);
    $('#alamat').val(alamat);
    $('#modal-pasien').modal('hide');
  })
})
</script>

<script>
$(document).ready(function() {
  $(document).on('click', '#select1', function(){
    var id_suratsehat = $(this).data('id_suratsehat');
    var kode_suratsehat = $(this).data('kode_suratsehat');
    var nama_suratsehat = $(this).data('nama_suratsehat');
    var jeniskelamin_suratsehat = $(this).data('jeniskelamin_suratsehat');
    var tempatlahir_suratsehat = $(this).data('tempatlahir_suratsehat');
    var tanggallahir_suratsehat = $(this).data('tanggallahir_suratsehat');
    var alamat_suratsehat = $(this).data('alamat_suratsehat');
    var keperluan = $(this).data('keperluan');
    $('#id_suratsehat').val(id_suratsehat);
    $('#kode_suratsehat').val(kode_suratsehat);
    $('#nama_suratsehat').val(nama_suratsehat);
    $('#jeniskelamin_suratsehat').val(jeniskelamin_suratsehat);
    $('#tempatlahir_suratsehat').val(tempatlahir_suratsehat);
    $('#tanggallahir_suratsehat').val(tanggallahir_suratsehat);
    $('#alamat_suratsehat').val(alamat_suratsehat);
    $('#keperluan').val(keperluan);
    $('#modal-suratsehat').modal('hide');
  })
})
</script>

<script>
$(document).ready(function() {
  $(document).on('click', '#selectdokter', function(){
    var id_dokter = $(this).data('id_dokter');
    var kodedokter = $(this).data('kodedokter');
    var nama_dokter = $(this).data('nama_dokter');
    var spesialis = $(this).data('spesialis');
    $('#id_dokter').val(id_dokter);
    $('#kodedokter').val(kodedokter);
    $('#nama_dokter').val(nama_dokter);
    $('#spesialis').val(spesialis);
    $('#modal-dokter').modal('hide');
  })
})
</script>

<script>
$(document).ready(function() {
  $(document).on('click', '#selectobat', function(){
    var id_obat = $(this).data('id_obat');
    var nama_obat = $(this).data('nama_obat');
    var harga_obat = $(this).data('harga_obat');
    $('#id_obat').val(id_obat);
    $('#nama_obat').val(nama_obat);
    $('#harga_obat').val(harga_obat);
    $('#modal-obat').modal('hide');
  })
})
</script>


<script type="text/javascript">
  $(document).ready(function(){
      $("#bil1").keyup(function(){ 
        var bil1  = parseInt($("#bil1").val());
        var bil2  = parseInt($("#bil2").val());
        var hasil = bil1-bil2;
        $("#toothasil").val(hasil); 
      }); 
	  
  });
</script>

<script>
$(document).ready(function() {
  $(document).on('click', '#set_detail', function(){
    var id_pasien = $(this).data('id_pasien');
    var kodepasien = $(this).data('kodepasien');
    var nama_pasien = $(this).data('nama_pasien');
    var jenis_kelamin = $(this).data('jenis_kelamin');
    var tempat_lahir = $(this).data('tempat_lahir');
    var tanggal_lahir = $(this).data('tanggal_lahir');
    var alamat = $(this).data('alamat');
    var id_dokter = $(this).data('id_dokter');
    var kodedokter = $(this).data('kodedokter');
    var nama_dokter = $(this).data('nama_dokter');
    var spesialis = $(this).data('spesialis');
    var jenis_pasien = $(this).data('jenis_pasien');
    var no_bpjs = $(this).data('no_bpjs');
    var date = $(this).data('date');
    
    $('#id_dokter').text(id_dokter);
    $('#kodedokter').text(kodedokter);
    $('#nama_dokter').text(nama_dokter);
    $('#spesialis').text(spesialis);
    $('#id_pasien').text(id_pasien);
    $('#kodepasien').text(kodepasien);
    $('#nama_pasien').text(nama_pasien);
    $('#jenis_kelamin').text(jenis_kelamin);
    $('#tempat_lahir').text(tempat_lahir);
    $('#tanggal_lahir').text(tanggal_lahir);
    $('#alamat').text(alamat);
    $('#jenis_pasien').text(jenis_pasien);
    $('#no_bpjs').text(no_bpjs);
    $('#date').text(date);
  })
})
</script>

</html>
