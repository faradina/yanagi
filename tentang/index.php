<?php include "conn.php"; 
$q="SELECT tentang FROM tentang";
$sql=mysql_query($q);
$hasil=mysql_fetch_array($sql);
$profil=htmlspecialchars_decode($hasil['tentang']);
?>
<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<h2>Biodataku</h2>
										<div class="wrapper">
											<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
											<p class="color1 pad_bot2"><strong>Cerita Sedikit...</strong></p>
											<?php echo $profil;?>
										</div>
									</div>
								</div>