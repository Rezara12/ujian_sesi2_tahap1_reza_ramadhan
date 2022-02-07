<section class="content-header">
      <h1>
        Antrian Pemeriksaan
      </h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Antrian Pemeriksaan</h3>
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
                            <th>Tanggal Daftar</th>
                            <th>Action</th>
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
                                <td><?= indo_date($data->date) ?></td>
                                <td>
                                <form action="<?= site_url('datadokter/hapus') ?>" method="post">
                                    <a href="<?= site_url('pemeriksaan/proses/'.$data->id_rawatjalan) ?>" class="btn btn-primary btn-xs">
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
            