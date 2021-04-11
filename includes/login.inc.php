<?php
if (isset($_POST['login-submit'])) {
    
    require 'dbh.inc.php';
    
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    
    
    if(empty($mailuid) || empty($password)) {
        header("Location: ../index.php?error1=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";     //username or email
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error1=error");
        exit();
        }
        else {
            
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if($pwdCheck == false){
                    header("Location: ../index.php?error1=wrongpwd");
                    exit();   
                }
                else if($pwdCheck == true) {
                    session_start();                                //buat sessions
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['username'] = $row['uidUsers'];
                    $_SESSION['role'] = $row['role_id'];
                    
                    header("Location: ../reservation.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../index.php?error1=error2");
                    exit();    
                }
            }
            else{
                header("Location: ../index.php?error1=nouser");
                exit();
            }
        }
    }
    
}
else{
    header("Location: ../index.php");
    exit();
}
