<section class="content-header">
      <h1>
        Data Obat
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Obat</h3>
                <div class="pull-right">
                    <a href="<?= site_url('dataobat/tambah') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i> Tambah Data Obat
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Harga Obat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?=$data->kode_obat?></td>
                            <td><?=$data->nama_obat?></td>
                            <td>Rp. <?=number_format($data->harga_obat,0,',','.')?></td>
                            <td class="text-center" width="160px">
                            
                            
                            <form action="<?= site_url('dataobat/hapus') ?>" method="post">
                            <a href="<?= site_url('dataobat/edit/'.$data->id_obat) ?>" class="btn btn-default btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>      
                            &nbsp;
                                <input type="hidden" name="id_obat" value="<?= $data->id_obat ?>">
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

