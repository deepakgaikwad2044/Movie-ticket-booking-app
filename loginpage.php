<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width , initial-scale=1.0" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>    
    
    <link rel="stylesheet"  href="loginpage.css" type="text/css">
     
        <title></title>
        

    </head>
    <body>
      
      
      <div class="preloader"> 
    
      </div>
   
     <div class="frontend">
        <main>
            
            <header>
               <i class="fas fa-bars"></i>
             
             <div class="brand_logo"> 
             <span>CinmaTicket</span>
             </div>
                <nav>
             
                <a href="bookmyticket3.php">Signup</a>
                <a href="#login" class="homeanchor">Login</a>
                <a>term & condition </a>
                   
                </nav>
               
                <article class="mobile-nav">
               
                
                <a href="bookmyticket3.php">Signup</a>
                <a href="#login" class="homeanchor" >Login</a>
                <a>term & condition </a>
                  
                </article>

            </header>
        
     
     
     <div class="video-responsive">
        <video src="../videos/demo.mp4"   loop autoplay muted></video>
         
     </div>
         
     <article class="section2" id="">
  <div class="formdesign">
     <div class="form_heading">  <h3 class="form_tittle">Login</h3></div>
           
    <form id="loginup" >
  
           
               <div class="details">
                   <label>email id:</label>
<span class="error mail">Invalid Enter mail id</span>
 <input type="email"  name="email" class="email"   placeholder="email id enter" required="">
              </div>
              
              
               <div class="details">
                   <label>Password:</label>
<span class="error phone">Invalid password</span>
          <input type="text" name="password" placeholder="password enter" 
          class="password">
               </div>
               
       
               
         <button  type="submit"  id="signupbtn" name="signup_sub" class="btn">Login</button>
     
      
      
        <div class="succes-msg">
            
          <h3 class="formsubmitMsg"></h3>
        </div>
        
          
           </form> 
            
  <div class="alreadyAcc">
    <h3> Dont have't an account?  
    <a href="bookmyticket3.php">Signup here</a></h3>   
    </div>
        </div>
    
      </article>
      
        </main>
    
    

      
      <div id="footerbar">
   
   <footer>
   <div class="socialicons">
 <h4>social media patner</h4> 
      <i class="fab fa-facebook">facebook</i>
      <i class="fab fa-instagram">Instagram</i>
      <i class="fab fa-whatsapp">whatsapp</i>
      <i class="fab fa-airoplen">telegram</i>
   </div>
   </footer>
   
      </div>
     </div> 
        
<script src="login.js"></script>
   
    </body>
</html>