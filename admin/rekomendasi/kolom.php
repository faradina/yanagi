<?php
	include "../conn.php";
	$batas = 10;
	if(!empty($_GET['page'])){
		$hal=$_GET['page']-1;
		$start = $batas * $hal;
	}else if(!empty($_GET['page'])and $_GET['page']==1){
		$start=0;
	}else if(empty($_GET['page'])){
		$start=0;
	}?>
		<h3>Rekomendasi</h3>
		<button><h4><a href="?v=addrekomendasi"><img src="mos-css/img/compose.png" height="20px" width="20px"> Buat Baru</a></h4></button><br>
		<table class="data">
			<tr class="data">
				<th class="data" width="30px">No</th>
				<th class="data">Judul</th>
				<th class="data">Isi</th>
				<th class="data">Foto</th>
				<th class="data" width="75px">Opsi</th>
			</tr>
		<?php
			$i=0;
			$q="SELECT * FROM rekomendasi ORDER BY id DESC limit $start , $batas";
			$sql=mysql_query($q);
			while ($hasil=mysql_fetch_array($sql)) {
			$id=$hasil['id'];
			$judul = stripslashes ($hasil['judul']);
			$foto = nl2br(stripslashes($hasil['namafoto']));
			$isi = htmlspecialchars_decode($hasil['isi']);
		?>
			<tr class="data">
				<td class="data" width="30px"><?php $i=$i+1;echo " $i.";?></td>
				<td class="data"><?php echo "$judul";?></td>
				<td class="data"><?php echo "$isi";?></td>
				<td class="data"><center><img src="../img/<?php echo "$foto";?>" alt="" width="130"/></center></td>
				<td class="data" width="75px">
				<center>
				<a href="?v=editrekomendasi&id=<?php echo "$id";?>"><img src="mos-css/img/edit_icon.gif"></a>&nbsp;&nbsp;&nbsp;
				<a href="?v=deleterekomendasi&id=<?php echo "$id";?>" Onclick="return confirm('Yakin akan menghapus info ini?');"><img src="mos-css/img/delete_icon.gif" OnClick="ConfirmDelete();"></a>
				</center>
				</td>
			</tr>
			<?php }
			$cekquery=mysql_query("SELECT * From rekomendasi");
			$jumlah=mysql_num_rows($cekquery);
			if($jumlah > $batas){
				echo '<br><div id="halaman">Halaman : ';
				$a=explode(".", $jumlah/$batas);
				$b=$a[0];
				$c=$b+1;
				for($i=1;$i<=$c;$i++){
					echo '<a style="text-decoration:none;';
					if($_GET['page']==$i){
						echo 'color:red';
					}
					echo'" href="?v=info&page='. $i .'">  '.   $i   .'  </a>';
				}
				echo'</div>';
			}
			?>
		</table>