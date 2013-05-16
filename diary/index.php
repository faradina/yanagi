<?php include "conn.php"; 
$batas = 4;
	if(!empty($_GET['page'])){
		$hal=$_GET['page']-1;
		$start = $batas * $hal;
	}else if(!empty($_GET['page'])and $_GET['page']==1){
		$start=0;
	}else if(empty($_GET['page'])){
		$start=0;
	}
?>
<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<div class="wrapper pad_bot1">
										<h2>Diary Nekoyanagi</h2>
										<?php
											$q="SELECT judul,foto,isi,tanggal FROM diary ORDER BY id_diary DESC limit  $start , $batas";
											$sql=mysql_query($q);
											while ($hasil=mysql_fetch_array($sql)){
											$isi=htmlspecialchars_decode($hasil['isi']);
											$lokasi=$hasil['foto'];
											$tanggal=$hasil['tanggal'];
											$judul=$hasil['judul'];
											$date=explode("-",$tanggal);
											$bulan=$date[1];
											$tgl=$date[2];
											switch($bulan)
											{
											  case"01";
											  $bulan="Jan";
											  break; 
											  case"02";
											  $bulan="Feb";
											  break;
											  case"03";
											  $bulan="Mar";
											  break;
											  case"04";
											  $bulan="Apr";
											  break;
											  case"05";
											  $bulan="Mei";
											  break;
											  case"06";
											 $bulan="Juni";
											  break;
											  case"07";
											  $bulan="Juli";
											  break;
											  case"08";
											  $bulan="Agst";
											  break;
											  case"09";
											  $bulan="Sept";
											  break;
											  case"10";
											  $bulan="Okt";
											  break;
											  case"11";
											  $bulan="Nov";
											  break;
											  case"12";
											  $bulan="Des";
											  break;    
											  }     
										?>
										<div class="wrapper" id="<?php echo $i;?>">
											<span class="date"><strong><?php echo $tgl;?></strong><span><?php echo $bulan;?></span></span>
											<figure class="left marg_right1"><a href="img/<?php echo $lokasi;?>" data-type="prettyPhoto[group2]"><img src="img/<?php echo $lokasi;?>" height="138" width="220" alt=""></a></figure>
											<p class="color1 pad_bot2"><strong><?php echo $judul;?></strong></p>
											<p> <?php echo $isi;?></p>
										</div>
										<br>
										<?php } ?>
										<center>
										<?php
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
												echo'"href="?page='. $i .'#!/page_Home" "class="close "data-type"=close >  '.   $i   .'  </a>';
											}
											echo'</div>';
										}
										?>
										</center>	
									</div>
								</div>