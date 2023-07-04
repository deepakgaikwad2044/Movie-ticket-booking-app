<?php
session_start();
session_destroy();


unset($_SESSION['id']);

if(!isset($_SESSION['id'])){
    header("location: loginpage.php");    
}
?>
