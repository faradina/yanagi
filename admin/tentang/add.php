<?php
include "../../conn.php";
//proses input berita

$isi_berita = addslashes (strip_tags ($_POST['isi']));

//insert ke tabel
$query = "UPDATE tentang SET tentang='$isi_berita' WHERE id=0";
$sql = mysql_query ($query);
if ($sql) {?>
<script> alert("Perubahan berhasil ditambahkan :) "); </script>
<meta http-equiv="refresh" content="1;url=../?v=addtentang">
<?php
} else {?>
<script> alert("Perubahan tidak berhasil disimpan :( "); </script>
<meta http-equiv="refresh" content="1;url=../?v=addtentang">
<?php
}
?>