<section class="content-header">
      <h1>
        Edit Data Dokter
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Data Dokter</h3>
          <div class="box-body">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
          <form action="" method="post">
                  <div class="form-group">
                  <label>Kode Dokter</label>
                    <input type="hidden" name="id_dokter" value="<?=$row->id_dokter?>">
                    <input type="text" name="kodedokter" readonly value="<?=$this->input->post('kodedokter') ?? $row->kodedokter ?>" class="form-control">
                  </div>
                  <div class="form-group <?=set_value('nama_dokter') ? 'has-error' : null ?>">
                    <label>Nama Dokter *</label>
                    <input type="text" name="nama_dokter" value="<?=$this->input->post('nama_dokter') ?? $row->nama_dokter ?>" class="form-control">
                    <?=form_error('nama_dokter')?>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group <?=set_value('spesialis') ? 'has-error' : null ?>">
                        <label>Spesialis</label>
                        <select name="spesialis" value="<?=set_value('spesialis')?>" class="form-control">
                        <?php $spesialis = $this->input->post('spesialis') ? $this->input->post('spesialis') : $row->spesialis ?>
                        <option value="Umum" <?= $spesialis == 'Umum' ? 'selected' : null ?>>Umum</option>
                          <option value="Gigi" <?= $spesialis == 'Gigi' ? 'selected' : null ?>>Gigi</option>
                          <option value="Gizi" <?= $spesialis == 'Gizi' ? 'selected' : null ?>>Gizi</option>
                          <option value="Bedah" <?= $spesialis == 'Bedah' ? 'selected' : null ?>>Bedah</option>
                          <option value="Dalam" <?= $spesialis == 'Dalam' ? 'selected' : null ?>>Dalam</option>
                          <option value="Anak" <?= $spesialis == 'Anak' ? 'selected' : null ?>>Anak</option>
                          <option value="Obyn" <?= $spesialis == 'Obyn' ? 'selected' : null ?>>Obyn</option>
                          <option value="Jiwa" <?= $spesialis == 'Jiwa' ? 'selected' : null ?>>Jiwa</option>
                          <option value="Mata" <?= $spesialis == 'Mata' ? 'selected' : null ?>>Mata</option>
                          <option value="THT" <?= $spesialis == 'THT' ? 'selected' : null ?>>THT</option>
                          <option value="Kulit dan Kelamin" <?= $spesialis == 'Kulit dan Kelamin' ? 'selected' : null ?>>Kulit dan Kelamin</option>
                          <option value="Kardiologi" <?= $spesialis == 'Kardiologi' ? 'selected' : null ?>>Kardiologi</option>
                          <option value="Paru" <?= $spesialis == 'Paru' ? 'selected' : null ?>>Paru</option>
                          <option value="Saraf" <?= $spesialis == 'Saraf' ? 'selected' : null ?>>Saraf</option>
                          <option value="Bedah Saraf" <?= $spesialis == 'Bedah Saraf' ? 'selected' : null ?>>Bedah Saraf</option>
                          <option value="Bedah Orthopedi" <?= $spesialis == 'Bedah Orthopedi' ? 'selected' : null ?>>Bedah Orthopedi</option>
                          <option value="Urologi" <?= $spesialis == 'Urologi' ? 'selected' : null ?>>Urologi</option>
                          <option value="Rehabilitasi Medik" <?= $spesialis == 'Rehabilitasi Medik' ? 'selected' : null ?>>Rehabilitasi Medik</option>
                          <option value="Patoligi Anatomi" <?= $spesialis == 'Patoligi Anatomi' ? 'selected' : null ?>>Patoligi Anatomi</option>
                          
                        </select>
                        <?= form_error('spesialis') ?>
                      </div>
                      <div class="form-group <?=set_value('harga_layanan') ? 'has-error' : null ?>">
                    <label>Harga Layanan *</label>
                    <input type="text" name="harga_layanan" value="<?=$this->input->post('harga_layanan') ?? $row->harga_layanan ?>" class="form-control">
                    <?= form_error('harga_layanan') ?>
                  </div>
                  <div class="form-group <?=set_value('harga_layanan') ? 'has-error' : null ?>">
                    <label>Jam Praktek *</label>
                    <input type="text" name="jam_praktek" value="<?=$this->input->post('jam_praktek') ?? $row->jam_praktek ?>" class="form-control">
                    <?= form_error('jam_praktek') ?>
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
