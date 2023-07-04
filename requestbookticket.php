<?php
session_start();

require("con.php");
require_once("phpqrcode/qrlib.php");

$moviename = mysqli_real_escape_string( $con, $_POST['movie']);

$seatno = mysqli_real_escape_string($con, $_POST['seatno']);
$showtime = mysqli_real_escape_string($con, $_POST["time"]);
$theatername = mysqli_real_escape_string($con, $_POST['sel2']); //theater name
$cinemalocation = mysqli_real_escape_string($con, $_POST['sel1']); //theater name
$showdate = mysqli_real_escape_string($con, $_POST['showdate']);
$ticketprice = mysqli_real_escape_string($con, $_POST['price']);
$userperid = mysqli_real_escape_string($con, $_POST['userperid']);

$payment_Method = mysqli_real_escape_string($con, $_POST['paymd']);



if(!empty($moviename)&& !empty($showtime)&& !empty($showdate) && !empty($seatno) && !empty($theatername ) && !empty($ticketprice) && !empty($userperid) && !empty($payment_Method) ){


date_default_timezone_set("Asia/kolkata");

$rightTime = date('Y-m-d');


if(($showdate != $rightTime)&& ($showdate > $rightTime)){
  
  
  
  
  
  if($payment_Method == "credit"){
  
  
   
  $checkCredit = mysqli_query($con, "select * from users where userid= '{$userperid}' and credit >= '120'  ");
  
  $foundrow = mysqli_num_rows($checkCredit);
  
  if($foundrow > 0){
   

   
$sel = mysqli_query($con, "select * from bookticket where moviename LIKE '{$moviename}' &&   showdate LiKE '{$showdate}' &&  seatno LIKE '{$seatno}' && theatername LIKE '{$theatername}'  ");

$row = mysqli_num_rows($sel);

if($row == 0){
    
  /*  $result  =  
    $userperid.$moviename.$showtime.$showdate.$seatno.$ticketprice.$theatername.$cinemalocation.$payment_Method;
  */
  
  
  $coma = ",";
  $result = 
  ''.$userperid.$coma.''.
  ''.$moviename.$coma.''.
  ''.$showtime.$coma.''.
  ''.$showdate.$coma.''.
  ''.$seatno.$coma.''.
  ''.$theatername.$coma.''.
  ''.$cinemalocation.$coma.''.
  ''.$payment_Method.$coma.'';
    
    $path = "qrimg/";
    $file = $path.$userperid.$moviename.uniqid().".png";
    
    $ecc ="L";
    $pixel_Size = 10;
    $frame_Size = 10;
    
    QRcode::png($result , $file ,  $ecc, $pixel_Size , $frame_Size);

    $ins = mysqli_query($con, "insert into bookticket (bookingid, moviename , showtime , showdate , seatno , ticketprice , theatername , cinemahall, payment_method, Qrstore) 
    values ('{$userperid}', '{$moviename}', '{$showtime}', '{$showdate}' , '{$seatno}' , '{$ticketprice}' , '{$theatername}', '{$cinemalocation}', '{$payment_Method}' , '$file' )");
    
    
    if($ins){
        echo 1;
        
   $getusercredit  = mysqli_fetch_array($checkCredit);
   
   $updatemoney = $getusercredit['credit']  ;
   
   
   $result  = $updatemoney - 120;
   
  
  $updatequery = mysqli_query($con, "update users SET credit = '{$result}' where userid = '$userperid'  ");
   
    }else{
        echo "failed";
    }
    
}else{
    echo 2;
}

}else{
      echo 00;
  } 

}else if($payment_Method == "Google Pay"){
  
  $checkCredit = mysqli_query($con, "select * from users where userid= '{$userperid}' and googlepay >= '120'  ");
  
  $foundrow = mysqli_num_rows($checkCredit);
  
  if($foundrow > 0){
   

   
$sel = mysqli_query($con, "select * from bookticket where  moviename LIKE '{$moviename}' &&  showdate LiKE '{$showdate}' &&  seatno LIKE '{$seatno}' && theatername LIKE '{$theatername}'  ");

$row = mysqli_num_rows($sel);

if($row == 0){
   
    
  $coma = ",";
  $result = 
  ''.$userperid.$coma.''.
  ''.$moviename.$coma.''.
  ''.$showtime.$coma.''.
  ''.$showdate.$coma.''.
  ''.$seatno.$coma.''.
  ''.$theatername.$coma.''.
  ''.$cinemalocation.$coma.''.
  ''.$payment_Method.$coma.'';
    
    $path = "qrimg/";
    $file = $path.$userperid.$moviename.uniqid().".png";
    
    $ecc ="L";
    $pixel_Size = 10;
    $frame_Size = 10;
    
    QRcode::png($result , $file ,  $ecc, $pixel_Size , $frame_Size);

    $ins = mysqli_query($con, "insert into bookticket (bookingid, moviename , showtime , showdate , seatno , ticketprice , theatername , cinemahall, payment_method, Qrstore) 
    values ('{$userperid}', '{$moviename}', '{$showtime}', '{$showdate}' , '{$seatno}' , '{$ticketprice}' , '{$theatername}', '{$cinemalocation}', '{$payment_Method}' , '$file' )");
    
    
    if($ins){
        echo 1;
        
   $getusercredit  = mysqli_fetch_array($checkCredit);
   
   $updatemoney = $getusercredit['googlepay']  ;
   
   
   $result  = $updatemoney - 120;
   
  
  $updatequery = mysqli_query($con, "update users SET googlepay = '{$result}' where userid = '$userperid'  ");
   
    }else{
        echo "failed";
    }
    
}else{
    echo 2;
}

}else{
      echo 00;
  } 
  
  
  
  
}
else if($payment_Method == "Phone Pay"){
  
  $checkCredit = mysqli_query($con, "select * from users where userid= '{$userperid}' and phonepay >= '120'  ");
  
  $foundrow = mysqli_num_rows($checkCredit);
  
  if($foundrow > 0){
   

   
$sel = mysqli_query($con, "select * from bookticket where  showdate LiKE '{$showdate}' &&  seatno LIKE '{$seatno}' && theatername LIKE '{$theatername}'  ");

$row = mysqli_num_rows($sel);

if($row == 0){
    
  $coma = ",";
  $result = 
  ''.$userperid.$coma.''.
  ''.$moviename.$coma.''.
  ''.$showtime.$coma.''.
  ''.$showdate.$coma.''.
  ''.$seatno.$coma.''.
  ''.$theatername.$coma.''.
  ''.$cinemalocation.$coma.''.
  ''.$payment_Method.$coma.'';
    
    
    $path = "qrimg/";
    $file = $path.$userperid.$moviename.uniqid().".png";
    
    $ecc ="L";
    $pixel_Size = 10;
    $frame_Size = 10;
    
    QRcode::png($result , $file ,  $ecc, $pixel_Size , $frame_Size);

    $ins = mysqli_query($con, "insert into bookticket (bookingid, moviename , showtime , showdate , seatno , ticketprice , theatername , cinemahall, payment_method, Qrstore) 
    values ('{$userperid}', '{$moviename}', '{$showtime}', '{$showdate}' , '{$seatno}' , '{$ticketprice}' , '{$theatername}', '{$cinemalocation}', '{$payment_Method}' , '$file' )");
    
    
    if($ins){
        echo 1;
        
   $getusercredit  = mysqli_fetch_array($checkCredit);
   
   $updatemoney = $getusercredit['phonepay']  ;
   
   
   $result  = $updatemoney - 120;
   
  
  $updatequery = mysqli_query($con, "update users SET phonepay = '{$result}' where userid = '$userperid'  ");
   
    }else{
        echo "failed";
    }
    
}else{
    echo 2;
}

}else{
      echo 00;
  } 
  
  
  
  






}
else if($payment_Method == "Paytm"){
  
  $checkCredit = mysqli_query($con, "select * from users where userid= '{$userperid}' and paytm >= '120'  ");
  
  $foundrow = mysqli_num_rows($checkCredit);
  
  if($foundrow > 0){
   

   
$sel = mysqli_query($con, "select * from bookticket where  showdate LiKE '{$showdate}' &&  seatno LIKE '{$seatno}' && theatername LIKE '{$theatername}'  ");

$row = mysqli_num_rows($sel);

if($row == 0){
    
  $coma = ",";
  $result = 
  ''.$userperid.$coma.''.
  ''.$moviename.$coma.''.
  ''.$showtime.$coma.''.
  ''.$showdate.$coma.''.
  ''.$seatno.$coma.''.
  ''.$theatername.$coma.''.
  ''.$cinemalocation.$coma.''.
  ''.$payment_Method.$coma.'';
    
    
    $path = "qrimg/";
    $file = $path.$userperid.$moviename.uniqid().".png";
    
    $ecc ="L";
    $pixel_Size = 10;
    $frame_Size = 10;
    
    QRcode::png($result , $file ,  $ecc, $pixel_Size , $frame_Size);

    $ins = mysqli_query($con, "insert into bookticket (bookingid, moviename , showtime , showdate , seatno , ticketprice , theatername , cinemahall, payment_method, Qrstore) 
    values ('{$userperid}', '{$moviename}', '{$showtime}', '{$showdate}' , '{$seatno}' , '{$ticketprice}' , '{$theatername}', '{$cinemalocation}', '{$payment_Method}' , '$file' )");
    
    
    if($ins){
        echo 1;
        
   $getusercredit  = mysqli_fetch_array($checkCredit);
   
   $updatemoney = $getusercredit['paytm']  ;
   
   
   $result  = $updatemoney - 120;
   
  
  $updatequery = mysqli_query($con, "update users SET paytm = '{$result}' where userid = '$userperid'  ");
   
    }else{
        echo "failed";
    }
    
}else{
    echo 2;
}

}else{
      echo 00;
  } 
  
  
  
  






}
else if($payment_Method == "Amazon Pay"){
  
  $checkCredit = mysqli_query($con, "select * from users where userid= '{$userperid}' and amazonpay >= '120'  ");
  
  $foundrow = mysqli_num_rows($checkCredit);
  
  if($foundrow > 0){
   

   
$sel = mysqli_query($con, "select * from bookticket where  showdate LiKE '{$showdate}' &&  seatno LIKE '{$seatno}' && theatername LIKE '{$theatername}'  ");

$row = mysqli_num_rows($sel);

if($row == 0){
    
  $coma = ",";
  $result = 
  ''.$userperid.$coma.''.
  ''.$moviename.$coma.''.
  ''.$showtime.$coma.''.
  ''.$showdate.$coma.''.
  ''.$seatno.$coma.''.
  ''.$theatername.$coma.''.
  ''.$cinemalocation.$coma.''.
  ''.$payment_Method.$coma.'';
    
    
    $path = "qrimg/";
    $file = $path.$userperid.$moviename.uniqid().".png";
    
    $ecc ="L";
    $pixel_Size = 10;
    $frame_Size = 10;
    
    QRcode::png($result , $file ,  $ecc, $pixel_Size , $frame_Size);

    $ins = mysqli_query($con, "insert into bookticket (bookingid, moviename , showtime , showdate , seatno , ticketprice , theatername , cinemahall, payment_method, Qrstore) 
    values ('{$userperid}', '{$moviename}', '{$showtime}', '{$showdate}' , '{$seatno}' , '{$ticketprice}' , '{$theatername}', '{$cinemalocation}', '{$payment_Method}' , '$file' )");
    
    
    if($ins){
        echo 1;
        
   $getusercredit  = mysqli_fetch_array($checkCredit);
   
   $updatemoney = $getusercredit['amazonpay']  ;
   
   
   $result  = $updatemoney - 120;
   
  
  $updatequery = mysqli_query($con, "update users SET amazonpay = '{$result}' where userid = '$userperid'  ");
   
    }else{
        echo "failed";
    }
    
}else{
    echo 2;
}

}else{  echo 00;
 
 
  } 
  
  
  
  






}

  
  
  
}else{
    echo 3;

}

}else{
    echo 404;
}



?>