<?php
include "../conn.php";
session_start();
if (!isset($_SESSION['username'],$_SESSION['ID_ADMIN'])){
header("Location:./login.php");
}
?>
<html>
<head>
<title>Admin Panel Diary Nekoyanagi</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->

<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple",
		encoding : "xml"
	});
</script>

</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Hallo, Administrator<br>
		<a href="../">Lihat website</a> | <a href="logout.php">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="?v=index">Home</a></li>
		<li><a href="?v=diary">Diary</a></li>
		<li><a href="./?v=addtentang">Tentang</a></li>
		<li><a href="?v=rekomendasi">Rekomendasi</a></li>
	</ul>
	</div>
	<div id="rightContent">
<?php
$v=$_GET['v'];
if ($v=='' || $v=='index'){?>

	
	<h3>Dashboard</h3>
	<div class="quoteOfDay">
	<b>Quote of the day :</b><br>
	<i style="color: #5b5b5b;">"If you think you can, you really can"</i>
	</div>
		<div class="shortcutHome">
		<a href="./?v=adddiary"><img src="mos-css/img/posting.png"><br>Tambah Diary</a>
		</div>
		<div class="shortcutHome">
		<a href="./?v=addtentang"><img src="mos-css/img/halaman.png"><br>Edit Tentang</a>
		</div>
		<div class="shortcutHome">
		<a href="./?v=addrekomendasi"><img src="mos-css/img/template.png"><br>Tambah Rekomendasi</a>
		</div>
				
		<div id="smallRight"><h3>Informasi web anda</h3>
		<table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
			<tr></tr>
			<?php
				$q1="SELECT COUNT(id_diary) FROM diary";
				$sql1=mysql_query($q1);
				$hasil1=mysql_result($sql1,0);
				
				$q2=" SELECT COUNT(id) FROM kategori";
				$sql2=mysql_query($q2);
				$hasil2=mysql_result($sql2,0);
				
				$q3=" SELECT COUNT(id) FROM rekomendasi";
				$sql3=mysql_query($q3);
				$hasil3=mysql_result($sql3,0);
			?>
			<tr><td style="border: none;padding: 4px;">Jumlah catatan harian</td><td style="border: none;padding: 4px;"><b><?php echo $hasil1;?></b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah kategori</td><td style="border: none;padding: 4px;"><b><?php echo $hasil2;?></b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah rekomendasi</td><td style="border: none;padding: 4px;"><b><?php echo $hasil3;?></b></td></tr>
			<tr></tr>
		</table>
		</div>
		
		<div class="clear"></div>
		<div id="smallRight"><h3>Catatan Terakhir</h3>
		<table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
			<?php
			$qdiary="SELECT id_diary,judul FROM diary ORDER BY id_diary LIMIT 5";
			$sqldiary=mysql_query($qdiary);
			while($hasild=mysql_fetch_array($sqldiary)){
			$judul=$hasild['judul'];
			?>
			<tr><td style="border: none;padding: 4px;"><?php echo $judul;?></td></tr>
			<?php } ?>
		</table>
		</div>
		<div id="smallRight"><h3>Rekomendasi Terakhir</h3>
		<table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
			<?php
			$qdiary="SELECT id,judul FROM rekomendasi ORDER BY id LIMIT 5";
			$sqldiary=mysql_query($qdiary);
			while($hasild=mysql_fetch_array($sqldiary)){
			$judul=$hasild['judul'];
			?>
			<tr><td style="border: none;padding: 4px;"><?php echo $judul;?></td></tr>
			<?php } ?>
		</table>
		</div>
	
<?php } 
elseif ($v=='adddiary'){
	include "./diary/index.php";
}
elseif ($v=='addtentang'){
	include "./tentang/index.php";
}
elseif ($v=='addrekomendasi'){
	include "./rekomendasi/index.php";
}
elseif ($v=='diary'){
	include "./diary/kolom.php";
}
elseif ($v=='editdiary'){
	include "./diary/edit.php";
}
elseif ($v=='deletediary'){
	include "./diary/delete.php";
}
elseif ($v=='rekomendasi'){
	include "./rekomendasi/kolom.php";
}
elseif ($v=='editrekomendasi'){
	include "./rekomendasi/edit.php";
}
elseif ($v=='deleterekomendasi'){
	include "./rekomendasi/delete.php";
}
?>

	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 MOS css template | <a href="#">Nama Website Anda</a> | design <a href="http://arirusmanto.com" rel="nofollow" target="_blank">arirusmanto.com</a><br>
	redesign <a href="#">Tulis nama anda disini</a> 
</div>
</div>
</body>
</html>