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
          <form action="" method="post">
                  <div class="form-group <?=form_error('nama_user') ? 'has-error' : null ?>">
                    <label>Nama Perawat *</label>
                    <input type="hidden" name="id_user" autocomplete="off" value="<?=$row->id_user?>" class="form-control">
                    <input type="text" autocomplete="off" name="nama_user" value="<?=$this->input->post('nama_user') ?? $row->nama_user?>" class="form-control">
                    <?=form_error('nama_user')?>
                  </div>
                  <div class="form-group <?=form_error('jenis_kelamin_user') ? 'has-error' : null ?>">
                        <label>Jenis Kelamin *</label>
                        <select name="jenis_kelamin_user" value="<?=set_value('jenis_kelamin_user')?>" class="form-control">
                        <?php $jenis_kelamin_user = $this->input->post('jenis_kelamin_user') ? $this->input->post('jenis_kelamin_user') : $row->jenis_kelamin_user ?>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan" <?= $jenis_kelamin_user == 'perempuan' ? 'selected' : null ?>>Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin_user') ?>
                  </div>
                  <div class="form-group <?=form_error('nama_dokter') ? 'has-error' : null ?>">
                    <label>Nama Dokter *</label>
                    <select name="nama_dokter" autocomplete="off" value="<?=$row->nama_dokter?>" class="form-control">
                    
                        <?php $id_dokter = $this->input->post('id_dokter') ? $this->input->post('id_dokter') : $row->id_dokter ?>
                        <?php foreach($dokter->result() as $key => $data) { ?>
                            <option value="<?=$data->id_dokter?>" <?=$data->id_dokter == $row->id_dokter ? "selected" : null ?>><?= $data->nama_dokter ?></option>
                        <?php } ?>
                    </select>
                    <?=form_error('nama_dokter')?>
                  </div>
                  <div class="form-group <?=form_error('username') ? 'has-error' : null ?>">
                    <label>Username *</label>
                    <input type="text" name="username" autocomplete="off" value="<?=$this->input->post('username') ?? $row->username?>" class="form-control">
                    <?=form_error('username')?>
                  </div>
                <div class="form-group <?=form_error('password') ? 'has-error' : null ?>">
                    <label>Password</label>
                    <input type="password" name="password" autocomplete="off" value="<?=$this->input->post('password')?>" class="form-control">
                    <?= form_error('password') ?>
                  </div>
                  <div class="form-group <?=form_error('passconf') ? 'has-error' : null ?>">
                    <label>Konfirmasi Password</label>
                    <input type="hidden" name="level" autocomplete="off" value="4" class="form-control">
                    <input type="password" name="passconf" autocomplete="off" value="<?=$this->input->post('passconf')?>" class="form-control">
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
