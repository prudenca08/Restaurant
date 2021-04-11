<?php
require "header.php";
?>
    
<br><br>
<div class="container">
<h3 class="text-center"><br>Lihat Pesanan<br></h3>     

<?php
    if(isset($_SESSION['user_id'])){
        echo '<p class="text-white bg-dark text-center">'. $_SESSION['username'] .', Disini anda dapat memeriksa riwayat pesanan anda</p><br>';
        
    
    if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") {   //deletepesanan
            echo '<h5 class="bg-danger text-center">Error!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5 class="bg-success text-center">Berhasil dihapus!</h5>';
        }
    }  
    require 'includes/view.reservation.inc.php';
    
 }
    else {
        echo '	<p class="text-center text-danger"><br>Anda saat ini belum masuk!<br></p>
       <p class="text-center">Untuk membuat Pesanan, Anda harus membuat akun!<br><br><p>';   
    }    
?>

</div>
<br><br>


<?php
require "footer.php";
?>