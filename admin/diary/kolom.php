<?php
	$batas = 20;
	if(!empty($_GET['page'])){
		$hal=$_GET['page']-1;
		$start = $batas * $hal;
	}else if(!empty($_GET['page'])and $_GET['page']==1){
		$start=0;
	}else if(empty($_GET['page'])){
		$start=0;
	}?>
		<h3>Info</h3>
		<button><h4><a href="?v=upload&u=info"><img src="mos-css/img/compose.png" height="20px" width="20px"> Buat Baru</a></h4></button><br>
		<table class="data">
			<tr class="data">
				<th class="data" width="30px">No</th>
				<th class="data">Judul</th>
				<th class="data">Headline</th>
				<th class="data">Tanggal</th>
				<th class="data" width="75px">Opsi</th>
			</tr>
		<?php
			$i=0;
			$q="SELECT id_berita,judul,headline,tanggal FROM berita ORDER BY id_berita DESC limit $start , $batas";
			$sql=mysql_query($q);
			while ($hasil=mysql_fetch_array($sql)) {
			$id=$hasil['id_berita'];
			$judul = stripslashes ($hasil['judul']);
			$headline = nl2br(stripslashes($hasil['headline']));
			$tanggal = stripslashes ($hasil['tanggal']);
		?>
			<tr class="data">
				<td class="data" width="30px"><?php $i=$i+1;echo " $i.";?></td>
				<td class="data"><?php echo "$judul";?></td>
				<td class="data"><?php echo "$headline";?></td>
				<td class="data"><?php echo "$tanggal";?></td>
				<td class="data" width="75px">
				<center>
				<a href="?v=edit&e=info&id=<?php echo "$id";?>"><img src="mos-css/img/edit_icon.gif"></a>&nbsp;&nbsp;&nbsp;
				<a href="?v=delete&d=info&id=<?php echo "$id";?>" Onclick="return confirm('Yakin akan menghapus info ini?');"><img src="mos-css/img/delete_icon.gif" OnClick="ConfirmDelete();"></a>
				</center>
				</td>
			</tr>
			<?php }
			$cekquery=mysql_query("SELECT * From berita");
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