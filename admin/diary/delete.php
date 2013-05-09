<?php
	include "../conn.php";
	$id=$_GET['id'];
	$q="Delete From diary where id_diary='$id'";
	$sql=mysql_query($q);
	if ($sql) {?>
	<meta http-equiv="refresh" content="1;url=./?v=diary">
	<?php
	} else {?>
	<script> alert("Info tidak berhasil diupdate :("); </script>
	<meta http-equiv="refresh" content="1;url=./?v=diary">
	<?php
	}
?>