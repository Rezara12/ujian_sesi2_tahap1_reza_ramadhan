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
                            <th>Jenis Pasien</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Total Tagihan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?=$data->nama_pasien?></td>
                            <td><?=$data->nama_dokter?></td>
                            <td><?=$data->jenispasien?></td>
                            <td><?=indo_date($data->tgl_transaksi)?></td>
                            <td>Rp. <?=number_format($data->total_tagihan,0,',','.')?></td>
                            <td class="text-center" width="70px">
                            <a href="<?= site_url('pembayaran/cetak_struk/'.$data->id_transaksi) ?>" class="btn btn-primary btn-xs" target="_blank">
                                <i class="fa fa-print"></i> Cetak Struk Pembayaran
                            </a>
                            </td>
                        </tr>
                        <?php 
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

