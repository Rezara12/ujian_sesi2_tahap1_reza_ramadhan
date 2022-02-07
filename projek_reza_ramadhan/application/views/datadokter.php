<section class="content-header">
      <h1>
        Data Dokter
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Dokter</h3>
                <div class="pull-right">
                    <a href="<?= site_url('datadokter/tambah') ?>" class="btn btn-primary">
                        <i class="fa fa-user-plus"></i> Tambah Data Dokter
                    </a>
                    &nbsp;
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Harga Layanan</th>
                            <th>Jam Praktek</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?=$data->kodedokter?></td>
                            <td><?=$data->nama_dokter?></td>
                            <td><?=$data->spesialis?></td>
                            <td>Rp. <?=number_format($data->harga_layanan,0,',','.')?></td>
                            <td><?=$data->jam_praktek?></td>
                            <td class="text-center" width="160px">
                            
                            
                            <form action="<?= site_url('datadokter/hapus') ?>" method="post">
                            <a href="<?= site_url('datadokter/edit/'.$data->id_dokter) ?>" class="btn btn-default btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>      
                            &nbsp;
                            <input type="hidden" name="id_dokter" value="<?= $data->id_dokter ?>">
                                <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                                
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

