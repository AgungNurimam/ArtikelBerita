<!DOCTYPE html>
<html>
	<head>
	<?php
		include 'koneksi.php';
	?>
		<title>Liga 1 Update</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
		<div id="site-container">
			<header id="header">
				
			</header>

			<nav id="menu">
				<ul>
					<li><a href="client.php?webpro=berita">Berita Terbaru</a></li>
					<li><a href="client.php?webpro=">Hasil Pertandingan</a></li>
					<li><a href="client.php?webpro=">Jadwal Pertandingan</a></li>
					<li><a href="client.php?webpro=">Klasemen</a></li>
					
				</ul>
			</nav>

			<div id="content-wrapper">
				<section id="content">
					<?php
						if (isset($_GET['webpro'])) {
							$pageload=$_GET['webpro'];
						}else{
							$pageload="berita";
						}
						switch ($pageload) {
							case 'formatartikel':
								include "formartikel.php";
								break;
							case 'insert':
								include"saveartikel.php";
								break;
							case 'view':
								include"view.php";
								break;
							case 'edit':
								include"edit.php";
								break;
							case 'delete':
								include"delete.php";
								break;
							case 'update':
								include"update.php";
								break;
							default:
								include "artikel.php";
								break;
						}

					?>
				</section>

				<aside id="sidebar" align="left">
					<section class="sidebar-content">
						<h1 class="titlesidebar">Artikel Terfavorit</h1>
						<?php echo popularPosts(); ?>
					</section>
				</aside>
				<br	class="floating">
			</div>

			<footer id="footer">
				<p class="footer-text">Copyright &copy WebPro</p>
			</footer>
		</div>
	</body>
</html>

<?php
function popularPosts(){
include "koneksi.php";
$has = mysql_query("SELECT * FROM artikel WHERE tgl_artikel > DATE_SUB(curdate(),INTERVAL 1 WEEK) ORDER BY count DESC LIMIT 5");
$num = mysql_num_rows($has);

if($num<1){
	echo'<center>Tidak Ada Artikel</center>';
}else{
while($data=mysql_fetch_array($has)){
	$art = substr($data['isi_artikel'],0,100);
	 echo '
					<a href="popularPosts.php?p='.$data['id_artikel'].'?>"> <img width="50" height="50" src="photo-artikel/'.$data['photo_artikel'].'"> </a>
					<a href="popularPosts.php?p='.$data['id_artikel'].'?>"> <h5>'.$data['judul_artikel'].'</h5> </a>
		 ';}
}
}
?>

