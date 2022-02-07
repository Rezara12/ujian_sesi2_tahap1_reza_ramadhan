<section class="content-header">
      <h1>
        Aktivasi Data Pasien
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Data Pasien</h3>
          <div class="box-body">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
          <form action="" method="post">
                  <div class="form-group">
                    <label>Kode Pasien</label>
                    <input type="hidden" name="id_pasien" value="<?=$row->id_pasien?>">
                    <input type="text" name="kodepasien" readonly value="<?=$this->input->post('kodepasien') ?? $row->kodepasien ?>" class="form-control">
                  </div>
                  <div class="form-group <?=set_value('nama_pasien') ? 'has-error' : null ?>">
                    <label>Nama</label>
                    <input type="text" name="nama_pasien" readonly value="<?=$this->input->post('nama_pasien') ?? $row->nama_pasien ?>" class="form-control">
                    <?=form_error('nama_pasien')?>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group <?=set_value('jenis_kelamin') ? 'has-error' : null ?>">
                        <label>Jenis Kelamin *</label>
                        <select name="jenis_kelamin" readonly="true" value="<?=set_value('jenis_kelamin')?>" class="form-control">
                        <?php $jenis_kelamin = $this->input->post('jenis_kelamin') ? $this->input->post('jenis_kelamin') : $row->jenis_kelamin ?>
                          <option value="Laki-laki" <?=set_value('jenis_kelamin') == "Laki-laki" ? "selected" : null?>>Laki-laki</option>
                          <option value="Perempuan" <?= $jenis_kelamin == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin') ?>
                      </div>
                      <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                          <?php $status = $this->input->post('status') ? $this->input->post('status') : $row->status ?>
                          <option value="0">Belum Aktif</option>
                          <option value="1" <?= $status == 1 ? 'selected' : null ?>>Aktif</option>
                        </select>
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