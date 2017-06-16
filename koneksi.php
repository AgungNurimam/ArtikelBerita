<?php
	$host='localhost';
	$user='root';
	$pass='';
	$dbname='liga1';

	$konek=mysql_connect($host,$user,$pass) or die(mysql_error());
	mysql_select_db($dbname,$konek) or die(mysql_error());
?>