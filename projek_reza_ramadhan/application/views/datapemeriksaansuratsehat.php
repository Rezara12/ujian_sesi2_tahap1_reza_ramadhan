<section class="content-header">
      <h1>
        Daftar Pemeriksaan Surat Sehat
      </h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Pemeriksaan Surat Sehat</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Surat Sehat</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Keperluan</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach($row as $key => $data) {?>
                            <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?=$data->kode_suratsehat?></td>
                            <td><?=$data->nama_suratsehat?></td>
                            <td><?=$data->tempatlahir_suratsehat?></td>
                            <td><?=$data->tanggallahir_suratsehat?></td>
                            <td><?=$data->keperluan?></td>
                                <td>
                                <form action="<?= site_url('datadokter/hapus') ?>" method="post">
                                    <a href="<?= site_url('pemeriksaan_sehat/proses/'.$data->id_daftarsurat) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-edit"></i> Proses
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
            