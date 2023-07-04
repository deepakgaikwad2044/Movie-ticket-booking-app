<?php
require("con.php");

$id = $_GET['user'];

          $sel = mysqli_query($con, "select * from  bookticket where bookingid ='{$id}' order by id desc  ") ;
      
     $rowofnum = mysqli_num_rows($sel);
     
     if($rowofnum > 0){
      
    
  
    
    while(   $fetchdata = mysqli_fetch_array($sel)) {
    
    $random = array('google pay', 'amazon pay', 'paytm', 'phone pay');
    
     
    
    ?>
     <div class="container">
        
        <div class="brand_logo fade"><h6>CinmaTicket</h6></div>
    
        <div class="movie_designrow">
            <h3>Movie Name:</h3> 
            <h3><?php echo   $fetchdata['moviename']; ?> </h3>
        </div>
        
        <div class="movie_designrow">
            <h3>booking Id:</h3>
            <h3><?php echo $fetchdata['bookingid'];  ?></h3>
        </div>
        
        <div class="movie_designrow">
            <h3>seat No : </h3>
            <h3><?php echo $fetchdata['seatno'];  ?></h3>
        </div>
        
        <div class="movie_designrow">
            <h3>Theater Name :</h3>
            <h3><?php echo $fetchdata['theatername']; ?></h3>
        </div>
     
        <div class="movie_designrow">
            <h3>show time :</h3>
            <h3><?php echo $fetchdata['showtime']; ?></h3>
        </div>  
        
        <div class="movie_designrow">
            <h3>valid show date:</h3>
            <h3><?php echo $fetchdata['showdate']; ?></h3>
        </div>  
         
        <div class="movie_designrow">
            <h3>ticket booking date & time:</h3>
            <h3><?php echo $fetchdata['bookingtime_date']; ?></h3>
        </div>   
                 
        <div class="movie_designrow">
            <h3>ticket price:</h3>
            <h3><?php echo $fetchdata['ticketprice']; ?></h3>
        </div> 
        
        <div class="movie_designrow">
            <h3>payment method:</h3>
            <h3> <?php echo $fetchdata['payment_method'];;  ?> </h3>
        </div> 
        
        <div class="movie_designrow">
            <h3>theater location:</h3>
            <h3> <?php echo $fetchdata['cinemahall'];  ?> </h3>
        </div>  
        
     <div class="movie_designrow">
         
           <img src="<?php echo $fetchdata['Qrstore'];  ?>">
     </div>
                   
  
        
    </div>
    
    
    <?php
         
         
    }      
    
     }else{
         $result = "<h3 class='nobookticket'> No ticket booked yet!</h3>";
         echo $result;
     }
          
 

 ?>
      </div>




