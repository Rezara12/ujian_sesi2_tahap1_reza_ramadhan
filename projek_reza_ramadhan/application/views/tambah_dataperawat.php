<section class="content-header">
      <h1>
        Data Perawat
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Data Perawat</h3>
          <div class="box-body">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
          <form action="<?=site_url('dataperawat/tambah')?>" method="post">
                  <div class="form-group <?=form_error('nama_user') ? 'has-error' : null ?>">
                    <label>Nama Perawat *</label>
                    <input type="text" autocomplete="off" name="nama_user" value="<?=set_value('nama_user')?>" class="form-control">
                    <?=form_error('nama_user')?>
                  </div>
                  <div class="form-group <?=form_error('jenis_kelamin_user') ? 'has-error' : null ?>">
                        <label>Jenis Kelamin *</label>
                        <select name="jenis_kelamin_user" value="<?=set_value('jenis_kelamin_user')?>" class="form-control">
                          <option value="">-- Pilih --</option>
                          <option value="laki-laki" <?=set_value('jenis_kelamin_user') == "Laki-laki" ? "selected" : null?>>Laki-laki</option>
                          <option value="perempuan" <?=set_value('jenis_kelamin_user') == "Perempuan" ? "selected" : null?>>Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin_user') ?>
                  </div>
                  <div class="form-group <?=form_error('nama_dokter') ? 'has-error' : null ?>">
                    <label>Nama Dokter *</label>
                    <select name="nama_dokter" autocomplete="off" value="<?=set_value('nama_dokter')?>" class="form-control">
                        <option value="">--Pilih--</option>
                        <?php foreach($dokter->result() as $key => $data) { ?>
                            <option value="<?= $data->id_dokter ?>"><?= $data->nama_dokter ?></option>
                        <?php } ?>
                    </select>
                    <?=form_error('nama_dokter')?>
                  </div>
                  <div class="form-group <?=form_error('username') ? 'has-error' : null ?>">
                    <label>Username *</label>
                    <input type="text" name="username" autocomplete="off" value="<?=set_value('username')?>" class="form-control">
                    <?=form_error('username')?>
                  </div>
                <div class="form-group <?=form_error('password') ? 'has-error' : null ?>">
                    <label>Password *</label>
                    <input type="password" name="password" autocomplete="off" value="<?=set_value('password')?>" class="form-control">
                    <?= form_error('password') ?>
                  </div>
                  <div class="form-group <?=form_error('passconf') ? 'has-error' : null ?>">
                    <label>Konfirmasi Password *</label>
                    <input type="hidden" name="level" autocomplete="off" value="4" class="form-control">
                    <input type="password" name="passconf" autocomplete="off" value="<?=set_value('passconf')?>" class="form-control">
                    <?= form_error('passconf') ?>
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
