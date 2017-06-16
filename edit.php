<article class="content">
	<div id="container">
	<?php
		$id=$_GET['id_artikel'];
		$query = mysql_query("SELECT * FROM artikel WHERE id_artikel='$id'")or die(mysql_error());
		while ($data = mysql_fetch_array($query)) {
	?>
		<h1 class="heading">Edit Artikel</h1>
		<form action="apdet.php" method="post" name="edit">
			<center>
		<p>
			<label>Judul Artikel:</label><br>
			<input type="hidden" name="judul_artikel" value="<?php echo $data['id_artikel'] ?>">
			<input type="text" name="judul_artikel" id="judul_artikel" value="<?php echo $data['judul_artikel'] ?>">
		</p>

		<p>
			<label>Isi Artikel:</label><br>
			<textarea style="width:600px; height:450px" id="isi_artikel" name="isi_artikel" ><?php echo $data['isi_artikel'] ?>"</textarea>
			
		</p>
	
		<p>
			<label>Penulis Artikel:</label><br>
			<input type="text" id="penulis_artikel" name="penulis_artikel" value="<?php echo $data['penulis_artikel'] ?>">
		</p>
		
		<p>
			<label>Photo Artikel:</label><br>
			<input type="file" id="images" name="images"/>
		</p>
	
		<input type="submit" name="submit" value="Save">

		</form>
		<?php } ?>
	</div>
</article>