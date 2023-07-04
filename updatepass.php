
<?php

require_once("con.php");

$id =  $_GET['id'];


$checkuserpassword =  mysqli_real_escape_string($con, $_POST['checkuserpassword']);


$updatenewpassword =  mysqli_real_escape_string($con, $_POST['update_newpassword']);


$getuser = mysqli_query($con, "select password from users where userid = '{$id}' ");

$getdata  =  mysqli_fetch_array($getuser)
;

$passverify = 
  password_verify($checkuserpassword  , $getdata['password']);

    

if($passverify){

$Password_encypt =  password_hash($updatenewpassword , PASSWORD_BCRYPT)
;
   
$updatePasswordverify = 
  password_verify($updatenewpassword  , $getdata['password']);

    
   
   
   if($updatePasswordverify  !=    $passverify){

$update_passwordQuery = mysqli_query($con, "UPDATE users SET password = '{$Password_encypt}'  where userid = '{$id}' ");

if($update_passwordQuery){
  
  echo " <h3 class='sucmsg'> password successfully changed </h3>";
}else{
  echo " <h3 class='ermsg'>  **password not changed! </h3>";
  
}

}else{
  echo " <h3 class='ermsg' > Password is same </h3> ";
}

}else{
  echo " <h3 class='ermsg'> incorrect password! </h3>";
}


$con->close();

?>  