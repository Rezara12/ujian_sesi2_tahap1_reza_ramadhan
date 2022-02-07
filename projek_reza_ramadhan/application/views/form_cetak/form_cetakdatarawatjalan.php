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
              <h3 class="box-title">Data Rawat Jalan</h3>
            </div>
        <div class="box-body">
          <div class="col-md-8 col-md-offset-2">
            <form action="<?= site_url('datarawatjalan/filter') ?>" method="post" target='_blank'>
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