
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rumah Sakit Islam - Halaman Utama</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
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
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?=site_url('halamanutama')?>" class="navbar-brand">Rumah Sakit <b>Islam</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?=site_url('daftarpasien')?>">Daftar Pasien</a></li>
            <li><a href="<?=site_url('auth/login')?>">Login</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Rumah Sakit Islam
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
          </div>
          <div class="box-body">
          <div class="col-md-4 col-md-offset-4">
          <form action="<?=site_url('daftarpasien/tambah')?>" method="post">
                  <div class="form-group">
                    <label>Kode Pasien</label>
                    <input type="text" name="kodepasien" readonly value="<?= $kodepasien ?>" class="form-control">
                    <input type="hidden" name="tgl_daftar" value="<?=date('Y-m-d') ?>" class="form-control">
                  </div>
                  <div class="form-group <?=form_error('nama_pasien') ? 'has-error' : null ?>">
                    <label>Nama *</label>
                    <input type="text" name="nama_pasien" value="<?=set_value('nama_pasien')?>" autocomplete="off" class="form-control">
                    <?=form_error('nama_pasien')?>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group <?=form_error('jenis_kelamin') ? 'has-error' : null ?>">
                        <label>Jenis Kelamin *</label>
                        <select name="jenis_kelamin" value="<?=set_value('jenis_kelamin')?>" class="form-control">
                          <option value="">-- Pilih --</option>
                          <option value="Laki-laki" <?=set_value('jenis_kelamin') == "Laki-laki" ? "selected" : null?>>Laki-laki</option>
                          <option value="Perempuan" <?=set_value('jenis_kelamin') == "Perempuan" ? "selected" : null?>>Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin') ?>
                      </div>
                      <div class="form-group <?=form_error('tempat_lahir') ? 'has-error' : null ?>">
                    <label>Tempat Lahir *</label>
                    <input type="text" name="tempat_lahir" value="<?=set_value('tempat_lahir')?>" autocomplete="off" class="form-control">
                    <?= form_error('tempat_lahir') ?>
                  </div>
                  <div class="form-group <?=form_error('tanggal_lahir') ? 'has-error' : null ?>">
                    <label>Tanggal Lahir *</label>
                    <input type="date" name="tanggal_lahir" value="<?=set_value('tanggal_lahir')?>" class="form-control">
                    <?= form_error('tanggal_lahir') ?>
                  </div>
                  <div class="form-group <?=form_error('alamat') ? 'has-error' : null ?>">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="2" autocomplete="off" placeholder=""><?=set_value('alamat')?></textarea>
                        <?= form_error('alamat') ?>
                      </div>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary">
                           <i class="fa fa-paper-plane"></i> Daftar
                          </button>
                         <button type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                         </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
      </div>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
</body>
</html>
