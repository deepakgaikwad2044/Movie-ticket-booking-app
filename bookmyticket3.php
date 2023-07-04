<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width , initial-scale=1.0" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>    
    
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
   
  <!--link rel="stylesheet" type="text/css"
   href="bookticket3.css" -->    
   <title></title>

<style>

 
   *{
                margin:0;
                padding:0;
                box-sizing:border-box;
           }
            
            body{
                min-height:100vh;
            }
            html{
                font-size:62.5%;
                font-family:Arial;
              user-select:none;
                scroll-behavior:smooth;
               
            }
            
            
            main{width:100vw;
                min-height:100vh;
               
             
                overflow: hidden;
            }
                
            
            header{
                width:100%;
                height:20vh;
                display:flex;
                justify-content:space-around;
          align-items:center;
          padding:2rem;
         position:sticky;
         top:0;
         background:#f8f8f8;
         z-index:100;
 }   
 
 
 .brand_logo{
     width:30%;
     font-size:4.8rem;
     display:flex;
     align-items:center;
     font-weight:bold;
background:linear-gradient(45deg, #cc88bb 0%,#e6683c 25%,#de789b 50%,#3498db 75%,#cc88de 100%);
-webkit-background-clip:  text;
-webkit-text-fill-color: transparent;
font-family:Georgia;
letter-spacing:-.4rem;
    
 }
  
 
 

 header nav{
     width:60%;
     display:flex;
     justify-content:space-around;
     align-items:center;
    font-size:1.8rem;
    text-transform:uppercase;
 }
 
 header nav a{
     position:relative;
 }
 
 
 .homeanchor{
     font-weight:bold;
 }
 
 header nav a:hover{
     font-size:2.2rem;
    font-weight:bold;
 }
 
 header nav a::before{
     content:'';
     position:absolute;
     bottom:0;
     border: .1rem solid #db98db;
     width:0;
     transition:all .2s linear;
     opacity:0;
 }
 
 header nav a:hover::before{
     width:75%;
     opacity:1;
 }
 
 .video-responsive{
     width:100%;
     height:80vh;
     display: flex;
     justify-content: space-around;
     align-items: center;
     /*background:rgba(0,120,102, 2);*/ 
     /*background:rgba(122,23,01,.2);*/
     background:rgba(12,23,01,.2);
 }
     
     video{ width:100%;
          height:400px;
         object-fit:cover!important;
         transform: scale(3);
         filter: grayscale(90%);
         transform: scale(.88);
         opacity:.8;
     }
 
    
       
       .submitBtn:active{
           transform:scale(.89);
       }
       
       .fa-bars{
           display:none;
       }
       
       .mobile-nav{
           display:none;
       }
       
       
       .slidernavbar{
           display:block;
       }
       
       .slida{
            display:flex!important;
       }
      
  
      .form_tittle{
          font-size:4rem;
          padding:2rem;
          height:20vh;
          color:#db3434;
         
        
      }
      

      .formdesign{
         
          width:100vw;
          padding:5rem;
          background:#fff;
          height:100%;
          
      }
      
      .details{
          width:100vw;
         display:flex; 
         justify-content:space-around;
         align-items:left;
         flex-direction: column;
         position:relative;
         padding:1.5rem;
       
      }
   
   .details label{
       font-size:2rem;
       margin-top:5rem;
       font-weight:bold!important;
   }
   
   
   .details input{
       width:100%;
       padding:.5rem;
       margin-top:2rem;
       font-size:3rem;
       background:none;
       border:none;
       outline:none;
       border-bottom:.1rem solid #000;
       font-weight:400!important;
      
   }
    
    .details input::placeholder{
        font-size:2.5rem!important;
        position:absolute; 
        bottom:0%;
        right:25%;
    } 
    

    
    .btn {width:20rem;
        padding:2rem;
        margin-top:5rem;
        margin-left:1rem;
        font-size:2rem;
        display:flex;
        justify-content:center;
        align-items:center;
        outline:none;
        border:none;
        border-radius:.5rem;
    }
    
    .btn:hover{
        background:#23bd99;
        color:#fff;
    }
    
    
    #footerbar{
        
        width:100%;
        height:25vh;
        background:#000;
        color:#f8f8f8;
        position:sticky;
        top:100%!important;
       
        padding:2rem;
        text-transform:capitalize;
        display:flex;
        justify-content:center;
        align-items:center;
        }
   
    
    .socialicons{
        font-size:2rem;
        padding:2rem;
        display:flex;
        justify-content:space-around;
        align-items:center;
    }
    
    .fab {
        padding:1rem;
    }
       
