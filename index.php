<?php
require "header.php";
?>

<!--header section-->

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/logo.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Buat Pesanan Anda!</em></button>
        </div>
    </div>
</header>

<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>Menu</h3>
   <div class="row">
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/roti1.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/roti1.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/roti1.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Sebelumnya</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Selanjutnya</span>
         </a>
       </div><br><br>
     </div>
     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Daffa Restaurant</h4>
	<p><br>Restoran Daffa, pertama kali dibuka pada tahun 2020 di “Kudus”, salah satu kabupaten baru di Kudus di pusat sejarah kota. Pada tahun 2020, restoran ini dianugerahi bintang Mustofa pertamanya dan mempertahankannya sejak saat itu. <br> <br>
Pada tahun yang sama, restoran tersebut pindah ke lantai 6 Pusat Kebudayaan Jawa di Jawa Tengah dan baru-baru ini didesain ulang oleh Prudenca. Di bulan-bulan yang lebih hangat, restoran tersebut pindah
ke lantai 7 gedung, menawarkan pengaturan luar ruangan yang unik dengan panorama Gunung muria, Menara Sunan Kudus dan cakrawala kota.<br></p><hr>
	</div>
     </div>
  </div>
</section>


<!----gallery section -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/roti2.jpeg" class="img-fluid">
              <img src="img/roti3.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/roti2.jpeg" class="img-fluid">
              <img src="img/roti3.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/roti2.jpeg" class="img-fluid">
               <img src="img/roti3.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/roti2.jpeg" class="img-fluid">
               <img src="img/roti3.jpg" class="img-fluid">
           </div>
        </div>
    </div>
    
    <!--Buat Pesanan -->
</div><br><br>
<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Pesanan<br><br></h3>
    <img  src="img/2.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Buat Pesanan Anda!</button>
        
</div><br>

<!--map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br>Informasi</h3><br>
        <div class="row staff">
            <div class="col">
            <div class="col">
            <h4 class="text-center"><strong>Lokasi</strong></h4>
            <p class="text-center">Daffa<br><i class="fa fa-map-marker"></i>&nbsp; Kudus,Jawa Tengah<br>email: prudencaahdaffa08@gmail.com.com<br>phone: +62 82359500022</p>
            </div>
                    </form>
                    
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"";
                }
            }
        else{
         echo"";
            }
   mysqli_close($conn);
}
?>
                        
                </div><br>
            </div>
	</div>
    </div>
</section>

<?php
require "footer.php";
?>