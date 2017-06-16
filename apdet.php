<?php ob_start();
include "koneksi.php";
if($_POST){
	$judulartikel      = $_POST['judul_artikel'];
	$isiartikel 	    = $_POST['isi_artikel'];
	$penulisartikel 	= $_POST['penulis_artikel'];
	$photoartikel 		= $_FILES['images']['name'];
	
	if(!empty($_FILES['images']['tmp_name'])){
		move_uploaded_file($_FILES['images']['tmp_name'], 'photo-artikel/'.$_FILES['images']['name']);

		mysql_query("UPDATE artikel SET judul_artikel='$judul', isi_artikel='$isi', penulis_artikel='$penulis' photo_artikel='$photoartikel' WHERE id_artikel='$id'"); 
		
	} else {
		mysql_query("UPDATE artikel SET judul_artikel='$judul', isi_artikel='$isi', penulis_artikel='$penulis' WHERE id_artikel='$id'");
		
	}
	header('location:index.php');
	exit;
}

?>