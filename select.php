<?php

$id  = $_GET['id'];

echo $id;

$pimpri_theaterName  = array('Ashok Theater', 'Vishal Cinemas');

$hinjawadi_theaterName  = array('E-square Theater', 'prime Theater');

switch ($id) {
    case 'Pimpri':
        
        
foreach($pimpri_theaterName as $getvalue){
      
       echo "<option> $getvalue</option>";
}  
        
        break;
    
    case 'Hinjawadi': 
        
        
        foreach($hinjawadi_theaterName as $getvalue){
           echo "<option> $getvalue</option>";
        }
    
    default:  echo "no has found";
        // code...
        break;
}
?>