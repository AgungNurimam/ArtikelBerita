<?php
	date_default_timezone_set('Asia/Jakarta');
	if(isset($_POST['submit'])){
		$id = $_POST['id_artikel'];
		$judul=$_POST['judul_artikel'];
		$isi=$_POST['isi_artikel'];
		$penulis=$_POST['penulis_artikel'];
		$tanggal=date('y-m-d H:i:s');

		$update = mysql_query("UPDATE artikel SET judul_artikel='$judul', isi_artikel='$isi', penulis_artikel='$penulis' WHERE id_artikel='$id'") or die(mysql_error());
	}
?>

<script type="text/javascript" language="Javascript">
	alert('DATA BERHASIL DIUBAH!');
	document.location.href="index.php?webpro=berita";
</script>