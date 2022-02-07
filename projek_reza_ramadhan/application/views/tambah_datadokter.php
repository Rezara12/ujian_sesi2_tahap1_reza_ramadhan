<section class="content-header">
      <h1>
        Aktivasi Data Dokter
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
          <form action="<?=site_url('datadokter/tambah')?>" method="post">
                  <div class="form-group">
                    <label>Kode Dokter</label>
                    <input type="text" name="kodedokter" readonly value="<?= $kodedokter ?>" class="form-control">
                    <input type="hidden" name="tgl_simpan" value="<?=date('Y-m-d') ?>" class="form-control">
                  </div>
                  <div class="form-group <?=form_error('nama_dokter') ? 'has-error' : null ?>">
                    <label>Nama Dokter *</label>
                    <input type="text" name="nama_dokter" value="<?=set_value('nama_dokter')?>" class="form-control">
                    <?=form_error('nama_dokter')?>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group <?=form_error('spesialis') ? 'has-error' : null ?>">
                        <label>Spesialis</label>
                        <select name="spesialis" value="<?=set_value('spesialis')?>" class="form-control">
                          <option value="">-- Pilih --</option>
                          <option value="Umum" <?=set_value('spesialis') == "Umum" ? "selected" : null?>>Umum</option>
                          <option value="Gigi" <?=set_value('spesialis') == "Gigi" ? "selected" : null?>>Gigi</option>
                          <option value="Gizi" <?=set_value('spesialis') == "Gizi" ? "selected" : null?>>Gizi</option>
                          <option value="Bedah" <?=set_value('spesialis') == "Bedah" ? "selected" : null?>>Bedah</option>
                          <option value="Dalam" <?=set_value('spesialis') == "Dalam" ? "selected" : null?>>Dalam</option>
                          <option value="Anak" <?=set_value('spesialis') == "Anak" ? "selected" : null?>>Anak</option>
                          <option value="Obyn" <?=set_value('spesialis') == "Obyn" ? "selected" : null?>>Obyn</option>
                          <option value="Jiwa" <?=set_value('spesialis') == "Jiwa" ? "selected" : null?>>Jiwa</option>
                          <option value="Mata" <?=set_value('spesialis') == "Mata" ? "selected" : null?>>Mata</option>
                          <option value="THT" <?=set_value('spesialis') == "THT" ? "selected" : null?>>THT</option>
                          <option value="Kulit dan Kelamin" <?=set_value('spesialis') == "Kulit dan Kelamin" ? "selected" : null?>>Kulit dan Kelamin</option>
                          <option value="Kardiologi" <?=set_value('spesialis') == "Kardiologi" ? "selected" : null?>>Kardiologi</option>
                          <option value="Paru" <?=set_value('spesialis') == "Paru" ? "selected" : null?>>Paru</option>
                          <option value="Saraf" <?=set_value('spesialis') == "Saraf" ? "selected" : null?>>Saraf</option>
                          <option value="Bedah Saraf" <?=set_value('spesialis') == "Bedah Saraf" ? "selected" : null?>>Bedah Saraf</option>
                          <option value="Bedah Orthopedi" <?=set_value('spesialis') == "Bedah Orthopedi" ? "selected" : null?>>Bedah Orthopedi</option>
                          <option value="Urologi" <?=set_value('spesialis') == "Urologi" ? "selected" : null?>>Urologi</option>
                          <option value="Rehabilitasi Medik" <?=set_value('spesialis') == "Rehabilitasi Medik" ? "selected" : null?>>Rehabilitasi Medik</option>
                          <option value="Patoligi Anatomi" <?=set_value('spesialis') == "Patoligi Anatomi" ? "selected" : null?>>Patoligi Anatomi</option>
                        </select>
                        <?= form_error('spesialis') ?>
                      </div>
                      <div class="form-group <?=form_error('harga_layanan') ? 'has-error' : null ?>">
                    <label>Harga Layanan *</label>
                    <input type="text" name="harga_layanan" value="<?=set_value('harga_layanan')?>" class="form-control">
                    <?= form_error('harga_layanan') ?>
                  </div>
                  <div class="form-group <?=form_error('harga_layanan') ? 'has-error' : null ?>">
                    <label>Waktu Praktek *</label>
                    <input type="text" name="jam_praktek" value="<?=set_value('jam_praktek')?>" class="form-control">
                    <p class="help-block">Contoh : Senin-Rabu : 09.00-15.00</p>
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
