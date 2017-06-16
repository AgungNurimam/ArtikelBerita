<article class="content">
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Penulis</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
		<?php
			$select = mysql_query("SELECT * FROM artikel")or die(mysql_error());
			$rows = mysql_num_rows($select);
			$no = 1;
			if($rows>0) {
			while ($data = mysql_fetch_array($select)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
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