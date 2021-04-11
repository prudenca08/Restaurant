<?php
require "header.php";
?>

    
    <!-- end of nav bar -->

<br><br>
<div class="container">
    <h3 class="text-center"><br>Buat Pesanan<br></h3>   
    <div class="row">
        <div class="col-md-6 offset-md-3">   
 
        
        
        
    
<?php
if(isset($_SESSION['user_id'])){
    echo '<p class="text-white bg-dark text-center">Welcome '. $_SESSION['username'] .', Buat Pesanan Disini!</p>';
      
  //error handling:
    
    if(isset($_GET['error3'])){
        if($_GET['error3'] == "emptyfields") {   //pengendalian error header
            echo '<h5 class="bg-danger text-center">Isi semua bidang, Silakan coba lagi!</h5>';
        }
        else if($_GET['error3'] == "invalidfname") {   
            echo '<h5 class="bg-danger text-center">Nama Depan Tidak Valid, Silahkan coba lagi!</h5>';
        }
        else if($_GET['error3'] == "invalidlname") {   
            echo '<h5 class="bg-danger text-center">Nama Belakang Tidak Valid, Silakan coba lagi!</h5>';
        }
        else if($_GET['error3'] == "invalidtele") {   
            echo '<h5 class="bg-danger text-center">Telephone,Tidak Valid, Silakan coba lagi!</h5>';
        }
        else if($_GET['error3'] == "invalidcomment") {   
            echo '<h5 class="bg-danger text-center">Pesan Tidak Valid, Silakan coba lagi!</h5>';
        }
        else if($_GET['error3'] == "invalidguests") {   
            echo '<h5 class="bg-danger text-center">Tamu Tidak Valid, Silakan coba lagi!</h5>';
        }
        else if($_GET['error3'] == "full") {   
            echo '<h5 class="bg-danger text-center">Pesanan penuh pada tanggal dan zona waktu ini, Silakan coba lagi!</h5>';
        }
    }
        if(isset($_GET['reservation'])) {   
           if($_GET['reservation'] == "success"){ 
            echo '<h5 class="bg-success text-center">Pesanan anda berhasil dibuat!!!</h5>';
        }
        }
        echo'<br>';



    

    
    
     //lembar pesanan 
    echo '  
        
    <div class="signup-form">
        <form action="includes/reservation.inc.php" method="post">
            <div class="form-group">
            <label>Nama Depan</label>
                <input type="text" class="form-control" name="fname" placeholder="Nama Depan" required="required">
                <small class="form-text text-muted">Nama Depan hanya menggunakan huruf saja</small>
            </div>
            <div class="form-group">
            <label>Nama Belakang</label>
                <input type="text" class="form-control" name="lname" placeholder="Nama Belakang" required="required">
                <small class="form-text text-muted">Nama Belakang hanya menggunakan huruf saja</small>
            </div>   
            <div class="form-group">
            <label>Masukkan Tanggal Pesanan</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
		<label>Masukan Waktu Pemesanan</label>
		<select class="form-control" name="time">
		<option>12:00 - 16:00</option>
		<option>16:00 - 20:00</option>
		<option>20:00 - 00:00</option>
		</select>
            </div>
            <div class="form-group">
            <label>Masukkan Jumlah Orang</label>
        	<input type="number" class="form-control" min="1" name="num_guests" placeholder="Jumlah" required="required">
                <small class="form-text text-muted">Minimal 1 orang</small>
            </div>
            <div class="form-group">
            <label for="guests">Nomor Telephone</label>
                <input type="telephone" class="form-control" name="tele" placeholder="Telephone" required="required">
                <small class="form-text text-muted">Hanya bisa di isi dengan angka</small>
            </div>
            <div class="form-group">
            <label>Masukkan Pesan Tambahan</label>
                <textarea class="form-control" name="comments" placeholder="Pesan" rows="3"></textarea>
                <small class="form-text text-muted">Pesan hanya bisa ditulis maksimal 200 characters</small>
            </div>        
            <div class="form-group">
		<label class="checkbox-inline"><input type="checkbox" required="required"> Saya setuju dengan <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block">Buat Pesanan</button>
            </div>
        </form>
        <br><br>
    </div>
    ';  
    }

    else {
        echo '	<p class="text-center text-danger"><br>Anda saat ini belum masuk!<br></p>
       <p class="text-center">Untuk membuat Pesanan, Anda harus membuat akun!<br><br><p>';  
        
    }
    ?>

             
        </div>
    </div>
</div>
<br><br>


<?php
require "footer.php";
?>