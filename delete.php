<?php
	if (isset($_GET['id_artikel'])) {
		$id=$_GET['id_artikel'];
		$delete=mysql_query("DELETE FROM artikel WHERE id_artikel='$id'") or die(mysql_error());
	}
?>

<script type="text/javascript" language="JavaScript">
	alert('DATA BERHASIL DI HAPUS.! KLIK DISINI UNTUK MELANJUTKAN');
	document.location.href="index.php?webpro=view";
</script>