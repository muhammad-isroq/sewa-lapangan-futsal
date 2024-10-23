<br>
<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-0">
			<div class="card-header bg-info text-center"> 
				<h2 class="text-light"><?=$title; ?></h2>

				<a href="<?=base_url('Lapangan/tambah'); ?>" class="btn btn-light float-right">Tambah</a>
			</div>
			<div class="card-body"> 
				<div class="table-responsive">
				  <table class="table">
				    <table class="table table-striped ">
					  <thead>
					    <tr class="">
					      <th scope="col">No</th>
					      <th scope="col">Nama Lapangan</th>
					      <th scope="col">atur</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php $no=1; foreach($lapangan as $r){ ?>
					    	<tr>
					    		<td><?= $no; ?></td>
					    		<td><?= $r['nama_lapangan']; ?></td>
					    		<td>
					    			<a href="<?=base_url().'Lapangan/edit/'.$r['id_lapangan']; ?>" type="button" class="btn btn-outline-info">ubah</a> |
					    			<a href="<?=base_url().'Lapangan/hapus/'.$r['id_lapangan']; ?>" type="button" class="btn btn-outline-info" onclick="return confirm('yakin ingin menghapus?');">hapus</a>
					    		</td>
					    	</tr>
					    <?php $no++;} ?>	
					  </tbody>
					</table>
				  </table>
				</div>
			</div>
		</div>
	</div>
</section>