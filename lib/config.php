<?php
	$NAMA_SERVER = "localhost";
	$USERNAME = "root";
	$PASSWORD = "";
	$con = mysql_connect($NAMA_SERVER,$USERNAME,$PASSWORD);
	if(!$con) die("Koneksi gagal");
	@mysql_select_db("pw",$con);
?>