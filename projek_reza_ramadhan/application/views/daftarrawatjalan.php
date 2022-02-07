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
        <form action="<?= site_url('datarawatjalan/proses') ?>" method="post">
          <table width="100%">
          <tr>
              <td style="vertical-align:top">
                <label>Tanggal Daftar</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="date" name="date" value="<?=date('Y-m-d') ?>" class="form-control" required>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="kodepasien">Kode Pasien</label>
              </td>
              <td>
                <div class="form-group input-group">
                  <input type="hidden" name="id_pasien" id="id_pasien">
                  <input type="text" name="kodepasien" id="kodepasien" value="" readonly class="form-control" required autofocus>
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-pasien">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="nama_pasien">Nama Pasien</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="jenis_kelamin">Jenis Kelamin</label>
              </td>
              <td>
              <div class="form-group">
                  <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="tempat_lahir">Tempat Lahir</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="tempat_lahir" id="tempat_lahir" value="" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="tanggal_lahir">Tanggal Lahir</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="" class="form-control" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="alamat">Alamat</label>
              </td>
              <td>
                <div class="form-group">
                  <textarea name="alamat" id="alamat" class="form-control" rows="3" readonly></textarea>
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


      <div class="col-md-6">
    <div class="box box-info">
      <div class="box box-widget">
        <div class="box-body">
          <table width="100%">
            <tr>
              <td style="vertical-align:top">
                <label for="jenis_pasien">Jenis Pasien</label>
              </td>
              <td>
              <div class="radio" >
                    <label>
                      <input type="radio" name="jenis_pasien" value="BPJS" id="bpjs">
                      BPJS
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jenis_pasien" value="Umum" id="umum">
                      Umum
                    </label>
                  </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="spesialis">No BPJS</label>
              </td>
              <td>
              <div class="form-group">
                  <input type="text" name="no_bpjs" id="no_bpjs" value="" class="form-control" >
                </div>
              </td>
            </tr>
          </table>
          </div>
      </div> 
    </div>
    </div> 


      <div class="col-lg-12">
<div class="form-group">
    <button type="submit" name="tambah_rawatjalan" class="btn btn-success btn-lg">
    <i class="fa fa-paper-plane"></i> Daftar
    </button>
    <button type="Reset" class="btn btn-warning btn-lg">
    <i class="fa fa-paper-plane"></i> Reset
    </button>
  </div>
  </form>
  </div>
</section>

<div class="modal fade" id="modal-pasien">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Pilih Pasien</h4>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered table-striped" id="table1">
          <thead>
            <tr>
              <th>Kode Pasien</th>
              <th>Nama Pasien</th>
              <th>Jenis Kelamin</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($pasien as $p => $data) { ?>
            <tr>
              <td><?= $data->kodepasien ?></td>
              <td><?= $data->nama_pasien ?></td>
              <td><?= $data->jenis_kelamin ?></td>
              <td style="width:10%;">
                <button class="btn btn-xs btn-info" id="select"
                  data-id_pasien="<?= $data->id_pasien ?>"
                  data-kodepasien="<?= $data->kodepasien ?>"
                  data-nama_pasien="<?= $data->nama_pasien ?>"
                  data-jenis_kelamin="<?= $data->jenis_kelamin ?>"
                  data-tempat_lahir="<?= $data->tempat_lahir ?>"
                  data-tanggal_lahir="<?= $data->tanggal_lahir ?>"
                  data-alamat="<?= $data->alamat ?>">
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