.error{
    font-size:1.1rem;
  margin-bottom:1rem!important;
  position:absolute;
  top:5%;
  left:3.8%;
    font-weight:bold;
    color:#f4000c;
}    

 


.name , .mail , .phone, .pass , .match{
     display:none!important;
}
    
    .display{
        display:block!important;
    }  
    

  
       
 
    
    
  
@media screen and (max-width: 768px) {
   
    html{
     font-size:40%!important;
     height:100%;
 }
 
 
.error{

   font-size:2rem;
}  
 
 video{
     width:400px;
     height:400px;
 }
 .video-responsive{
     height:65%;
 }
 
 
 header{
     height:15vh;
 }
 

 .background{
     height:80vh;
 }
 
 
 .brand_logo{
     width:auto;
     margin-left:auto;
     display:flex;
     justify-content:center;
     align-items:center;
 }
 

header nav { 
    position:absolute;
 top:0;
 left:0;
     width:50%;
    height:100vh;
    background:#f3f3f3;
    display:flex;
    justify-content:space-around;
    align-items:center;
    flex-direction:column;
    display:none;
    
    transition:all 2s linear!important;
 }
 
 

 
header nav a{
     display:none;
 }
 
 
 

 .mobile-nav{
     position:absolute;
     top:80%;
     left:5%;
     display:block;
     display:flex;
     justify-content:space-around;
    
     flex-direction:column;
     font-size:2.2rem;
     display:none;
 }
 
 .mobile-nav a{
     padding:1.2rem;
     
 }
 
 .mobile-nav a:hover{
     font-weight:bold;
 }

 .fa-bars{
     font-size:3rem;
     display:block;
     padding:2rem;
     position:absolute;
     left:5%;
     z-index:1000;
 }
    
    

      .section2{
          width:100vw;
          min-height:100vh!important;
          background:#fff;
          display:flex;
          justify-content:center;
          align-items:center;
          margin-top:-30rem;
      }  
 

   

   
   
   .form_tittle{
       margin-bottom:-10rem;
   }
   .details{
          width:100%;
         display:flex; 
         justify-content:space-around;
         align-items:left;
        
        
         flex-direction:column;
      }
      
      
   
   .details label , .loginpage label{
       font-size:2.2rem;
       
       font-weight:bold!important;
       
   }
   

  
   .details input{
       width:100%;
       padding:1.5rem;
       margin-top:2rem;
       font-size:2.4rem;
       border-radius:.5rem;
       border: .2rem solid #000;
       
       font-weight:bold;
   }
   
   
   
 


    .details input::placeholder{
        font-size:2rem!important;
        position:absolute; 
         top:25%;
        left:5%;
    } 
    
    .btn , .loginbtn{width:20rem;
        padding:2rem;
        margin-top:5rem;
        margin-left:1rem;
        font-size:2rem;
        display:flex;
        justify-content:center;
        align-items:center;
        outline:none;
        border:none;
        border-radius:.5rem;
    }
    
    
    .loginpage label{
        transform: translateX(-8rem);
    }
    .btn:hover{
        background:#23bd99;
        color:#fff;
    }
    
 
    
    #footerbar{
        height:10vh;
       
    }
    
    .socialicons{
        font-size:1.5rem;
        padding:2rem;
        display:flex;
        justify-content:space-around;
        align-items:center;
    }
    
    .Renter{
       transform:translateX(-13rem)!important;
    }
    

    .preloader{
        font-size:2rem!important;
    }
    
    /*.preloader img{
       width:40rem;
       
       background-size:100%;
       object-fit: content;
       position:absolute;
       transform:translate( 5rem 55rem);
    
       z-index:100;
    }
   */
}
  
  
    .succes-msg{
        width:100%;
        padding:2rem;
        margin-top:4rem;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:2rem;
        font-family:Monospace;
        color:#8c34eb;
        
    }
    
    a{  text-decoration:none;
        color:#000;
    }   

   .preloader{width:100vw;
      height:100vh;
      background:#fff url('prloader/load1.gif') no-repeat center;
      background-size:55%;
     
       font-size:3rem;
       z-index:101;
     position:fixed;
       top:0!important;
    }
    
    
    .alreadyAcc {
      width:100%;
      padding:1rem;
     margin-top:5rem;
    }
    
    .alreadyAcc h3{
      color:#909090;
      font-weight:500;
     font-size:2.3rem;
    }
    
    .alreadyAcc a{
      font-weight:bold;
background:linear-gradient(85deg, #cc88bb 0%,#e6683c 25%,#de789b 10%,#3498db 75%,#cc88de 100%);
-webkit-background-clip:  text;
-webkit-text-fill-color: transparent;
    font-size:2.7rem;
 text-decoration:underline;

    }
  
     
   
  
</style>
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
                <a class="homeanchor">Home</a>
                <a href="#signup">Signup</a>
                <a href="loginpage.php">Login</a>
                <a>term & condition </a>
                   
                </nav>
               
                <article class="mobile-nav">
               
                <a>Home</a>
                <a href="#signup">Signup</a>
                <a href="loginpage.php">Login</a>
                <a>term & condition </a>
                  
                </article>

            </header>
        
     
     
     <div class="video-responsive">
        <video src="../videos/demo.mp4"   loop autoplay muted></video>
         
     </div>
           
            <!--div class="contest">
We are giving you a big gift in the coming New Year celebration!!  
     <a href="#userform"><button class="submitBtn">register now</button> </a>
            </div-->
    
        
        </main>
    
     <article class="section2" id="signup">
  <div class="formdesign">
     <div class="form_heading">  <h3 class="form_tittle"> Sign up form</h3></div>
           
    <form id="signform" >
              
               <div class="details">
           
<h3 class="error name"></h3>
           
             
           <label>full name: </label>
           
  


  
     <input type="text" class="username"  name="user" required  placeholder="Deepak Gaikwad">
               
               
               
               </div>
               
               
               <div class="details">
<h3 class="error mail">Invalid Enter mail id</h3>
             <label>email id:</label>
          <input type="email" required name="email" class="email"   placeholder="dg@gmail.com">
              </div>
               <div class="details">
                   <label>phone no:</label>
<span class="error phone">Invalid Enter phone no</span>
          <input type="phone" name="phone" id="phone"  required placeholder="1234567890">
               </div>
               <div class="details">
                   <label class="passclass">create new password:</label>
<span class="error pass">min 6 length</span>
         
        <div class="password_design">
            
          <input type="text" class="pas passwordvalue" required name="password"  placeholder="create new password"> 
         
        </div>
               </div>
               


    
   <button  type="submit"  id="signupbtn" name="signup_sub" class="btn">sign up now</button>
      
      
  <div class="succes-msg">
            
          <h3 class="formsubmitMsg"></h3>
        </div>
  <div class="alreadyAcc">
    <h3> already have an account?  
    <a href="loginpage.php">login here</a></h3>   
    </div>
          
           </form> 
            

    
        </div>
    

      </article>
   
    

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
        
 <!--script src="bookticket3.js"></script-->
    
   <script>
     
 
    
      const baars = document.querySelector(".fa-bars");
            
            
     const mobnav = document.querySelector(".mobile-nav a");
     
     const headernav = document.querySelector("header nav");
    
     const mobilenav = document.querySelector(".mobile-nav");
    
   
    
      baars.onclick = function(){
         
    
 
 headernav.classList.toggle("slidernavbar");
    mobilenav.classList.toggle("slida");
   
 
          }
         
     
  
  
   
    let validusername = false;
    let validemail = false;
    let validphone = false;
    let validpassword = false;
    let validconfirm_password = false;
   
   
         
   let username = document.querySelector(".username");
   
   
   username.onkeyup = function(){
       
   let userval = username.value.trim();
   
                let nameerror = document.querySelector(".name");
             
             
             
    let useregex =/^[A-Z. a-z]{3,30}$/;
  
  

 
 if(useregex.test(userval)||userval==''){
                

                
        nameerror.classList.remove("display");  
         validusername= true;       
            }else{
        
             nameerror.classList.add("display");
                
 nameerror.innerHTML = "min 3 char required and number & symbol not allowed";
              
          validusername = false;
                  
            }
    
   
    

   }
  

         
         

     let email = document.querySelector(".email");
     
     let emailerror = document.querySelector(".mail");
     
     email.onkeyup= function(){
         
         let emailval = email.value;
         
let  emailfilter = /^[a-zA-Z0-9.!#$%&'*+=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

   


if(emailfilter.test(emailval) || emailval==''){
    
       emailerror.classList.remove("display");  
              validemail = true;  
            }else{
        
             emailerror.classList.add("display");
                
         emailerror.innerHTML = "Invalid Email id ";
              
               
                validemail =  false;  
}
     }
       
  
        let phone = document.querySelector("#phone");
        
        phone.onkeyup = function(){
       
       let phoneval = phone.value.trim();
       
       let phoneerrortext = document.querySelector(".phone");
       
 let phonefilter = /^[789][0-9]{9}$/;
  
  if(phonefilter.test(phoneval) || phoneval==''){
     phoneerrortext.classList.remove("display");
     
     validphone = true;
  }else{
    phoneerrortext.classList.add("display");
phoneerrortext.innerHTML = "Invalid phone no";
 validphone = false;
  }
        }
    
let passwordvalue = document.querySelector(".passwordvalue");

let errorpass =document.querySelector(".pass");
  
passwordvalue.onkeyup = function(){
    

let passvalid = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
   
   
    
    let passuser = passwordvalue.value.trim();
    
    if(passvalid.test(passuser) || passuser ==''){
        
    errorpass.classList.remove("display");  
      
      validpassword = true;         
            }else{
      
               
       validpassword =  false; 
       
       
             errorpass.classList.add("display");
                
 errorpass.innerHTML =" Atleast 1 lowercase letter 1 uppercase letter 1 number 1 symbol enter "
         ;

} 
     }
     
 
 
  
     let preloader = document.querySelector(".preloader");
     
     window.onload = function(){
         preloader.style.display="none";
     }
     
            let form = document.querySelector("#signform");
            let btn = document.querySelector(".btn");
        let result = document.querySelector(".succes-msg");   
            
          
      
      let signupbtn = document.querySelector("#signupbtn");
     let signupform = document.querySelector("#signform"); 
     
     signupbtn.onclick = function(e){
    
     if(validusername && validemail && validphone && validpassword ){
     
const data = new URLSearchParams(new FormData(form)); 
    
       fetch("signup.php",{
        method:"post",
        body:data,
        headers: {"Content-Type": "application/x-www-form-urlencoded", },
       }).then(res=>res.text()).then( function(res){
     let check = res;
     
      if(check=="done"){
       
       
swal({
  title: "Successfully account has been created",
  text: "Redirecting in 2 seconds..",
  type: "success",
  timer: 2000,
  showConfirmButton: false
}, function(){
      window.location.href = "loginpage.php";
});

    
       
         
      }else{
         
    result.innerHTML=res;
     
swal({
  title: "Please enter valid email id",
  text: res,
  type: "info",
  button: "ok"
});
     
      }
      
       }
       ).catch(er=>result.innerHTML = er);
       
      
     }else{
      
         
swal({
  title: "Please fill the blank",
  text: "All fields are required..",
  type: "info",
  button: "ok"
});

    
         
     }
     
     e.preventDefault();
     
    
     }
     
     
   </script> 
    </body>
</html>