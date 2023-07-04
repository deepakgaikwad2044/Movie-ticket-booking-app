

<?php

require_once("con.php");

$id = mysqli_real_escape_string($con, $_GET['id']);

$email =  mysqli_real_escape_string($con, $_POST['updateemail']);


$sel = mysqli_query($con, "select * from users  where userid = '{$id}' && email = '{$email}' ");


$getrow = mysqli_num_rows($sel);

if($getrow < 1){
  
  $update_emailquery  = mysqli_query($con, "UPDATE users SET email = '{$email}' where userid = '{$id}'  ");
  
  if($update_emailquery){
  echo " <h3 class='sucmsg'> succesfully email id  updated! </h3>";

  }else{
  echo " <h3 class='ermsg'> something went wrong - try again..</h3>";

  }
  
  
}else{
  echo " <h3 class='ermsg'> $email - is already exist </h3>";
}

$con->close();
?>