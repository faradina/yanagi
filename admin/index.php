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
		<a href="../">Lihat website</a> | <a href="login.html">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="?v=index">Home</a></li>
		<li><a href="?v=diary">Diary</a></li>
		<li><a href="?v=tentang">Tentang</a></li>
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
			<tr><td style="border: none;padding: 4px;">Jumlah catatan harian</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah kategori</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah rekomendasi</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr></tr>
		</table>
		</div>
		
		<div class="clear"></div>
		<div id="smallRight"><h3>Catatan Terakhir</h3>
		<table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
			<tr><td style="border: none;padding: 4px;">Pengunjung online</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Pengunjung hari ini</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Total pengunjung</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Hit hari ini</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Total hit</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
		</table>
		</div>
		<div id="smallRight"><h3>Rekomendasi Terakhir</h3>
		<table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
			<tr><td style="border: none;padding: 4px;">Pengunjung online</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Pengunjung hari ini</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Total pengunjung</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Hit hari ini</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Total hit</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
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
elseif ($v=='tentang'){
	include "./tentang/kolom.php";
}
elseif ($v=='rekomendasi'){
	include "./rekomendasi/kolom.php";
}?>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 MOS css template | <a href="#">Nama Website Anda</a> | design <a href="http://arirusmanto.com" rel="nofollow" target="_blank">arirusmanto.com</a><br>
	redesign <a href="#">Tulis nama anda disini</a> 
</div>
</div>
</body>
</html>