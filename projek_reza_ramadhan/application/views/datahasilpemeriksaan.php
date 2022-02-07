<section class="content-header">
      <h1>
        Data Hasil Pemeriksaan
      </h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Hasil Pemeriksaan</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
                            <th>Catatan Pemeriksaan</th>
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
                                <td><?= $data->catatan ?></td>
                                <td> 
                                <form action="<?= site_url('pemeriksaan/hapus') ?>" method="post">
                                    <a href="<?= site_url('pemeriksaan/detail/'.$data->id_layanan) ?>" class="btn btn-default btn-xs">
                                        <i class="fa fa-edit"></i> Resep
                                    </a> 
                                    &nbsp;
                                    <a href="<?= site_url('pemeriksaan/cetak_resep/'.$data->id_layanan) ?>" class="btn btn-warning btn-xs" target="_blank">
                                        <i class="fa fa-print"></i> Cetak Resep
                                    </a> 
                                    <?php if ($this->fungsi->user_login()->level == 1) { ?>     
                                    &nbsp;
                                    <input type="hidden" name="id_layanan" value="<?= $data->id_layanan ?>">
                                        <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button> 
                                    <?php } ?>
                            </form> 
                            </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
            