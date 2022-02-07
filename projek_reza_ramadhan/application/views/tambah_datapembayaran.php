<section class="content-header">
    <h1>
        Tambah Data Pembayaran
    </h1>
</section>

<section class="content">

      <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Data Pembayaran Pasien <?= $row->nama_pasien ?></h3>
          <div class="box-body">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
          <form action="<?=site_url('pembayaran/simpan')?>" method="post">
                  <div class="form-group">
                    <label>Kode Pasien</label>
                    <input type="hidden" name="id_layanan" readonly value="<?= $row->id_layanan ?>" class="form-control">
                    <input type="hidden" name="id_pasien" readonly value="<?= $row->id_pasien ?>" class="form-control">
                    <input type="hidden" name="tgl_transaksi" value="<?=date('Y-m-d') ?>" class="form-control">
                    <input type="text" name="kodepasien" readonly value="<?= $row->kodepasien ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Pasien</label>
                    <input type="text" name="nama_pasien" readonly value="<?= $row->nama_pasien ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Dokter</label>
                    <input type="hidden" name="id_dokter" readonly value="<?= $row->id_dokter ?>" class="form-control">
                    <input type="text" name="nama_dokter" readonly value="<?= $row->nama_dokter ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Harga Pemeriksaan Dokter</label>
                    <input type="text" name="harga_layanan" readonly value="Rp. <?= number_format($row->harga_layanan,0,',','.') ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Harga Obat</label>
                    <input type="text" name="harga_obat" readonly value="Rp. <?= number_format($resep->total,0,',','.') ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Pemeriksaan</label>
                    <input type="text" name="tgl_layanan" readonly value="<?= indo_date($row->tgl_layanan) ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Jenis Pasien</label>
                    <input type="text" name="jenis_pasien" readonly value="<?= $row->jenis_pasien ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Total Tagihan</label>
                    <input type="text" name="total_tagihan" id="bil2" readonly value="<?= $row->harga_layanan + $resep->total ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Uang Bayar</label>
                    <input type="text" name="uang_bayar" id="bil1" autocomplete="off" value="" class="form-control">
                  </div>
                      <div class="form-group">
                    <label>Uang Kembalian</label>
                    <input type="text" name="uang_kembalian" id="toothasil" readonly  value="" class="form-control">
                  </div>
                  <div class="form-group">
                         <button type="submit" class="btn btn-primary">
                           <i class="fa fa-paper-plane"></i> Simpan
                          </button>
                      </div>
                      </form>
                         
          </div>
            </div>
          </div>
      </div>

    </section>