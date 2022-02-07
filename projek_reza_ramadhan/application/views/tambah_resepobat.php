<section class="content-header">

  <h1>
    Tambah Resep Obat
  </h1>

</section>


<section class="content">
  <div class="row">
    <div class="col-md-12">
    
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Obat</h3>
              <div class="pull-right">
                    <a href="<?= site_url('pemeriksaan/hasil') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
      <div class="box box-widget">
        <div class="box-body">
        <form action="<?=site_URL()?>pemeriksaan/detail/<?php echo $this->uri->segment(3)?>" method="post">
          <table width="100%">
            <tr>
              <td style="vertical-align:top">
                <label for="nama_obat">Nama Obat</label>
              </td>
              <td>
                <div class="form-group input-group">
                <input type="hidden" name="id_layanan" value="<?= $this->uri->segment(3); ?>" id="id_layanan">
                  <input type="hidden" name="id_obat" id="id_obat">
                  <input type="text" name="nama_obat" id="nama_obat" value="" class="form-control" readonly required autofocus>
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-obat">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:top">
                <label for="harga_obat">Harga Obat</label>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="harga_obat" id="harga_obat" class="form-control" readonly>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div> 

      <div class="col-md-offset-5">
<div class="form-group">
    <button type="submit" name="tambah_resepobat" class="btn btn-success">
    <i class="fa fa-paper-plane"></i> Simpan
    </button>
    <button type="Reset" class="btn btn-warning">
    <i class="fa fa-paper-plane"></i> Reset
    </button>
  </div>
  </form>
  </div>
  </div>
</section>

<section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Obat</h3>
                <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="">
                    <thead>
                        <tr>
                            <th style="width:10%;">#</th>
                            <th style="width:40%;">Nama Obat</th>
                            <th style="width:40%;">Harga Obat</th>
                            <th style="width:10%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($data_tabel as $key => $a) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?=$a->nama_obat?></td>
                            <td>Rp. <?=number_format($a->harga_obat,0,',','.')?></td>
                            <td>
                            <form action="" method="post">
                                <input type="hidden" name="id_resep" value="<?= $a->id_resep ?>">
                                <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" name="hapus_resepobat" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>
                        <?php 
                        } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        </div>
</section>


<div class="modal fade" id="modal-obat">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Pilih Obat</h4>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered table-striped" id="table1">
          <thead>
            <tr>
              <th>Nama Obat</th>
              <th>Harga Obat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($obat as $o => $data) { ?>
            <tr>
              <td><?= $data->nama_obat ?></td>
              <td>Rp. <?=number_format ($data->harga_obat,0,',','.') ?></td>
              <td style="width:10%;">
                <button class="btn btn-xs btn-info" id="selectobat"
                  data-id_obat="<?= $data->id_obat ?>"
                  data-nama_obat="<?= $data->nama_obat ?>"
                  data-harga_obat="<?= $data->harga_obat ?>">
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
</>






