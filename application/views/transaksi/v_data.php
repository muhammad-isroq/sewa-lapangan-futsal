<section class="konten mt2">
    <div class="container-fluid">
        <div class="card border-secondary">
            <div class="card-header bg-info text-white">
                <?= $title; ?>

                <a href="<?=base_url('Transaksi/tambah'); ?>" class="btn btn-success btn-sm float-right"> Tambah </a>
            </div>
        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal Sewa</th>
                                <th scope="col">Nama Penyewa</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Nama Lapangan</th>
                                <th scope="col">Rekam Transaksi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no='1'; foreach($transaksi as $r){ ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $r['tgl_sewa']; ?></td>
                                    <td><?= $r['nama_penyewa']; ?></td>
                                    <td><?= $r['no_hp']; ?></td>
                                    <td><?= $r['nama_lapangan']; ?></td>
                                    <td align='center'>
                                        <a href="<?= base_url();?>transaksi/rekam/<?= $r['id_transaksi']; ?>" class="btn btn-success btn-sm" > Rekam </a>
                                    </td>
                                    <td>
                                        <a href="<?=base_url().'Transaksi/edit/'.$r['id_transaksi'];?>" 
                                            class="btn btn-warning btn-sm"> Ubah </a> |
                                        <a href="<?=base_url().'Transaksi/hapus/'.$r['id_transaksi'];?>" 
                                            class="btn btn-danger btn-sm"> Hapus </a>
                                    </td>
                                </tr>
                            <?php $no++; } ?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

