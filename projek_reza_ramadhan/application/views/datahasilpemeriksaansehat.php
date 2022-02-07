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
                            <th>Kode Surat Sehat</th>
                            <th>Nama</th>
                            <th>Keperluan</th>
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach($row as $key => $data) {?>
                            <tr>
                                <td style="width:5%;"><?= $no++ ?>.</td>
                                <td><?= $data->kode_suratsehat ?></td>
                                <td><?= $data->nama_suratsehat ?></td>
                                <td><?= $data->keperluan ?></td>
                                <td><?= $data->tinggi_badan ?></td>
                                <td><?= $data->berat_badan ?></td>
                                <td> 
                                <form action="<?= site_url('pemeriksaan_sehat/hapus') ?>" method="post"> 
                                    <a href="<?= site_url('pemeriksaan_sehat/cetak_surat/'.$data->id_pemeriksaan) ?>" class="btn btn-warning btn-xs" target="_blank">
                                        <i class="fa fa-print"></i> Cetak Surat Sehat
                                    </a> 
                                    <?php if ($this->fungsi->user_login()->level == 1) { ?>     
                                    &nbsp;
                                    <input type="hidden" name="id_pemeriksaan" value="<?= $data->id_pemeriksaan ?>">
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
            