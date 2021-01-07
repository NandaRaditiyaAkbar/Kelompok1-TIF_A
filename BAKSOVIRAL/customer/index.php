<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<body>
    
	<?php include "header.php"; ?>
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
			<?php
                    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama='bakso corona'");
					$data  = mysqli_fetch_array($query);{
                    ?>
				<h2><?php echo $data['nama']; ?></h2>
				<p><?php echo $data['keterangan']; ?></p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="../admin/<?php echo $data['gambar']; ?>" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image01" /></div>
				<?php   
              }
              ?>
			</div>
			<div class="da-slide">
			<?php
                    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama='bakso judes'");
					$data  = mysqli_fetch_array($query);{
                    ?>
				<h2><?php echo $data['nama']; ?></h2>
				<p><?php echo $data['keterangan']; ?></p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="../admin/<?php echo $data['gambar']; ?>" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image01" /></div>
				<?php   
              }
              ?>
			</div>
			<div class="da-slide">
			<?php
                    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama='bakso telur'");
					$data  = mysqli_fetch_array($query);{
                    ?>
				<h2><?php echo $data['nama']; ?></h2>
				<p><?php echo $data['keterangan']; ?></p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="../admin/<?php echo $data['gambar']; ?>" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image01" /></div>
				<?php   
              }
              ?>
				</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      	<div class="hero-unit">
        		<p>
                Bakso Viral Jember adalah rumah makan yang menyediakan berbagai jenis bakso yang kekinian. Setiap menunya diberi nama yang tidak kalah unik untuk menarik minat pelanggan.
				</p>
        		<p><a class="btn btn-success btn-large" href="profil.php">Tentang Kami &raquo;</a></p>
                                
      		</div>
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
            
      		<div class="row">
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY kode ASC");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="../admin/<?php echo $data['gambar']; ?>" style="border: 2px solid grey; border-radius: 5px; width: 250px; height: 200px;" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="addtocart.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              
              
              ?>
<!---->
      		</div>
			<!-- end: Row -->
      		
		<!--	<hr>
		
			<!-- start Clients List -->	
		<!--	<div class="clients-carousel">
		
				<ul class="slides clients">
					<li><img src="img/logos/1.png" alt=""/></li>
					<li><img src="img/logos/2.png" alt=""/></li>	
					<li><img src="img/logos/3.png" alt=""/></li>
					<li><img src="img/logos/4.png" alt=""/></li>
					<li><img src="img/logos/5.png" alt=""/></li>
					<li><img src="img/logos/6.png" alt=""/></li>
					<li><img src="img/logos/7.png" alt=""/></li>
					<li><img src="img/logos/8.png" alt=""/></li>
					<li><img src="img/logos/9.png" alt=""/></li>
					<li><img src="img/logos/10.png" alt=""/></li>		
				</ul>
		
			</div>
			<!-- end Clients List -->
		
			<hr>
			
			<!-- start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Pengiriman Cepat</h3>
								<p>Delivery order Bakso Viral Jember siap mengirim pesanan anda secara gratis dengan radius maksimal 3 KM</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-cup  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Rasa Juara</h3>
								<p>Rasa dari Bakso Viral Jember memiliki cita rasa yang berbeda dari Bakso lainnya, di proses higienis dan dari bahan berkualitas</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<a href="#"><img src="../img/logo.jpg" alt="logo" height="30" width="30"/></a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="#">Free Delivery Max 3 KM</a></li>

							<li><a href="#">Cash On Delivery (COD)</a></li>

							<li><a href="#">Pelayanan Cepat</a></li>

						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->
<?php include "footer.php"; ?>
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery-1.8.2.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/flexslider.js"></script>
<script src="../js/carousel.js"></script>
<script src="../js/jquery.cslider.js"></script>
<script src="../js/slider.js"></script>
<script defer="defer" src="../js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>