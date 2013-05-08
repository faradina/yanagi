<?php
	include "../conn.php";
	$q="select * FROM tentang";
	$sql=mysql_query($q);
	$hasil=mysql_fetch_array($sql);
?>
<h3>Buat Info Baru</h3>
	
	<FORM ACTION="tentang/add.php" METHOD="POST" NAME="input" ENCTYPE="multipart/form-data">
		<table width="95%">
			<tr><td><b>Tentang</b></td><td><textarea name="isi" rows="15" cols="80" style="width: 80%"><?php echo htmlspecialchars_decode($hasil['tentang']); ?></textarea></td></tr>
			<tr><td></td><td>
			<input type="submit" class="button" value="Submit">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
	</form>