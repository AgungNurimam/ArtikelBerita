<?php
		session_start();
		include 'koneksi.php';
		error_reporting(0);
		if (isset($_SESSION['user']) && isset($_SESSION['login'])) {
			$cekuser="SELECT * FROM admin WHERE username='".$_SESSION['user']."'";
			$q_cekuser=mysql_query($cekuser)or die(mysql_error());
			if (mysql_num_rows($q_cekuser)>0) {
		}
?>


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
					<li><a href="index.php?webpro=berita">Daftar Berita</a></li>
					<li><a href="index.php?webpro=formatartikel">Input Berita</a></li>
					<li><a href="index.php?webpro=view">Edit Berita</a></li>
					<li><a href="logout.php">Logout</a></li>
					
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
							case 'formcari':
								include"cari.php";
								break;
							case 'formcari2':
								include"cari1.php";
								break;
							default:
								include "artikel.php";
								break;
						}

					?>
				</section>

				<aside id="sidebar" align="center">
					<section class="sidebar-content">
						<h1 class="titlesidebar">Artikel Terfavorit</h1>
						<h1 class="isi"> </h1>
					</section>
				</aside>

				<br	class="floating">
			</div>

			<footer id="footer">
				<p class="footer-text">Copyright &copy Ilkom GH</p>
			</footer>
		</div>
	</body>
</html>

<?php
	}
	else{
		echo "<h1>Maaf!!</h1";
		echo "<p>Anda tidak berhak mengakses halaman ini..</p>";
		echo "<p>Silahkan login jika anda adalah admin. Klik <a href='login.php'>disini</a></p>";
	}
?>