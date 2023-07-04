<?php
session_start();

require("con.php");

$email = mysqli_real_escape_string($con , $_POST['email']);
$pass  =mysqli_real_escape_string($con ,$_POST['password']);


$verify = mysqli_query($con, "select * from users where email = '{$email}'  ");

$find  = mysqli_num_rows($verify);

if($find==1){
    
    $dbpas = mysqli_fetch_array($verify);
    $pascheck = password_verify($pass , $dbpas['password'] );
    
    if($pascheck){
        echo "done";
        
        $_SESSION['id']= $dbpas['userid'];
        
    }else{
        echo "password not matched";
    }
    
}else{
    echo " $email - not exist";
}


$con->close();
?>