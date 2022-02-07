<section class="content-header">
      <h1>
        Dashboard

      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <div class="row">
      <?php if ($this->fungsi->user_login()->level == 1 or $this->fungsi->user_login()->level == 2) { ?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $this->fungsi->count_pasien_non() ?></h3>

              <p>Data Pasien Non-Aktif</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?=site_url('datapasien/non_aktif')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $this->fungsi->count_pasien_aktif() ?></h3>

              <p>Data Pasien</p>
            </div>
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <a href="<?=site_url('datapasien/aktif')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $this->fungsi->count_dokter() ?></h3>

              <p>Data Dokter</p>
            </div>
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <a href="<?=site_url('datadokter')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $this->fungsi->count_rawatjalan() ?></h3>

              <p>Data Rawat Jalan</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?=site_url('datarawatjalan')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>

        <?php if ($this->fungsi->user_login()->level == 1 or $this->fungsi->user_login()->level == 4) { ?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $this->fungsi->count_daftar() ?></h3>

              <p>Daftar Pemeriksaan</p>
            </div>
            <div class="icon">
              <i class="fa fa-heartbeat"></i>
            </div>
            <a href="<?=site_url('pemeriksaan/daftar')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $this->fungsi->count_hasil() ?></h3>

              <p>Hasil Pemeriksaan</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="<?=site_url('pemeriksaan/hasil')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>

        <?php if ($this->fungsi->user_login()->level == 1 or $this->fungsi->user_login()->level == 3) { ?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $this->fungsi->count_pembayaran() ?></h3>

              <p>Daftar Pembayaran</p>
            </div>
            <div class="icon">
              <i class="ion-cash"></i>
            </div>
            <a href="<?=site_url('pembayaran/pembayaran')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $this->fungsi->count_hasilpembayaran() ?></h3>

              <p>Hasil Pembayaran</p>
            </div>
            <div class="icon">
              <i class="ion-cash"></i>
            </div>
            <a href="<?=site_url('pembayaran/hasilpembayaran')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>

        <?php if ($this->fungsi->user_login()->level == 1) { ?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $this->fungsi->count_obat() ?></h3>

              <p>Data Obat</p>
            </div>
            <div class="icon">
              <i class="ion-cash"></i>
            </div>
            <a href="<?=site_url('dataobat')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $this->fungsi->count_perawat() ?></h3>

              <p>Data Perawat</p>
            </div>
            <div class="icon">
              <i class="ion-cash"></i>
            </div>
            <a href="<?=site_url('dataperawat')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>
        <!-- ./col -->
      </div>
      
      <!-- /.row -->
    </section>