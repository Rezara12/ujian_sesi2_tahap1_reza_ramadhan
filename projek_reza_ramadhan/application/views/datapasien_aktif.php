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
                            <th>Status</th>
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
                            <td style="width:10%;"><?=$data->alamat?></td>
                            <td><?=$data->status == 0 ? "Belum Aktif" : "Aktif" ?></td>
                            <td class="text-center" width="150px" style="width:25%;">
                            
                            <form action="<?= site_url('datapasien/hapus') ?>" method="post">
                            <a href="<?= site_url('datapasien/aktivasi/'.$data->id_pasien) ?>" class="btn btn-default btn-xs">
                                <i class="fa fa-eye"></i> Aktifkan
                            </a>
                            &nbsp;
                            <a href="<?= site_url('datapasien/edit/'.$data->id_pasien) ?>" class="btn btn-default btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>      
                            &nbsp;
                                <input type="hidden" name="id_pasien" value="<?= $data->id_pasien ?>">
                                <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Hapus
                                </button> 
                                &nbsp;
                            <a href="<?= site_url('datapasien/print_kartu_pasien/'.$data->id_pasien) ?>" class="btn btn-default btn-xs" target="_blank">
                                <i class="fa fa-print"></i> Print
                            </a>
                                
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

