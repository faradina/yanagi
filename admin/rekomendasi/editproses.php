<?php
include "../../conn.php";
	$id=$_POST['id'];
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	
	$q="UPDATE rekomendasi SET judul='$judul',isi='$isi' WHERE id='$id'";
	$sql=mysql_query($q);
	if ($sql) {?>
	<meta http-equiv="refresh" content="1;url=../?v=rekomendasi">
	<?php
	} else {?>
	<script> alert("Info tidak berhasil diupdate :("); </script>
	<meta http-equiv="refresh" content="1;url=../?v=rekomendasi">
	<?php
	}
?>