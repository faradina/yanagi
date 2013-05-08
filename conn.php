<?php
$host="localhost";
$user="root";
$pass="";
$db="nekoyanagi";

$entries=10;
$waktu=date("Y-m-d");
	
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

if($koneksi){
	//echo "Berhasil koneksi";
}else{
	echo "Gagal koneksi";
}
?>