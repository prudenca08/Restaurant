<?php


//hapus pesanan

if(isset($_POST['delete-submit'])) {
 
 require 'dbh.inc.php';
 
 $reservation_id = $_POST['reserv_id'];
    
 $sql = "DELETE FROM reservation WHERE reserv_id =$reservation_id";
if (mysqli_query($conn, $sql)) {
    header("Location: ../view_reservations.php?delete=success");
} else {
    header("Location: ../view_reservations.php?delete=error");
}
}



//hapus tabel


if(isset($_POST['delete-table'])) {
 
 require 'dbh.inc.php';
 
 $tables_id = $_POST['tables_id'];
    
 $sql = "DELETE FROM tables WHERE tables_id =$tables_id";
if (mysqli_query($conn, $sql)) {
    header("Location: ../view_tables.php?delete=success");
} else {
    header("Location: ../view_tables.php?delete=error");
}
}


mysqli_close($conn);
?>

    


