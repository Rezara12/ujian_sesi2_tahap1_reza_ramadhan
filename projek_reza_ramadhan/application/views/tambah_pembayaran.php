<section class="content-header">
      <h1>
        Tamabah Pembayaran Pasien
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Tamabah Pembayaran Pasien</h3>
          <div class="box-body">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
          <form action="<?=site_url('pembayaranpasien/tambah')?>" method="post">
                  <div class="form-group <?=form_error('nama') ? 'has-error' : null ?>">
                    <label>Nama *</label>
                    <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control">
                    <?=form_error('nama')?>
                  </div>
                  <div class="form-group <?=form_error('jumlah') ? 'has-error' : null ?>">
                    <label>JUMLAHh *</label>
                    <input type="text" name="jumlah" value="<?=set_value('jumlah')?>" class="form-control">
                    <?=form_error('jumlah')?>
                  </div>
                  <div class="form-group <?=form_error('alamat') ? 'has-error' : null ?>">
                    <label>alamat *</label>
                    <input type="text" name="alamat" value="<?=set_value('alamat')?>" class="form-control">
                    <?=form_error('alamat')?>
                  </div>

                      <div class="form-group">
                         <button type="submit" class="btn btn-primary">
                           <i class="fa fa-paper-plane"></i> Daftar
                          </button>
                         <button type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                         </form>
          </div>
            </div>
          </div>
      </div>

    </section>
