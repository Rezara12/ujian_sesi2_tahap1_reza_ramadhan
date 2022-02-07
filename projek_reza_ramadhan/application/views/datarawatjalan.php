<section class="content-header">
      <h1>
        Data Rawat Jalan
      </h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Rawat Jalan</h3>
                <div class="pull-right">
                    <a href="<?= site_url('datarawatjalan/tambah') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i> Daftar Rawat Jalan
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Jenis Pasien</th>
                            <th>No BPJS</th>
                            <th>Tanggal Daftar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach($row as $key => $data) {?>
                            <tr>
                                <td style="width:5%;"><?= $no++ ?>.</td>
                                <td><?= $data->kodepasien ?></td>
                                <td><?= $data->nama_pasien ?></td>
                                <td><?= $data->nama_dokter ?></td>
                                <td><?= $data->spesialis ?></td>
                                <td><?= $data->jenis_pasien?></td>
                                <td><?= $data->no_bpjs ?></td>
                                <td><?= indo_date($data->date) ?></td>
                                <td>
                                <form action="<?= site_url('datarawatjalan/hapus') ?>" method="post">
                                 <a id="set_detail" class="btn btn-default btn-xs" 
                                    data-toggle="modal" data-target="#modal-detail"
                                    data-kodepasien="<?= $data->kodepasien ?>"
                                    data-nama_pasien="<?= $data->nama_pasien ?>"
                                    data-nama_dokter="<?= $data->nama_dokter ?>"
                                    data-spesialis="<?= $data->spesialis ?>"
                                    data-jenis_pasien="<?= $data->jenis_pasien ?>"
                                    data-no_bpjs="<?= $data->no_bpjs ?>"
                                    data-date="<?= indo_date($data->date) ?>"
                                 >
                                 
                                    <i class="fa fa-eye"></i> Detail
                                 </a>
                                 <input type="hidden" name="id_rawatjalan" value="<?= $data->id_rawatjalan ?>">
                                 
                                    <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

<div class="modal fade" id="modal-detail">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Detail Rawat Jalan</h4>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered no-margin">
            <tbody>
                <tr>
                    <th>Kode Pasien</th>
                    <td><span id="kodepasien"></span></td>
                </tr>
                <tr>
                    <th>Nama Pasien</th>
                    <td><span id="nama_pasien"></span></td>
                </tr>
                <tr>
                    <th>Nama Dokter</th>
                    <td><span id="nama_dokter"></span></td>
                </tr>
                <tr>
                    <th>Spesialis</th>
                    <td><span id="spesialis"></span></td>
                </tr>
                <tr>
                    <th>Jenis Pasien</th>
                    <td><span id="jenis_pasien"></span></td>
                </tr>
                <tr>
                    <th>No BPJS</th>
                    <td><span id="no_bpjs"></span></td>
                </tr>
                <tr>
                    <th>Tanggal Daftar</th>
                    <td><span id="date"></span></td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
            