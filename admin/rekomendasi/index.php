<?php
include "../conn.php"
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
<h3>Buat Info Baru</h3>
	
	<FORM ACTION="./rekomendasi/add.php" METHOD="POST" NAME="input" ENCTYPE="multipart/form-data" onsubmit="return validateForm();" >
		<table width="95%">
			<tr><td><b>Judul</b></td><td><input type="text" class="sedang" name="judul"></td></tr>
			<tr><td><b>Foto</b></td><td><input name='foto' type='file' id='foto' ></td></tr>
			<tr><td><b>Rekomendasi</b></td><td><textarea name="isi" rows="15" cols="80" style="width: 80%"></textarea></td></tr>
			<tr><td></td><td>
			<input type="submit" class="button" value="Submit">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
	</form>