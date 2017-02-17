<?php
	include '../koneksi.php';	
	$id = $_GET['id'];
	$sql_delete = "DELETE FROM `kontak` WHERE `id` = '$id'";
	$query = $pdo->prepare($sql_delete);
	$query->execute(array($row['id']));

		if($query){
			echo 'Data berhasil di hapus! ';
			header("location:contact.php");		
		}else{	
			echo 'Gagal menghapus data! ';	
						
		}

?>