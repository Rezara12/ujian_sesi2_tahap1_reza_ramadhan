<section class="content-header">
      <h1>
        Cetak Data Laporan
      </h1>
    </section>

    <!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Hasil Pemeriksaan Umum</h3>
            </div>
        <div class="box-body">
          <div class="col-md-8 col-md-offset-2">
            <form action="<?= site_url('pemeriksaan/filterumum') ?>" method="post" target='_blank'>
            <div class="row">
              	<div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Dari Tanggal</label>
                  <input type="hidden" class="form-control" name="nilaifilter" value="1">
                  <input type="date" class="form-control" name="tanggalawal" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Sampai Tanggal</label>
                  <input type="date" class="form-control" name="tanggalakhir" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nama Dokter</label>
                  <select name="nama_dokter" autocomplete="off" value="<?=set_value('nama_dokter')?>" class="form-control">
                        <option value="">--Pilih--</option>
                        <?php foreach($dokter->result() as $key => $data) { ?>
                            <option value="<?= $data->nama_dokter ?>"><?= $data->nama_dokter ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-5">
                <div class="form-group">
                         <button type="submit" value="Print" class="btn btn-primary">
                           <i class="fa fa-print"></i> Cetak
                          </button>
                         <button type="reset" class="btn btn-warning">
                            <i class="fa fa-refresh"></i> Reset
                        </button>
                      </div>
            </form>
            </div>
        </div>
        
</section>