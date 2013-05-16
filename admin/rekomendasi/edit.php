<?php
	include "../conn.php";
	$id=$_GET['id'];
	$query="SELECT * FROM rekomendasi WHERE id=$id";
	$sql=mysql_query($query);
	$hasil=mysql_fetch_array($sql);
	$id=$hasil['id'];
	$judul=$hasil['judul'];
	$isi=html_entity_decode($hasil['isi']);
	
?>
<script>
function validateForm()
	{
		var x=document.forms["input"]["judul"].value;
		if (x=="")
		  {
		  alert("Form harap diisi semua");
		  return false;
		  }
	}
</script>
<h3>Edit Rekomendasi</h3>
	
	<FORM ACTION="./rekomendasi/editproses.php" METHOD="POST" NAME="input" ENCTYPE="multipart/form-data" onsubmit="return validateForm();" >
		<table width="95%">
			<tr><input type="hidden" name="id" value="<?php echo "$id"; ?>"></tr>
			<tr><td><b>Judul</b></td><td><input type="text" class="sedang" name="judul" value="<?php echo $judul;?>"></td></tr>
			<tr><td><b>Rekomendasi</b></td><td><textarea name="isi" rows="15" cols="80" style="width: 80%"><?php echo $isi;?></textarea></td></tr>
			<tr><td></td><td>
			<input type="submit" class="button" value="Submit">
			</td></tr>
		</table>
	</form>