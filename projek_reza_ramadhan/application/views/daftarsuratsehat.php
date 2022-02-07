<section class="content-header">
<div class="row">
    <div class="col-md-offset-5">
  <h3>
    Daftar Rawat Jalan
  </h3>
</div>
</div>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-6">
    
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pasien</h3>
            </div>
      <div class="box box-widget">
        <div class="box-body">
        <form action="<?= site_url('daftarsuratsehat/proses') ?>" method="post">
          <table width="100%">
          <tr>
              <td style="vertical-align:top">
                <label>Tanggal Daftar</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="tanggal_daftarsurat" name="tanggal_daftarsurat" value="<?=date('Y-m-d') ?>" class="form-control" required>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="kode_suratsehat">Kode Surat Sehat</label>
              </td>
              <td>
                <div class="form-group input-group">
                  <input type="hidden" name="id_suratsehat" id="id_suratsehat">
                  <input type="text" name="kode_suratsehat" id="kode_suratsehat" value="" readonly class="form-control" required autofocus>
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-suratsehat">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="nama_pasien">Nama</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="nama_suratsehat" id="nama_suratsehat" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="jeniskelamin_suratsehat">Jenis Kelamin</label>
              </td>
              <td>
              <div class="form-group">
                  <input type="text" name="jeniskelamin_suratsehat" id="jeniskelamin_suratsehat" value="" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="tempatlahir_suratsehat">Tempat Lahir</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="tempatlahir_suratsehat" id="tempatlahir_suratsehat" value="" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="tanggallahir_suratsehat">Tanggal Lahir</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="date" name="tanggallahir_suratsehat" id="tanggallahir_suratsehat" value="" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="alamat_suratsehat">alamat_suratsehat</label>
              </td>
              <td>
                <div class="form-group">
                  <textarea name="alamat_suratsehat" id="alamat_suratsehat" class="form-control" rows="3" readonly></textarea>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="keperluan">Keperluan</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="keperluan" id="keperluan" value="" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
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
                <div class="form-group input-group">
                  <input type="hidden" name="id_dokter" id="id_dokter">
                  <input type="text" name="kodedokter" id="kodedokter" readonly class="form-control" required autofocus>
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-dokter">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="nama_dokter">Nama Dokter</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" id="nama_dokter" value="" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="spesialis">Spesialis</label>
              </td>
              <td>
              <div class="form-group">
                  <input type="text" name="spesialis" id="spesialis" value="" class="form-control" readonly>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div> 
    </div>
    </div>



      <div class="col-lg-6">
<div class="form-group">
    <button type="submit" name="tambah_daftarsehat" class="btn btn-success btn-lg">
    <i class="fa fa-paper-plane"></i> Daftar
    </button>
    <button type="Reset" class="btn btn-warning btn-lg">
    <i class="fa fa-paper-plane"></i> Reset
    </button>
  </div>
  </form>
  </div>
</section>

<div class="modal fade" id="modal-suratsehat">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Pilih</h4>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered table-striped" id="table1">
          <thead>
            <tr>
              <th>Kode Surat Sehat</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Keperluan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($pasien_sehat as $p => $data) { ?>
            <tr>
              <td><?= $data->kode_suratsehat ?></td>
              <td><?= $data->nama_suratsehat ?></td>
              <td><?= $data->jeniskelamin_suratsehat ?></td>
              <td><?= $data->keperluan ?></td>
              <td style="width:10%;">
                <button class="btn btn-xs btn-info" id="select1"
                  data-id_suratsehat="<?= $data->id_suratsehat ?>"
                  data-kode_suratsehat="<?= $data->kode_suratsehat ?>"
                  data-nama_suratsehat="<?= $data->nama_suratsehat ?>"
                  data-jeniskelamin_suratsehat="<?= $data->jeniskelamin_suratsehat ?>"
                  data-tempatlahir_suratsehat="<?= $data->tempatlahir_suratsehat ?>"
                  data-tanggallahir_suratsehat="<?= $data->tanggallahir_suratsehat ?>"
                  data-alamat_suratsehat="<?= $data->alamat_suratsehat ?>"
                  data-keperluan="<?= $data->keperluan ?>">
                  
                  <i class="fa fa-check"></i> Pilih
                </button>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-dokter">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Pilih Dokter</h4>
      </div>
      <div class="modal-body table-responsive">
      <table class="table table-bordered table-striped" id="table2">
          <thead>
            <tr>
              <th>Kode Pasien</th>
              <th>Nama Dokter</th>
              <th>Spesialis</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($dokter as $d => $data) { ?>
            <tr>
              <td><?= $data->kodedokter ?></td>
              <td><?= $data->nama_dokter ?></td>
              <td><?= $data->spesialis ?></td>
              <td style="width:10%;">
                <button class="btn btn-xs btn-info" id="selectdokter"
                  data-id_dokter="<?= $data->id_dokter ?>"
                  data-kodedokter="<?= $data->kodedokter ?>"
                  data-nama_dokter="<?= $data->nama_dokter ?>"
                  data-spesialis="<?= $data->spesialis ?>"
                  <i class="fa fa-check"></i> Pilih
                </button>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
</div>





