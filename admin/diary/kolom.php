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
		<h3>Diary</h3>
		<button><h4><a href="?v=adddiary"><img src="mos-css/img/compose.png" height="20px" width="20px"> Buat Baru</a></h4></button><br>
		<table class="data">
			<tr class="data">
				<th class="data" width="30px">No</th>
				<th class="data">Judul</th>
				<th class="data">Isi</th>
				<th class="data">Foto</th>
				<th class="data">Kategori</th>
				<th class="data">Tanggal</th>
				<th class="data" width="75px">Opsi</th>
			</tr>
		<?php
			$i=0;
			$q="SELECT id_diary,id_kategori,judul,foto,isi,tanggal FROM diary ORDER BY id_diary DESC limit $start , $batas";
			$sql=mysql_query($q);
			while ($hasil=mysql_fetch_array($sql)) {
			$id=$hasil['id_diary'];
			$idk=$hasil['id_kategori'];
			$lokasi=$hasil['foto'];
			$judul = stripslashes ($hasil['judul']);
			$headline = htmlspecialchars_decode(stripslashes($hasil['isi']));
			$tanggal = stripslashes ($hasil['tanggal']);
			
			$query="SELECT * from kategori WHERE id='$idk'";
			$sql2=mysql_query($query);
			$hasil2=mysql_fetch_array($sql2);
			$kategori=$hasil2['kategori'];
		?>
			<tr class="data">
				<td class="data" width="30px"><?php $i=$i+1;echo " $i.";?></td>
				<td class="data"><?php echo "$judul";?></td>
				<td class="data"><?php echo "$headline";?></td>
				<td class="data"><center><img src="../img/<?php echo "$lokasi";?>" alt="" width="130"/></center></td>
				<td class="data"><?php echo "$kategori";?></td>
				<td class="data"><?php echo "$tanggal";?></td>
				<td class="data" width="75px">
				<center>
				<a href="?v=editdiary&id=<?php echo "$id";?>"><img src="mos-css/img/edit_icon.gif"></a>&nbsp;&nbsp;&nbsp;
				<a href="?v=deletediary&id=<?php echo "$id";?>" Onclick="return confirm('Yakin akan menghapus info ini?');"><img src="mos-css/img/delete_icon.gif" OnClick="ConfirmDelete();"></a>
				</center>
				</td>
			</tr>
			<?php }
			$cekquery=mysql_query("SELECT * From diary");
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
					echo'" href="?v=diary&page='. $i .'">  '.   $i   .'  </a>';
				}
				echo'</div>';
			}
			?>
		</table>