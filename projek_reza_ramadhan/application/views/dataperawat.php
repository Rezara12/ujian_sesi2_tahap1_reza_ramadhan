<section class="content-header">
      <h1>
        Data Perawat
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Perawat</h3>
                <div class="pull-right">
                    <a href="<?= site_url('dataperawat/tambah') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i> Tambah Data Perawat
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Perawat</th>
                            <th>Nama Dokter</th>
                            <th>Username</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?=$data->nama_user?></td>
                            <td><?=$data->nama_dokter?></td>
                            <td><?=$data->username?></td>
                            <td class="text-center" width="160px">
                            
                            
                            <form action="<?= site_url('dataperawat/hapus') ?>" method="post">
                            <a href="<?= site_url('dataperawat/edit/'.$data->id_user) ?>" class="btn btn-default btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>      
                            &nbsp;
                                <input type="hidden" name="id_user" value="<?= $data->id_user ?>">
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

