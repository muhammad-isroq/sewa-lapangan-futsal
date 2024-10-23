<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('transaksi'); ?>" 
                    class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('transaksi/insert'); ?>">
                    <div class="form-group">
                        <label for="">Tanggal transaksi</label>
                        <input type="date" name="tgl_sewa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">penyewa</label>
                        <select name="penyewa" id="" class="form-control" required>
                            <option value="">- Pilih penyewa -</option>
                            <?php foreach($penyewa as $r){ ?>
                            <option value="<?= $r['id_penyewa'];?>">
                                <?= $r['nama_penyewa'];?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">lapangan Tujuan</label>
                        <select name="lapangan" id="" class="form-control" required>
                            <option value="">- Pilih lapangan -</option>
                            <?php foreach($lapangan as $r){ ?>
                            <option value="<?= $r['id_lapangan'];?>"><?= $r['nama_lapangan'];?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>