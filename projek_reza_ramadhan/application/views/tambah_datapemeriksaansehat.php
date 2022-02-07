<section class="content-header">

    <h1>
        Catatan Pemeriksaan Surat Sehat
    </h1>
</section>

<section class="content">
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Data Pembuat Surat Sehat</h3>
            </div>
    <div class="box box-widget">
        <div class="box-body">
            <form action="<?= site_url('pemeriksaan_sehat/tambah') ?>" method="post">
                <table width="100%">
                    <tr>
                        <td style="vertical-align:top">
                            <label>Kode Surat Sehat</label>
                        </td>
                        <td>
                            <div class="form-group">
                            <input type="hidden" name="daftarsurat_id" value="<?= $row->id_daftarsurat ?>" id="id_daftarsurat">
                            <input type="hidden" name="id_suratsehat" value="<?= $row->id_suratsehat ?>" id="id_suratsehat">
                                <input type="text" name="kode_suratsehat" readonly value="<?= $row->kode_suratsehat ?>" class="form-control" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">
                            <label>Nama</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="nama_suratsehat" readonly value="<?= $row->nama_suratsehat ?>" class="form-control" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">
                            <label>Jenis Kelamin</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="jeniskelamin_suratsehat" readonly value="<?= $row->jeniskelamin_suratsehat ?>" class="form-control" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">
                            <label>Tempat Lahir</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="tempatlahir_suratsehat" readonly value=<?= $row->tempatlahir_suratsehat ?> class="form-control" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">
                            <label>Tanggal Lahir</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="tanggallahir_suratsehat" readonly value="<?= $row->tanggallahir_suratsehat ?>" class="form-control" required>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
    </div>  
        </div>
    </div>

    <div class="col-md-6">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Dokter</h3>
            </div>
      <div class="box box-widget">
        <div class="box-body">
          <table width="100%">
            <tr>
              <td style="vertical-align:top">
                <label for="kodedokter">Kode Dokter</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="hidden" name="id_dokter" value="<?= $row->id_dokter ?>" id="id_dokter">
                  <input type="text" name="kodedokter" value="<?= $row->kodedokter ?>" id="kodedokter" class="form-control" readonly required>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="nama_dokter">Nama Dokter</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" id="nama_dokter" value="<?= $row->nama_dokter ?>" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="spesialis">Spesialis</label>
              </td>
              <td>
              <div class="form-group">
                  <input type="text" name="spesialis" id="spesialis" value="<?= $row->spesialis ?>" class="form-control" readonly>
                </div>
              </td>
            </tr>
          </table>
          </div>
    </div>  
        </div>
    </div>      

      <div class="col-md-12">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Catatan Pemeriksaan</h3>
            </div>
      <div class="box box-widget">
        <div class="box-body">
          <table width="100%">
          <tr>
              <td style="vertical-align:top">
                <label>Tanggal Pemeriksaan</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="date" name="tanggal_suratsehat" value="<?=date('Y-m-d') ?>" class="form-control" required>
                </div>
              </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <label>Berat Badan</label>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" name="berat_badan" value="<?=set_value('berat_badan')?>" class="form-control" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <label>Tinggi Badan</label>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" name="tinggi_badan" value="<?=set_value('tinggi_badan')?>" class="form-control" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <label>Tensi Darah</label>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" name="tensi_darah" value="<?=set_value('tensi_darah')?>" class="form-control" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <label>Suhu</label>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" name="suhu" value="<?=set_value('suhu')?>" class="form-control" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <label>Nadi</label>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" name="nadi" value="<?=set_value('nadi')?>" class="form-control" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <label>Saturasi</label>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" name="saturasi" value="<?=set_value('saturasi')?>" class="form-control" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <label>Tes Buta Warna</label>
                </td>
                <td>
                    <div class="form-group">
                    <select name="tes_butawarna" value="<?=set_value('tes_butawarna')?>" class="form-control">
                          <option value="">-- Pilih --</option>
                          <option value="Tidak Buta Warna" <?=set_value('tes_butawarna') == "Tidak Buta Warna" ? "selected" : null?>>Tidak Buta Warna</option>
                          <option value="Buta Warna" <?=set_value('tes_butawarna') == "Buta Warna" ? "selected" : null?>>Buta Warna</option>
                        </select>
                    </div>
                </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-5">
<div class="form-group">
    <button type="submit" name="tambah_pemeriksaansehat" class="btn btn-success btn-lg">
    <i class="fa fa-paper-plane"></i> Daftar
    </button>
    <button type="Reset" class="btn btn-warning btn-lg">
    <i class="fa fa-paper-plane"></i> Reset
    </button>
  </div>
  </form>


</section>