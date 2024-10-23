<br>
<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-0">
			<div class="card-header bg-info text-center shadow rounded"> 
				<h2 class="text-light"><?=$title; ?></h2>

				<a href="<?=base_url('Penyewa/tambah'); ?>" class="btn btn-light float-right">Tambah</a>
			</div>
			<div class="card-body"> 
				<div class="table-responsive">
				  <table class="table">
				    <table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Nama Penyewa</th>
					      <th scope="col">Nomor Hp</th>
					      <th scope="col">atur</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php $no=1; foreach($penyewa as $r){ ?>
					    	<tr>
					    		<td><?= $no; ?></td>
					    		<td><?= $r['nama_penyewa']; ?></td>
					    		<td><?= $r['no_hp']; ?></td>
					    		<td>
					    			<a href="<?=base_url().'Penyewa/edit/'.$r['id_penyewa']; ?>" type="button" class="btn btn-outline-info">ubah</a> |
					    			<a href="<?=base_url().'Penyewa/hapus/'.$r['id_penyewa']; ?>" type="button" class="btn btn-outline-info" onclick="return confirm('yakin ingin menghapus?');">hapus</a>
					    		</td>
					    	</tr>
					    <?php $no++; } ?>	
					  </tbody>
					</table>
				  </table>
				</div>
			</div>
		</div>
	</div>
</section>