<?php
include "koneksi.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from artikel where judul_artikel like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo '
<h2>'.$data['judul_artikel'].'</h2>
					<img width="330" height="280" src="photo-artikel/'.$data['photo_artikel'].'">
					<h4>Di publikasikan pada '.$data['tgl_artikel'].'</h4>
					<h4>Oleh '.$data['penulis_artikel'].'</h4>
					<p>'.$data['isi_artikel'].'..</p>
				    <a href="single.php?p='.$data['id_artikel'].'">Read More</a>
					<br><br>
		
		 ';
}
echo "</table>";
?>