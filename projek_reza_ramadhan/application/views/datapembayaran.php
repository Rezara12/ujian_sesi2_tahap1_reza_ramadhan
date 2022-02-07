<section class="content-header">
      <h1>
        Pembayaran
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pembayaran</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
               
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?=$data->nama_pasien?></td>
                            <td><?=$data->nama_dokter?></td>
                        
                            <td class="text-center" width="200px">
                            
                            
                            <form action="<?= site_url('datadokter/hapus') ?>" method="post">
                            <a href="<?= site_url('pembayaran/bayar/'.$data->id_layanan) ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-money"></i> Cek Pembayaran
                            </a>      
                            &nbsp;
                                <!-- <input type="hidden" name="id_dokter" value="<?= $data->id_dokter ?>">
                                <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>  -->
                                
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

