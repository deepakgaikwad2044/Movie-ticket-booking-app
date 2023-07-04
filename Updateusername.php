<?php

require_once("con.php");

$id =  mysqli_real_escape_string($con,  $_GET['id']);



$updateusername = mysqli_real_escape_string($con, $_POST['updateusername']);



$sel = mysqli_query($con, "UPDATE users SET fullname = '{$updateusername}' where userid = '{$id}' ");


if($sel){
  echo "username successfully updated!";
}else{
  echo "username not updated!";
}

$con->close();
?>