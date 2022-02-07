<section class="content-header">
      <h1>
        Data Pasien
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Pasien</h3>
                <div class="pull-right">
                    <a href="<?= site_url('daftarpasien') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i> Tambah Data Pasien
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
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td style="width:3%;"><?= $no++ ?>.</td>
                            <td><?=$data->kodepasien?></td>
                            <td><?=$data->nama_pasien?></td>
                            <td><?=$data->jenis_kelamin?></td>
                            <td><?=$data->tempat_lahir?></td>
                            <td><?=indo_date($data->tanggal_lahir)?></td>
                            <td><?=$data->alamat?></td>
                            <td class="text-center">
                            
                            <form action="<?= site_url('datapasien/hapus') ?>" method="post">
                            <a href="<?= site_url('datapasien/aktivasi/'.$data->id_pasien) ?>" class="btn btn-default btn-xs">
                                <i class="fa fa-eye"></i> Aktifkan
                            </a>
                            &nbsp;
                            </form>
                            </td>
                        </tr>
                        <?php 
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

