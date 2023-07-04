<?php

include("con.php");

$id = $_GET['id'];

$userammt = mysqli_real_escape_string($con, $_POST['useramt']);

$payorder = mysqli_real_escape_string($con, $_POST['paymentorder']);


    $userselect = mysqli_query($con, "select * from users where userid = '$id' ");
    
    $getdata =  mysqli_fetch_array($userselect);


 if( !empty($userammt) &&  $userammt > 0 && !empty($payorder)){
  
  if($payorder === "google pay"){
    

$newgooglepaybal = $getdata['googlepay'] + $userammt;

    


    $update  = mysqli_query($con, "UPDATE users SET  googlepay =  '{$newgooglepaybal}' where userid = '{$id}'   ");
   
   if($update){
  
    echo "  <h5 class='sucmsg'> succesfully - $userammt Rs  added in  google pay account </h5> " ;
   }else{
     echo "not added".mysqli_error($con);
   }
    
    
    
  }else if($payorder == "phone pay" )
 {
   
   
$newphonepaybal = $getdata['phonepay'] + $userammt;

  $update  = mysqli_query($con, "UPDATE users SET  phonepay =  '{$newphonepaybal}' where userid = '{$id}'   ");
   
   if($update){
  
    echo "  <h5 class='sucmsg'> succesfully - $userammt Rs  added in  phone pay account </h5> " ;
   }else{
     echo "not added".mysqli_error($con);
   }
    
   
   
   
 }else if($payorder == "amazon pay"){
   

$newamazonepaybal = $getdata['amazonpay'] + $userammt;

  $update  = mysqli_query($con, "UPDATE users SET  amazonpay =  '{$newamazonepaybal}' where userid = '{$id}'   ");
   
   if($update){
  
    echo "  <h5 class='sucmsg'> succesfully - $userammt Rs  added in  Amazon pay account </h5> " ;
   }else{
     echo "not added".mysqli_error($con);
   }
    
   
   
   
   
 }
 else if($payorder == "paytm"){
   

$newamazonepaybal = $getdata['paytm'] + $userammt;

  $update  = mysqli_query($con, "UPDATE users SET  paytm =  '{$newamazonepaybal}' where userid = '{$id}'   ");
   
   if($update){
  
    echo "  <h5 class='sucmsg'> succesfully - $userammt Rs  added in  paytm account </h5> " ;
   }else{
     echo "not added".mysqli_error($con);
   }
    
   
   
   
   
 }
 
 else{
   echo "something went wrong Try again leter";
 }
 
 
 
 }else{
  echo "** please enter the valid amount" ; 
 }


$con->close();


?>