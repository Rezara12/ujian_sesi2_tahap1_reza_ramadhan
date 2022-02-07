<section class="content-header">
      <h1>
        Pembayaran Pasien
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pembayaran pasien</h3>
                <div class="pull-right">
                    <a href="<?= site_url('pembayaranpasien/tambah') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i> Tambah Pembayaran pasien
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Namat</th>
                            <th>Jumlah</th>
                            <th>Alamat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->jumlah?></td>
                            <td><?=$data->alamat?></td>
                            <td class="text-center" width="160px">
                            
                            
                            <form action="<?= site_url('pembayaranpasien/hapus') ?>" method="post">
                            <a href="<?= site_url('pembayaranpasien/edit/'.$data->id) ?>" class="btn btn-default btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>      
                            &nbsp;
                                <input type="hidden" name="id" value="<?= $data->id ?>">
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

