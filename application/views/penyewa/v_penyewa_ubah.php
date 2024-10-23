<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-dark">
			<div class="card-header bg-outline-primary"> 
				<?=$title; ?>

				<a href="<?=base_url('Penyewa'); ?>" class="btn btn-outline-dark float-right">Kembali</a>
			</div>
			<div class="card-body"> 
				<form method="POST" action="<?=base_url('Penyewa/update'); ?>">
					<input type="hidden" name="id_penyewa" value="<?= $r['id_penyewa']; ?>">
				  <div class="form-group">
				  	<label for="">Nama Penyewa</label>
				  	<input type="text" name="nama_penyewa" value="<?= $r['nama_penyewa']; ?>" class="form-control" required>
				  </div>
				  <div class="form-group">
				  	<label for="">Nomor Hp</label>
				  	<input type="text" name="no_hp" value="<?= $r['no_hp']; ?>" class="form-control" required>
				  </div>

				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>