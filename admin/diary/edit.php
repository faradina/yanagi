<?php
	include "../conn.php";
	$id=$_GET['id'];
	$query="SELECT id_diary,id_kategori,judul,isi FROM diary WHERE id_diary=$id";
	$sql=mysql_query($query);
	$hasil=mysql_fetch_array($sql);
	$id_diary=$hasil['id_diary'];
	$id_kategori=$hasil['idk'];
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
<h3>Edit Diary</h3>
	
	<FORM ACTION="./diary/editproses.php" METHOD="POST" NAME="input" ENCTYPE="multipart/form-data" onsubmit="return validateForm();" >
		<table width="95%">
			<tr><input type="hidden" name="id" value="<?php echo "$id_diary"; ?>"></tr>
			<tr><td><b>Judul</b></td><td><input type="text" class="sedang" name="judul" value="<?php echo $judul;?>"></td></tr>
			<tr><td><b>Kategori</b></td><td>
				<select name="kategori">
					 <?php
					$query = "SELECT id,kategori FROM kategori ORDER BY id";
					$sql = mysql_query ($query);
					while ($hasil = mysql_fetch_array
					($sql)) {
					$selected = ($hasil['id']==
					$id_kategori) ? "selected" : "";
					echo "<option value='$hasil[id]'$selected>$hasil[kategori]</option>";
					}
					?>
				</select>
			</td></tr>
			<tr><td><b>Diary</b></td><td><textarea name="isi" rows="15" cols="80" style="width: 80%"><?php echo $isi;?></textarea></td></tr>
			<tr><td></td><td>
			<input type="submit" class="button" value="Submit">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
	</form>