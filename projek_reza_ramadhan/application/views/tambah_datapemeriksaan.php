<section class="content-header">

    <h1>
        Catatan Pemeriksaan
    </h1>
</section>

<section class="content">
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Data Pasien</h3>
            </div>
    <div class="box box-widget">
        <div class="box-body">
            <form action="<?= site_url('pemeriksaan/tambah') ?>" method="post">
                <table width="100%">
                    <tr>
                        <td style="vertical-align:top">
                            <label>Kode Pasien</label>
                        </td>
                        <td>
                            <div class="form-group">
                            <input type="hidden" name="koko" value="<?= $row->id_rawatjalan ?>" id="id_rawatjalan">
                            <input type="hidden" name="id_pasien" value="<?= $row->id_pasien ?>" id="id_pasien">
                                <input type="text" name="kodepasien" readonly value="<?= $row->kodepasien ?>" class="form-control" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">
                            <label>Nama Pasien</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="nama_pasien" readonly value="<?= $row->nama_pasien ?>" class="form-control" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">
                            <label>Jenis Kelamin</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="jenis_kelamin" readonly value="<?= $row->jenis_kelamin ?>" class="form-control" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">
                            <label>Tempat Lahir</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="tempat_lahir" readonly value=<?= $row->tempat_lahir ?> class="form-control" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">
                            <label>Tanggal Lahir</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="tanggal_lahir" readonly value="<?= $row->tanggal_lahir ?>" class="form-control" required>
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
                <label>Tanggal Daftar</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="date" name="tgl_layanan" value="<?=date('Y-m-d') ?>" class="form-control" required>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label>Catatan Hasil Pemeriksaan</label>
              </td>
              <td>
                <div class="form-group">
                  <textarea name="catatan"  class="form-control" rows="2" placeholder=""></textarea>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-5">
<div class="form-group">
    <button type="submit" name="tambah_rawatjalan" class="btn btn-success btn-lg">
    <i class="fa fa-paper-plane"></i> Daftar
    </button>
    <button type="Reset" class="btn btn-warning btn-lg">
    <i class="fa fa-paper-plane"></i> Reset
    </button>
  </div>
  </form>


</section>