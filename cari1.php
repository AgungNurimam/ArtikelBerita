<article class="content">
	<table border="1">
		<tr>
			<th>Judul</th>
			<th>Isi</th>
			<th>Penulis</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
		<?php
			include "koneksi.php";
			$name= $_POST['name'];
			$q = "SELECT * from artikel where judul_artikel like $name "; 
			$rows = mysql_num_rows($q);
			if($rows>0) 
			$result = mysql_query($q);{
			while ($data = mysql_fetch_array($result)) {
			?>
			<tr>
				<td><?php echo $data['judul_artikel'];?></td>
				<td><?php echo $data['isi_artikel'];?></td>
				<td><?php echo $data['penulis_artikel'];?></td>
				<td><?php echo $data['tgl_artikel'];?></td>
				<td>
					<a href="index.php?webpro=edit&id_artikel=<?php echo $data['id_artikel']?>">Edit</a> |
					<a href="index.php?webpro=delete&id_artikel=<?php echo $data['id_artikel']?>">Delete</a>
				</td>
			</tr>
			<?php } 
			}else{ ?>
				<tr>
					<td colspan="6">Tabel Masih Kosong!</td>
				</tr>
			<?php } ?>
			
	</table>
</article>