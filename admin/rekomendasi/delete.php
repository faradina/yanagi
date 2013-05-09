<?php
	include "../conn.php";
	$id=$_GET['id'];
	$q="Delete From rekomendasi where id='$id'";
	$sql=mysql_query($q);
	if ($sql) {?>
	<meta http-equiv="refresh" content="1;url=./?v=rekomendasi">
	<?php
	} else {?>
	<script> alert("Info tidak berhasil diupdate :("); </script>
	<meta http-equiv="refresh" content="1;url=./?v=rekomendasi">
	<?php
	}
?>