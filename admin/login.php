<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
<script>
function validate()
	{
		var x=document.forms["input"]["uname"].value;
		var b=document.forms["input"]["pass"].value;
		if (x==""||b=="" )
		  {
		  alert("Form harap diisi semua");
		  return false;
		  }
	}
</script>
</head>

<body>
<div id="header">
	<div class="inHeaderLogin"></div>
</div><?
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 4) {
        echo '<h4>Username dan Password tidak terdaftar!</h4>';
    } 
}?>
<div id="loginForm">
	<div class="headLoginForm">
	Login Administrator
	</div>
	<div class="fieldLogin">

	<form method="POST" name="input" action="proses.php" OnSubmit="return validate();">
	<label>Username</label><br>
	<input type="text" name="uname" class="login" ><br>
	<label>Password</label><br>
	<input type="password" name="pass" class="login"><br>
	<input type="submit" class="button" value="Login">
	</form>
	</div>
</div>
</body>
</html>