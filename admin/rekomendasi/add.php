<?php
include "../../conn.php";
//proses input berita

$judul = addslashes (strip_tags ($_POST['judul']));
$isi_berita = addslashes (strip_tags ($_POST['isi']));

 $fileName = $_FILES['foto']['name']; //nama file
    $fileSize = $_FILES['foto']['size']; //ukuran file
    $fileError = $_FILES['foto']['error']; //
    $uploaddir='../../img/';
    $lokasi=$uploaddir.$fileName;
if($fileSize > 0 || $fileError == 0){ //Check jika error
 $move = move_uploaded_file($_FILES['foto']['tmp_name'],$lokasi); //save gambar ke folder
    if($move){
    
} else{
    echo "<h3>Failed! </h3>";
    }
    } else {
    echo "Failed to Upload : ".$fileError;
    }

//insert ke tabel
$query = "INSERT INTO rekomendasi
VALUES('','$fileName','../../img/$fileName','$judul','$isi_berita')";
$sql = mysql_query ($query);
if ($sql) {?>
<meta http-equiv="refresh" content="1;url=../?v=rekomendasi">
<?php
} else {?>
<script> alert("Info tidak berhasil ditambahkan :( "); </script>
<meta http-equiv="refresh" content="1;url=../?v=rekomendasi">
<?php
}
?>