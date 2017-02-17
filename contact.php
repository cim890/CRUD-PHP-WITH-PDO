<?php $thisPage = "Contact"; ?>

<?php include'header.php';?>

	<section id="content" class="container">
		
		<!---Input -->
		<h3 class="judul">Data Pesan User</h3>

		<!---View -->
	<?php
		$sql_select = "SELECT * FROM kontak ORDER BY id ASC";
		$no = 1 ;
		$no_ket ='#Kontak';		
		$query = $pdo->prepare($sql_select);
		$query->execute();
		$row = $query->fetchAll();
		if ($row==false){
		echo 'Belum ada kontak';
		} else {
	?>
		<table>
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>Nama</th>
		      <th>Telepon</th>
		      <th>Email</th>
		      <th>Pesan</th>
		      <th>Aksi</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach ($row as $data) { ?>
				<tr>
				    <td><?php echo $no_ket;?> <?php echo $no++; ?></td>
				    <td><?php echo $data['nama']; ?></td>
				    <td><?php echo $data['telp']; ?></td>
				    <td><?php echo $data['email']; ?></td>
				    <td><?php echo $data['pesan']; ?></td>
				    <td><a href="#openModal?id=<?php echo $data['id']; ?>" class="btn btn-default"><i class="fa fa-pencil"></a></i> <a href="hapus_kontak.php?id=<?php echo $data['id']; ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>


						<!---Edit -->
						<div id="openModal?id=<?php echo $data['id']; ?>" class="modalDialog">
						    <div><a href="#close" title="Close" class="close">X</a>
						        <h3 class="judul">Form Edit Artikel</h3>
								<article id="artikel">
									<div id="form-edit">
									<form method="post" action="edit_kontak.php?id=<?php echo $data['id']; ?>">
										<div class="form-row">
											<label for="nama">Nama</label>
											<input type="text" name="nama" value="<?php echo $data['nama']; ?>">	
										</div>
										<div class="form-row">
											<label for="telp">Telepon</label>
											<input type="number" name="telp" value="<?php echo $data['telp']; ?>">
										</div>
										<div class="form-row">
											<label for="email">Email</label>
											<input type="email" name="email" value="<?php echo $data['email']; ?>">
										</div>
										<div class="form-row">
											<label for="pesan">Pesan</label>
											<textarea name="pesan"><?php echo $data['pesan']; ?></textarea>
										</div>
										<button type="submit" name="submit">Ubah</button>
										<a href="#close"><button type="button" class="cancel">Batal</button></a>
									</form>
									
								</div>
								</article>
						    </div>
						</div>
					</td>
				</tr>
				<?php } ?>
		  </tbody>
		</table>
		<?php 
			}
		?>
	</section>

<?php include'footer.php';?>