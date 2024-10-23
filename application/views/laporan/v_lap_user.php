<html>
	<head>
		<title><?= $title; ?></title>
		<link rel="stylesheet" href="<?=base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	</head>

<body>
	<a href="<?=base_url(); ?>">
		<button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
		</button>
	</a>
<div class="container">
	<h3>KLINIK STMIK</h3>
	<small>JL. Utama Karya</small>
	<hr>

	<h4 class="text-center">Laporan Data User</h4>

	<table class="table">
		 <table class="table table-bordered">
		 <thead>
		   <tr>
			 <th scope="col">No</th>
				  <th scope="col">Username</th>
				  <th scope="col">Password</th>
				<th scope="col">Nama Lengkap</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php $no=1; foreach($user as $r){ ?>
					    	<tr>
					    		<td><?= $no; ?></td>
					    		<td><?= $r['username']; ?></td>
					    		<td><?= $r['password']; ?></td>
					    		<td><?= $r['nama_lengkap']; ?></td>
					    		<td>
					    			
					    		</td>
					    	</tr>
					    <?php $no++;} ?>	
					  </tbody>
					</table>
				  </table>


	<table width="100%">
		<thead>
			<tr>
				<td></td>
				<td></td>
				<td width="300px">
					<p>
						Dumai, <?= Date('d-M-y');?>
					<br>
					Direktur
					<br>
					<br>
					<br>
					___________________________
					<br>		
					</p>
					
				</td>
			</tr>
		</thead>
	</table>
</div>

</body>	
</html>