<?php

require("con.php");

$id  = mysqli_real_escape_string($con, $_GET['id']);



$delete_email = mysqli_real_escape_string($con, 
$_POST['delete_email']);


$deletepwd = mysqli_real_escape_string($con, $_POST['delete_password']);


$delete_reson = mysqli_real_escape_string($con, $_POST['delete_resons'] );


$sel =  mysqli_query($con, "select * from users where  userid = '{$id}' ");


$user = mysqli_fetch_array($sel);

$pwd_verify = password_verify($deletepwd , $user['password']);

if($delete_email != $user['email'] )
{
  


  echo " $delete_email -  incorrect email id entered!";
}else if($pwd_verify != $user['password']){
  echo "incorrect password entered!";
}else{
 
 
    $delete_acconnt = mysqli_query($con, "insert into Deleted_account ( email , reson) values (
        '{$delete_email}', '{$delete_reson}') ");
    
 
 
  $deletaccountrequest = mysqli_query($con, "Delete from users where userid= '{$id}'   ");
  
  
  
  
  if($deletaccountrequest){
    
    $deletebookingTickets  = mysqli_query($con, "Delete from bookticket where bookingid = '{$id}'  ");
    
    
    if($deletebookingTickets){
     echo 1; 
    }else{
      echo "account not deleted!";
    }
  }
  
  
}


$con->close();
?>