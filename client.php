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

				<aside id="sidebar">
					<section class="sidebar-content">
						<h1 class="tittlesidebar">Klasemen</h1>
						<table>
						<th style="float=left">
							<td>Nama Tim</td>
							<td>M</td>
							<td>S</td>
							<td>K</td>
							<td>Point</td>
						</th>
						<tr>
							<td>Persib</td>
						</table>
	
					
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