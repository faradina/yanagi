<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<h2>Barang-barang rekomended buat pus meongmu :3</h2><br><br>
										<?php
											include "conn.php";
											$batas = 4;
											if(!empty($_GET['page'])){
												$hal=$_GET['page']-1;
												$start = $batas * $hal;
											}else if(!empty($_GET['page'])and $_GET['page']==1){
												$start=0;
											}else if(empty($_GET['page'])){
												$start=0;
											}
											$q="SELECT id,namafoto,judul,isi FROM rekomendasi ORDER BY id DESC limit $start,$batas";
											$sql=mysql_query($q);
											while ($hasil=mysql_fetch_array($sql)){
											$judul=$hasil['judul'];
											$foto=$hasil['namafoto'];
											$isi=htmlspecialchars_decode($hasil['isi']);
										?>
										<div class="wrapper pad_bot3">
											<figure class="left marg_right1"><a href="img/<?php echo $foto;?>" data-type="prettyPhoto[group2]"><img src="img/<?php echo $foto;?>" height="134" width="220" alt=""></a></figure>
											<p class="color1 pad_bot2"><strong><?php echo $judul;?></strong></p>
											<?php echo $isi;?>
										</div>
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
												echo'"href="?page='. $i .'#!/page_Services" "class="close "data-type"=close >  '.   $i   .'  </a>';
											}
											echo'</div>';
										}
										?>
										</center>	
										
									</div>
								</div>