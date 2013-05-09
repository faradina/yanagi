<?php
include "../../conn.php";
	$id=$_POST['id'];
	$judul=$_POST['judul'];
	$idk=$_POST['kategori'];
	$isi=$_POST['isi'];
	
	$q="UPDATE diary SET id_kategori='$idk',judul='$judul',isi='$isi' WHERE id_diary='$id'";
	$sql=mysql_query($q);
	if ($sql) {?>
	<meta http-equiv="refresh" content="1;url=../?v=diary">
	<?php
	} else {?>
	<script> alert("Info tidak berhasil diupdate :("); </script>
	<meta http-equiv="refresh" content="1;url=../?v=diary">
	<?php
	}
?>