<section class="content-header">
      <h1>
        Edit Pembayaran Pasien
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Pembayaran Pasien</h3>
          <div class="box-body">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
          <form action="" method="post">
                  <div class="form-group <?=set_value('nama') ? 'has-error' : null ?>">
                    <label>Nama *</label>
                    <input type="hidden" name="id" value="<?=$row->id?>">
                    <input type="text" name="nama" value="<?=$this->input->post('nama') ?? $row->nama ?>" class="form-control">
                    <?=form_error('nama')?>
                  </div>
                  <div class="form-group <?=set_value('jumlah') ? 'has-error' : null ?>">
                    <label>JUMLAH *</label>
                    <input type="text" name="jumlah" value="<?=$this->input->post('jumlah') ?? $row->jumlah ?>" class="form-control">
                    <?=form_error('jumlah')?>
                  </div>
                  <div class="form-group <?=set_value('alamat') ? 'has-error' : null ?>">
                    <label>ALAMAT *</label>
                    <input type="text" name="alamat" value="<?=$this->input->post('alamat') ?? $row->alamat ?>" class="form-control">
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
