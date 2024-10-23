<section class="konten mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        Biodata Penyewa
                    </div>

                    <div class="card-body">
                        <table class="table table-sm">
                            <tr>
                                <th>Nama Penyewa</th>
                                <td>:</td>
                                <td><?= $d['nama_penyewa']; ?></td>
                            </tr>

                            <tr>
                                <th>No HP</th>
                                <td>:</td>
                                <td><?= $d['no_hp']; ?></td>
                            </tr>


                        </table>
                    </div>
                </div>

                <div class="card border-primary mt-4">
                    <div class="card-header bg-primary text-white">
                        Riwayat Transaksi
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tgl Sewa</th>
                                        <th scope="col">Lapangan</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">waktu</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php $no='1'; foreach($riwayat as $r){ ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $r['tgl_sewa']; ?></td>
                                        <td><?= $r['nama_lapangan']; ?></td>
                                        <td><?= $r['harga']; ?></td>
                                        <td><?= $r['waktu']; ?></td>
                                    </tr>
                                    <?php $no++; } ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-danger">
                    <div class="card-header bg-danger text-white">
                        Catatan (Rekam Transaksi)
                        <a href="<?= base_url('transaksi');?>" class="btn btn-warning btn-sm float-right">Kembali</a>
                    </div>

                    <div class="card-body">
                        <form method="post" action="<?= base_url();?>transaksi/insert_rm">
                            <input type="hidden" name="id" value="<?= $d['id_transaksi']; ?>">
                            <div class="form-group">
                                <label for="">Nama Lapangan</label>
                                <textarea name="nama_lapangan" class="form-control" readonly required><?= $d['nama_lapangan'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">harga</label>
                                <textarea name="harga" class="form-control" required><?= $d['harga'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">waktu</label>
                                <textarea name="waktu" class="form-control" required><?= $d['waktu'];?></textarea>
                            </div>

                            <button type="submit" class="btn btn-danger btn-sm">Simpan Data</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>