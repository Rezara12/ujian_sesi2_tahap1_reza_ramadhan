<section class="content-header">
      <h1>
        Edit Data Obat
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Data Obat</h3>
          <div class="box-body">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
          <form action="" method="post">
                  <div class="form-group">
                  <label>Kode Obat</label>
                    <input type="hidden" name="id_obat" value="<?=$row->id_obat?>">
                    <input type="text" name="kode_obat" readonly value="<?=$this->input->post('kode_obat') ?? $row->kode_obat ?>" class="form-control">
                  </div>
                  <div class="form-group <?=set_value('nama_obat') ? 'has-error' : null ?>">
                    <label>Nama Obat *</label>
                    <input type="text" name="nama_obat" value="<?=$this->input->post('nama_obat') ?? $row->nama_obat ?>" class="form-control">
                    <?=form_error('nama_obat')?>
                  </div>
                  <div class="form-group <?=set_value('nama_obat') ? 'has-error' : null ?>">
                    <label>Harga Obat *</label>
                    <input type="text" name="harga_obat" value="<?=$this->input->post('harga_obat') ?? $row->harga_obat ?>" class="form-control">
                    <?=form_error('harga_obat')?>
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
