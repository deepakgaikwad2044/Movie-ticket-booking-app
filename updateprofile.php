<?php

require("con.php");

$file  = $_FILES['image'];
$filename = $file['name'];
$userid = mysqli_real_escape_string($con, $_GET['userid']);

//echo $userid;
if(!empty($filename)){
    
$fileerror = $file['error'];

if($fileerror < 1){

$path = $file['tmp_name'];

$divid = explode( ".", $filename);

$uniq_filename = $divid[0].uniqid().".".$divid[1];
$fname  = $uniq_filename;
  
   
    
move_uploaded_file($path,"profile/".$fname);
$upprofilestatus = mysqli_query($con, "UPDATE users SET profile = '{$fname}' where userid = '{$userid}'  ");

if($upprofilestatus){
    echo " <span class='sucmsg'> profile succesfully updated.. </span>";
}else{
    echo "failed";
}

}else{
    echo "file error";
}
}

$con->close();
?>
