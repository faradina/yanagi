<?php include "conn.php";
	
	?>
<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<div class="wrapper tabs">
											<div class="col1">
												<h2>Categories</h2>
												<ul class="nav">
													<li class="selected"><a href="#Action"><span></span><strong>Action</strong></a></li>
													<li><a href="#Makanan"><span></span><strong>Makanan</strong></a></li>
													<li><a href="#Tidur"><span></span><strong>Tidur</strong></a></li>
													<li><a href="#Barang"><span></span><strong>Barang</strong></a></li>
													<li><a href="#Lainnya"><span></span><strong>Lainnya</strong></a></li>
												</ul>
											</div>
											<div class="col2 pad_left1">
												<div class="tab-content" id="Action">
													<h2>Action</h2>
													<?php
													$q="SELECT count(foto) from diary where id_kategori='1'";
													$sql=mysql_query($q);
													$num_rows=mysql_result($sql,0);
													
													$q2="SELECT foto from diary where id_kategori='1'";
													$sql2=mysql_query($q2);
													
													for ($i = 0; $i < $num_rows; $i+=2) {
													$gambar = mysql_result($sql2, $i, 'foto');
													?>
													<div class="wrapper">
														<figure class="left marg_right1"><a href="img/<?php echo $gambar;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar;?>" height="130" width="202" alt=""></a></figure>
														<?php
														if($i+1 < $num_rows){
														$gambar2 = mysql_result($sql2, $i+1, 'foto');?>
														<figure class="left"><a href="img/<?php echo $gambar2;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar2;?>" height="130" width="202" alt=""></a></figure>
													</div>
													<? }} ?>
													
												</div>
												<div class="tab-content" id="Makanan">
													<h2>Makanan</h2>
													<?php
													$q="SELECT count(foto) from diary where id_kategori='2'";
													$sql=mysql_query($q);
													$num_rows=mysql_result($sql,0);
													
													$q2="SELECT foto from diary where id_kategori='2'";
													$sql2=mysql_query($q2);
													
													for ($i = 0; $i < $num_rows; $i+=2) {
													$gambar = mysql_result($sql2, $i);
													?>
													<div class="wrapper">
														<figure class="left marg_right1"><a href="img/<?php echo $gambar;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar;?>" height="130" width="202" alt=""></a></figure>
														<?php
														if($i+1 < $num_rows){
														$gambar2 = mysql_result($sql2, $i+1);?>
														<figure class="left"><a href="img/<?php echo $gambar2;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar2;?>" height="130" width="202" alt=""></a></figure>
													</div>
													<? }} ?>
												</div>
												<div class="tab-content" id="Tidur">
													<h2>Tidur</h2>
													<?php
													$q="SELECT count(foto) from diary where id_kategori='3'";
													$sql=mysql_query($q);
													$num_rows=mysql_result($sql,0);
													
													$q2="SELECT foto from diary where id_kategori='3'";
													$sql2=mysql_query($q2);
													
													for ($i = 0; $i < $num_rows; $i+=2) {
													$gambar = mysql_result($sql2, $i);
													?>
													<div class="wrapper">
														<figure class="left marg_right1"><a href="img/<?php echo $gambar;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar;?>" height="130" width="202" alt=""></a></figure>
														<?php
														if($i+1 < $num_rows){
														$gambar2 = mysql_result($sql2, $i+1);?>
														<figure class="left"><a href="img/<?php echo $gambar2;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar2;?>" height="130" width="202" alt=""></a></figure>
													</div>
													<? }} ?>
												</div>
												<div class="tab-content" id="Barang">
													<h2>Barang</h2>
													<?php
													$q="SELECT count(foto) from diary where id_kategori='4'";
													$sql=mysql_query($q);
													$num_rows=mysql_result($sql,0);
													
													$q2="SELECT foto from diary where id_kategori='4'";
													$sql2=mysql_query($q2);
													
													for ($i = 0; $i < $num_rows; $i+=2) {
													$gambar = mysql_result($sql2, $i);
													?>
													<div class="wrapper">
														<figure class="left marg_right1"><a href="img/<?php echo $gambar;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar;?>" height="130" width="202" alt=""></a></figure>
														<?php
														if($i+1 < $num_rows){
														$gambar2 = mysql_result($sql2, $i+1);?>
														<figure class="left"><a href="img/<?php echo $gambar2;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar2;?>" height="130" width="202" alt=""></a></figure>
													</div>
													<? }} ?>
												</div>
												<div class="tab-content" id="Lainnya">
													<h2>Lainnya</h2>
													<?php
													$q="SELECT count(foto) from diary where id_kategori='5'";
													$sql=mysql_query($q);
													$num_rows=mysql_result($sql,0);
													
													$q2="SELECT foto from diary where id_kategori='5'";
													$sql2=mysql_query($q2);
													
													for ($i = 0; $i < $num_rows; $i+=2) {
													$gambar = mysql_result($sql2, $i);
													?>
													<div class="wrapper">
														<figure class="left marg_right1"><a href="img/<?php echo $gambar;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar;?>" height="130" width="202" alt=""></a></figure>
														<?php
														if($i+1 < $num_rows){
														$gambar2 = mysql_result($sql2, $i+1);?>
														<figure class="left"><a href="img/<?php echo $gambar2;?>" class="lightbox-image" data-type="prettyPhoto[group1]"><span></span><img src="img/<?php echo $gambar2;?>" height="130" width="202" alt=""></a></figure>
													</div>
													<? }} ?>
												</div>
											</div>
										</div>
									</div>
								</div>