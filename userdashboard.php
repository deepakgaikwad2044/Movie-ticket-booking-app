<?php
 require("con.php");
 
  $ids = $_GET['user'];

  $sel = mysqli_query($con, "select * from users where userid='{$ids}'");
  
  $fetch = mysqli_fetch_array($sel);
  ?>
  
  <div class="responsiveImg"><img src="profile/<?php  echo $fetch['profile']?>"  class="userprofilestyle" alt="user profile img"></div>
 
 <div class="username  editprofilepage">
  <label> <b> Edit Profile: </b> </label>
 </div>
 
 
 <div class="username"><label>Username:</label> <h3><?php echo $fetch['fullname'];    ?></h3></div>
 
 <div class="username creditbox"><label>credit:(free)</label> <h3><?php echo $fetch['credit']; ?> Rs </h3></div>

 <div class="username creditbox"><label>Google Pay balance:</label> <h3><?php echo $fetch['googlepay']; ?> Rs</h3></div>

 <div class="username creditbox"><label>Phone  Pay balance:</label> <h3><?php echo $fetch['phonepay']; ?> Rs </h3></div>

 <div class="username creditbox"><label>Amazon Pay balance:</label> <h3><?php echo $fetch['amazonpay']; ?> Rs </h3></div>
 
 <div class="username creditbox"><label> Paytm:</label> <h3><?php echo $fetch['paytm']; ?> Rs </h3></div>
 
 <?php 
   ?>
   
   