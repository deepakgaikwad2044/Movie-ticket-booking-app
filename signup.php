<?php

require("con.php");

   
    $fullname = mysqli_real_escape_string($con, $_POST['user']);
    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $phone= mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
 

    if(!empty($fullname) && !empty($email) && !empty($phone) && !empty($password))
{
     $strpass = password_hash($password , PASSWORD_BCRYPT);   
  if(filter_var($email,FILTER_VALIDATE_EMAIL
  )){
      
    $sel = mysqli_query($con, "select * from users where email = '{$email}' ");
   $row = mysqli_num_rows($sel);
   
   if($row == 1){
      echo "$email  already taken " ;
   }else{
       
       $selephone = mysqli_query($con, "select * from users where phone = '{$phone}' ");
       $phonerow = mysqli_num_rows($selephone);
       
       if($phonerow == 1){
       echo "$phone this no  already taken";
       }else{ 
           
     $rand_id = rand(time(), 1000);
         
$ins = mysqli_query($con, "insert into users (userid , fullname, email, phone, password)values( '{$rand_id}' , '{$fullname}' , '{$email}' , '{$phone}' , '{$strpass}') ");

if($ins){
    echo "done"; 

}else{
    echo "failed not insert data";
}  
 
   }



   }
    
  }else{
 echo(" $username - this email id not valid");
  }  
     
}else{
    echo "All fields are required";
}
    
  
  $con->close();


  
?>