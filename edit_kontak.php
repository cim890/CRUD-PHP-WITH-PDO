<?php
	include '../koneksi.php';	
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	$sql_update = "UPDATE `kontak` SET `nama` = '$nama', `telp` = '$telp', `email` = '$email', `pesan` = '$pesan'  WHERE `id` = '$id'";
	$query = $pdo->prepare($sql_update);
	$query->bindParam(1, $_POST['nama']);
	$query->bindParam(2, $_POST['telp']);
	$query->bindParam(3, $_POST['email']);
	$query->bindParam(4, $_POST['pesan']);
	$query->bindParam(5, $row['id']);
	$query->execute();

		if($query){
			echo 'Data berhasil di ubah! ';
			header("location:contact.php");		
		}else{	
			echo 'Gagal mengubah data! ';	
						
		}

?>