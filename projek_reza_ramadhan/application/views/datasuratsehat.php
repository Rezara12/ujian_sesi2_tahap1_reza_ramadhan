<section class="content-header">
      <h1>
        Data Surat Sehat
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Surat Sehat</h3>
                <div class="pull-right">
                    <a href="<?= site_url('datasuratsehat/tambah') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i> Tambah Data Surat Sehat
                    </a>
                </div>
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
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?=$data->kode_suratsehat?></td>
                            <td><?=$data->nama_suratsehat?></td>
                            <td><?=$data->tempatlahir_suratsehat?></td>
                            <td><?=$data->tanggallahir_suratsehat?></td>
                            <td><?=$data->keperluan?></td>
                            <td class="text-center" width="160px">
                            
                            
                            <form action="<?= site_url('datasuratsehat/hapus') ?>" method="post">
                            <a href="<?= site_url('datasuratsehat/edit/'.$data->id_suratsehat) ?>" class="btn btn-default btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>      
                            &nbsp;
                                <input type="hidden" name="id_suratsehat" value="<?= $data->id_suratsehat ?>">
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

