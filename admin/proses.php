<?php
session_start();

?>
<?php

include('../conn.php');

//tangkap data dari form login
$username = $_POST['uname'];
$password = md5($_POST['pass']);

$perintahnya = "select * from admin where nama='$username' and psswd='$password'";
$jalankanperintahnya= mysql_query($perintahnya); 
$ada_apa_enggak = mysql_num_rows($jalankanperintahnya);


if ($ada_apa_enggak == 1) {
$DATA=mysql_fetch_array($jalankanperintahnya);
	//kalau username dan password sudah terdaftar di database
$_SESSION['username'] = $_POST['uname'];
$_SESSION['ID_ADMIN'] = $DATA['id'];
header("Location: index.php");

	//header('location:index.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error= 4');
}
?>



