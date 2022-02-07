<section class="content-header">
      <h1>
        Edit Data Surat Sehat
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Edit Data Surat Sehat</h3>
          <div class="box-body">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
          <form action="" method="post">
                  <div class="form-group">
                  <label>Kode Surat Sehat</label>
                    <input type="hidden" name="id_suratsehat" value="<?=$row->id_suratsehat?>">
                    <input type="text" name="kode_suratsehat" readonly value="<?=$this->input->post('kode_suratsehat') ?? $row->kode_suratsehat ?>" class="form-control">
                  </div>
                  <div class="form-group <?=form_error('nama_suratsehat') ? 'has-error' : null ?>">
                    <label>Nama *</label>
                    <input type="text" name="nama_suratsehat" value="<?=$this->input->post('nama_suratsehat') ?? $row->nama_suratsehat ?>" class="form-control">
                    <?=form_error('nama_suratsehat')?>
                  </div>
                  <div class="form-group <?=form_error('alamat_suratsehat') ? 'has-error' : null ?>">
                    <label>Alamat *</label>
                    <input type="text" name="alamat_suratsehat" value="<?=$this->input->post('alamat_suratsehat') ?? $row->alamat_suratsehat ?>" class="form-control">
                    <?=form_error('alamat_suratsehat')?>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group <?=set_value('jeniskelamin_suratsehat') ? 'has-error' : null ?>">
                        <label>Jenis Kelamin *</label>
                        <select name="jeniskelamin_suratsehat" value="<?=set_value('jeniskelamin_suratsehat')?>" class="form-control">
                        <?php $jeniskelamin_suratsehat = $this->input->post('jeniskelamin_suratsehat') ? $this->input->post('jeniskelamin_suratsehat') : $row->jeniskelamin_suratsehat ?>
                          <option value="Laki-laki" <?=set_value('jeniskelamin_suratsehat') == "Laki-laki" ? "selected" : null?>>Laki-laki</option>
                          <option value="Perempuan" <?= $jeniskelamin_suratsehat == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
                        </select>
                        <?= form_error('jeniskelamin_suratsehat') ?>
                      </div>
                <div class="form-group <?=form_error('tempatlahir_suratsehat') ? 'has-error' : null ?>">
                    <label>Tempat Lahir *</label>
                    <input type="text" name="tempatlahir_suratsehat" value="<?=$this->input->post('tempatlahir_suratsehat') ?? $row->tempatlahir_suratsehat ?>" class="form-control">
                    <?=form_error('tempatlahir_suratsehat')?>
                  </div>
                  <div class="form-group <?=form_error('tanggallahir_suratsehat') ? 'has-error' : null ?>">
                    <label>Tanggal Lahir *</label>
                    <input type="date" name="tanggallahir_suratsehat" value="<?=$this->input->post('tanggallahir_suratsehat') ?? $row->tanggallahir_suratsehat ?>" class="form-control">
                    <?=form_error('tanggallahir_suratsehat')?>
                  </div>
                  <div class="form-group <?=form_error('keperluan') ? 'has-error' : null ?>">
                    <label>Keperluan *</label>
                    <input type="text" name="keperluan" value="<?=$this->input->post('keperluan') ?? $row->keperluan ?>" class="form-control">
                    <?=form_error('keperluan')?>
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
