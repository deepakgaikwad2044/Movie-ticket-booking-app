<?php
session_start();
require("con.php");
if(!isset($_SESSION['id'])){
    ?>
    <script>
        window.location = "loginpage.php";
    </script>
    <?php 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width , initial-scale=1.0" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>    
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
       
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
   
    <!--link rel="stylesheet"  href="home.css" type="text/css"-->
     
     
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
                font-size:68.5%;
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
     width:40%;
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
      
    
    
    .active{
      font-weight:bold;
    }



@media screen and (max-width: 768px) {
    html{
     font-size:38%!important;
     height:100%;
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
     font-size:3.2rem;
     display:none;
 }
 
 .mobile-nav a{
     padding:1.2rem;
     margin-top:1rem;
     
 }
 


 .fa-bars{
     font-size:3rem;
     display:block;
     padding:2rem;
     position:absolute;
     left:5%;
     z-index:1000;
 }
    
    


   .gotop {
   width:10rem;
   padding:1rem;
   background:#3498db;
   display:flex;
   justify-content:center;
   align-items:center;
   position:fixed;
   left:5%;
   z-index:70;
   border-radius:.5rem;
   font-size:3rem;
   color:#fefefe;
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
    

    

    .preloader{
        font-size:2rem!important;
    }
    
.movie-result{
    width:100vw;
    margin-top:5rem;
    padding:2rem;
    display:flex;
    justify-content:space-around;
    align-items:center;
    flex-wrap: wrap;
}
    
    .responsive_poster{
        flex-basis:50%!important;
        padding:3rem;
        display:flex;
        justify-content:center;
        align-items:center;
         }
   
 
   .movie-result img{
       width:35rem!important;
       height:70%;
       background:100% 100%;
       object-fit:cover;
      
   } 
 
 
   .ticket_room{
       width:100%;
       min-height:100vh;
       background:#fff;
       position:absolute;
       top:20%;
       display:flex;
       justify-content:space-around;
       align-items:center;
       flex-wrap: wrap;
       padding-bottom:5rem;
   }
   
   .ticket_card{
       flex-basis:80%!important;
       padding:2rem;
       background:#777;
       
   } 
    
}
   /*responsive*/  
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
    
    
 .search_movie{
     width:100%;
     padding:3rem;
     display:flex;
     justify-content:space-around;
     align-items:center;
     position:relative;
     margin-bottom:5rem;
 }
 
 .search_movie .search{
     width:83vw;
     padding:1.7rem;
     font-size:2.5rem;
     border-radius:.8rem;
     position:absolute;
     left:8%;
     background:333;
     border:none;
     box-shadow:0 0 .3rem .2rem rgba(0,0,0,.2);
     text-align:center;
 } 
    

.movie-result{
    width:100vw;
   
    
    margin-top:8rem;
    padding:2rem;
    display:flex;
    justify-content:space-around;
    align-items:center;
    flex-wrap: wrap;

}
    
    .responsive_poster{
        flex-basis: 30%;
        padding:2rem 0px;
        font-size:2.4rem;
       background:#f7f7f7;
       margin:2rem 1rem;
    }
    
    figcaption{
        font-weight:bold;
    }
    
    .responsive_poster h4{
        font-weight:300;
        font-size:2rem;
    }
 
 .movie_div{
     width:100%;
     padding:1rem 3rem;
     display:flex;
     justify-content:center;
     align-items:center;
     flex-direction:column;
 
 }
 
 
   .movie-result img{
       width:15rem;
      
       background:100% 100%;
       object-fit:content;
       margin-bottom:1.2rem;
   } 
   
   .bookbtn{margin:1rem 0;
       padding:1rem 2.5rem;
       border:none;
       background:#893734;
       color:#fff;
       font-size:2rem;
       text-transform:capitalize;
       border-radius:.5rem;
   }
   
   .name{
       width:100%;
       padding:2rem;
       font-size:2.5rem;
       font-weight:bold;
       margin-left:3rem;
   }
   
   
   .ticket_room{
       width:100%;
       
     
       position:absolute;
       top:15%;
       display:flex;
       justify-content:space-around;
       align-items:center;
       flex-wrap: wrap;
   }
 
    .container{
                min-height:80vh;
                background:#222;
                flex-basis:50%;
                margin-top:5rem;
                box-sizing:border-box;
              display:flex;
              justify-content:space-around;
               align-items:center; 
              flex-direction:column; 
              padding:2rem;
            }
            
       .ticket-left{
                flex-basis:50%;
                width:60vw;
                height:100%;
                position:relative;
                padding-bottom:2rem;
                background:#fff;
              border-top-left-radius:.6rem;
              border-bottom-left-radius:.6rem;
             
             overflow:hidden;
             border-right:.2rem dashed #888;
             
            }
            
            .brand_name{
                width:30%;
                font-size:1.3rem;
                background:#f8f8f8;
               padding:1rem;
     
            } 
            
            .brand_name h3{
background:linear-gradient(45deg, #cc88bb 0%,#e6683c 25%,#de789b 50%,#3498db 75%,#cc88de 100%);
-webkit-background-clip:  text;
-webkit-text-fill-color: transparent;
font-family:Georgia;
            }
           
           
       .movie_name , .booking_id {
           width:40%;
           padding:.5rem 0rem;
           background:red;
          display:flex;
          justify-content:space-around;
          align-items:center;
          text-align:left;
          
       }
       
      
       .right-img{
           padding:2rem;
           background:pink;
       }
       
       .seat_time{
           width:100%;
           display:flex;
           justify-content:space-around;
           align-items:center;
       }
       
    
    h4{
        text-align:left!important; 
        }
      
      .qrcode img{
          width:7rem;
          height:7rem;
      }
     @media screen and (max-width:768px){
                

         
              
              .brand_name{
                  font-size:.9rem;
              }  
              
              .brand_logo{
                  width:70%;
                  letter-spacing:0;
              }
                .container{
                    flex-basis:80%;
                    height:20rem;
                    display:flex;
                    margin:1rem;
                    z-index:5;
                    z-index:5;
                    font-size:1.2rem;
                    padding-bottom:1rem;
                }
                
               .ticket_room{
                   min-height:100vh;
               } 
                
                .ticket-left{
                    width:80vw;
                    padding-bottom:1rem;
                }
        
            
            
            .left-right{
                width:100%;
                height:15vh;  
                flex-wrap:wrap;
                display:flex;
            justify-content:space-around;
            align-items:center;
            }
            
               .tic-lef{
                width:100%;
                
                padding:6rem .5rem;
                display:flex;
                justify-content:space-around;
                align-items:left;
                flex-direction:column;
               position:relative;
               z-index:10;
               
               
            }
            
    
            .title , .Sno{ 
                font-weight:500!important;
                padding:.6rem .2rem;
               transform:translateY(-5.6rem);
            }
          
         .kra , .Sno{
              color:#000;
              font-size:1.5rem;
              font-weight:bold!important;
          }
          
          .kra{
              font-size:2rem;
          }
          span {
              text-transform:uppercase;
              color:#888;
          }  
        
        
     .qrcode{
               width:8rem;
               height:5rem ;
               padding:4rem;
         position:absolute;
         top:2%;
         right:12%;
           } 
           
           .qrcode img{
               width:10rem;
               height:10rem;
               object-fit:cover;
           }
          
          .navbar{
              width:100vw;
              padding:2rem;
              height:10vh;
              background:#f9f9f9;
              position:sticky;
              top:0%!important;
              z-index:10;
              display:flex;
              justify-content:center;
              align-items:centet;
              font-size:3rem;
              margin-top:2rem;
          }
   
   .card-body{
       font-size:1em;
   }  
        
            } 
           
  
  .userdashboard{
      width:100%;
      min-height:100vh;
     
      position:absolute;
      top:-10%;
  }    
   
   .dashboard{
       width:100%;
       padding:5rem;
      background:#f9f9f9;
    
       position:absolute;
       top:15%;
       display:flex;
       justify-content:space-around;
       align-items:center;
       flex-direction:column;
   }
   
   .responsiveImg{
       width:100%;
       padding:1rem;
       display:flex;
       justify-content:center;
       align-items:center;
       margin-top:5rem;
   }
   
   .responsiveImg img{
       width:15rem;
       height:15rem;
       border-radius:50%;
      object-fit:cover;
      margin-bottom:2rem;
   }
   
   .username{
       margin-bottom:1rem;
       width:90vw;
       padding:2rem;
       text-align:left;
       display:flex;
       justify-content: space-between;
     align-items:center;
     
   }
   
   .username label{
       font-size:2.5rem;
       color:#666;
       font-weight:400;
   }
   .username h3{
       font-size:2.4rem;
       font-weight:600;
       color:#353535;
   }
   
   
      .movie_container{
          margin-top:1rem;
                width:100%;
                min-height:100vh;
                background:#fff;
                display:flex;
                justify-content:space-around;
               align-items:center; 
               padding:2rem;
               padding-bottom:1rem;
               flex-wrap: wrap;
            }
            
            .card{
               padding-bottom:5rem;
                min-height:35rem!important;
                box-shadow:0 0 .3rem .2rem rgba(0,0,0,.2);
                flex-basis:30%;
                display:flex;
                justify-content:space-around;
           align-items:center;
           flex-direction:column;
           margin-bottom:5rem;
           background:#fff;
           position:relative;
           overflow:hidden;
           
            }
            
         .card   .title{ font-size:1.6rem;
                margin:2rem 0px;
            }
       
       .title{
           font-size:1.7rem!important;
           color:#676767;
           margin-top:8rem!important;
       }     
            .movie_poster{
                width:100%;
                height:30rem;
              
                margin-bottom:1rem;
                display:flex;
                justify-content:center;
                align-items:center;
            }
            
            .movie_poster img{
             width:100%;
             height:100%;
              object-fit:content;
              background-size:100% 100%;
            }
            
          .card  .header h3{
               font-size:2.5rem;
            }

        
            
            
            
          @media screen and (max-width:768px){
            

            .card{
                
               
                padding-bottom:3rem;
                flex-basis:80%;
                display:flex;
                justify-content:space-around;
           align-items:center;
           flex-direction:column;
           margin:5rem;
           
            }
       
         .card   .title{ font-size:2rem;
                margin-top:5rem;
            } 
           
            .movie_poster{
            
                height:35rem;
               
                margin-bottom:1rem;
                display:flex;
                justify-content:center;
                align-items:center;
               
            }
            
  .seatno{
    
      flex-basis:20%;
      margin:1rem .5rem;
   /*background:#ff3498;*/
  
   display:flex;
   justify-content:center;
   align-items:center;
  }
  
  .seatno button{
      width:8rem!important;
      font-weight:bold;
      border:none;
      color:#fff;
      font-size:2rem!important;
  }
        
      
            
         
  
  .booking_window{
      width:10vw;
      min-height:100vh;
      background:red;
      z-index:-10;
      position:absolute;
      top:-60%;
      
  }
  
  
  .card:hover  .booking_window{
      position:absolute!important;
      top:0%!important;
      z-index:10!important;
      width:100%;
  }
  

  
 /* .booking_windowConterShow{
      position:absolute;
      width:100%;
      min-height:50vh;
      top:0;
      
      background:red;
      
  }
  
  */
  
  
  .book_seat{
    min-width:100%;
     background:#fff;
     display:flex;
     justify-content:space-around;
     align-items:center;
    flex-wrap:wrap;
    
  }
  
  

  .seatno{
    
      flex-basis:20%!important;
      margin:1rem .5rem;
   /*background:#ff3498;*/
  
   display:flex;
   justify-content:center;
   align-items:center;
  }
  
  .seatno button{
      width:3rem;
      font-size:1rem;
      font-weight:bold;
      text-align:center;
      border:none;
      color:#fff;
      
  }
  


.seatno button:hover{
    background:#999;
}
   

 .booked{ 
      background:#34db11;
 }
 

 
.book_seat {
   padding:5rem; 
    display:flex;
    background:#232323;
    justify-content:space-around;
    align-items:center;
   /* padding: 1rem 2rem 1rem .5rem;*/
   flex-wrap: wrap;
 }
 
 
 
 
    
 
 .resp_radio{
     width:100%;
   flex-basis:15%;
   padding:.5rem;
   background:#898989;
     display:flex;
     justify-content:space-around;
     flex-direction:column;
   align-items:center; 
   margin-bottom:5rem!important;
 }
   


 input[type="radio"]{
    opacity:0;
 }
 input[type="radio"]:checked{
   display:none; 
   
 }

 input[type="radio"]:checked + h3{
     background:#2389db;
     padding:.6rem;
     color:#fff;
     font-size:1.2rem;
     border-radius:1rem;
     display:flex;
     justify-content:center;
     align-items:center;
 }
 
 .responsive_datetime{
     width:100%;
     display:flex;
     justify-content:space-around;
     align-items:center;
   flex-direction:column;
 }
 
 .responsive_datetime input{
     width:50%;
     
 }
 
 .responsive_datetime .ShowTime{
     width:100%;
     margin:1rem;
     display:flex;
     justify-content:space-around;
     align-items:center;
 }
  
  .responsive_datetime label{
      font-size:2.2rem;
      font-weight:bold;
  } 
  
  
  .Bookyourticket{
      width:85%;
      padding:2rem;
      height:6vh;
      display:flex;
      justify-content:center;
      align-items:center;
      position:absolute;
      bottom:5%;
      transform:translateY(3rem);
      
      
  }
  
   .Bookyourticket button{
       width:70%;
       border:none;
       font-size:2rem;
       border-radius:.5rem;
       padding: 1rem 2rem;
       background:#fb3400;
       color:#fff;
       transition: all .2s linear;
   }
   
   .Bookyourticket button:active{
       transform: scale(.95);
   }
   
          }
          
    .AddElement{
        background:red;
        position:absolute;
        right:10%;
        top:5%;
        padding:2rem;
    }
    
    .inputwidth{
      
        width:20rem;
        padding:2rem;
        margin-bottom:2rem;
    }
    
    .date{
        width:40rem;
        font-size:2rem;
    } 
    
    .droplist{
        width:45%;
        margin-left:1rem;
        margin-top:2rem;
    }
    
    .bigfont{
        font-size:1.8rem;
        margin-block:2rem;
        font-family:Monospace;
    }
    

    
    .fade{
        opacity:.5;
    }
    
    .movie_designrow{
        width:75vw;
        padding:2rem;
        background:#f7f7f7;
        display:flex;
        justify-content:space-between;
        align-items:center;
        font-size:1.5rem;
        color: #353535;
        text-transform:capitalize;
    }
    
    .movie_designrow h3:first-child{
        color:#595959!important;
        text-align:right!important;
        font-weight: bold!important;
    }
    
    .movie_designrow img{
        width:22rem;
        height:22rem;
        object-fit:content;
        background:#fff;
        transform:translateX(50%);
    }
    
    .nobookticket{
        font-size:2.5rem;
        padding:2rem;
        
    }
    
    .paymemt_method{
        width:80vw;
        height:50vh;
        
        border-radius:1rem;
    }
    
    .paymemt_method article{
        min-height:20vh;
        display:flex;
        justify-content:space-around;
        align-items:center;
        flex-direction:column;
    }
    
    .paymemt_method article button{
        margin:1rem;
        width:93vw;
        border-radius:.7rem;
        background: transparent;
        color:#606060;
        font-weight:600;
        border:none;
        border:.2rem solid #2fcd78;
        outline:none;
        font-size:2.3rem;
        text-transform:uppercase;
        transition:all .2s linear;
    }
    
    .paymemt_method article button:hover{
        background:#333;
        color:#fff;
        transform: scale(1);
    }
    .brandpay{
        padding:2rem;
        width:90%;
    }
    
    .paymemt_method article h3{
        font-size:2.7rem;
        padding:2rem;
        color:#fff;
        
    }
    
    .Editinfo{
       display:flex
       justify-content:space-around;
       align-items:center;
        background:#f7f7f7;
        font-size:2rem;
    }
    
    #designfile{
        width:100%;
    }
    
    
    .userprofilestyle{
        border:.4rem solid #333;
        margin-top:1rem;
    }
 
 
 .addmoneydashboard{
   width:100%;
   position:absolute;
   top:50%;
  left:0%;
   background:#f9f9f9;
   
 }
 
 
 .addmoneyform_innerbody{
   position:absolute;
   top:30%;
   width:100%;
   height:70vh;
   padding:2rem;
   background:#fdfdfd;
  box-shadow:0 0 .5rem .2rem rgba(0,0,0);
box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
 }
 
 #addmoneyform .details{
   
   display:flex;
   justify-content:space-around;
   align-items:center;
   flex-wrap: wrap;
   padding:2rem;
   font-family:Monospace;
 }
 
 
 
 #addmoneyform .details label,  #addmoneyform  .details input , #addmoneyform  .details  button , 
 
 .paymethod{
   width:100%;
   margin-top:5rem;
   flex-basis:100%;
 }
 
 
 #addmoneyform  .details input{
   font-size:2.8rem;
   padding:1rem  2rem;
   margin-top:1rem;
   outline:none;
   border:none;
   border: .1rem solid #888;
   border-radius:.8rem;
 }

 #addmoneyform  .details label{
   font-size:2.8rem;
   font-weight:500;
   color:#343434;
   margin-bottom:1rem;
 }
 
 
 
 #addmoneyform .details button {
   margin-top:5rem;
   border-radius:.7rem;
   border:none;
   outline:none;
   background:#3498db;
   padding:2rem;
   color:#fdfdfd;
 }
 
 
 #addmoneyform .details select{
   padding:2rem 0;
 }


.hideaddmoneyform , .hideeditform , .hidepasswordform  , .hide_deleteAccountform{
  font-size:4rem;
  padding-bottom:2rem;
}


.hidepasswordform  , .hide_deleteAccountform{
  
  padding-top:2rem;
  margin-bottom:2rem;
}

.hideaddmoneyform i:active , .hideeditform i:active , .hidepasswordform i:active ,

.hide_deleteAccountform i:active
{
  transform: scale(.88);
}


.paymentmethod{
  width:100%;
  display: flex;
  justify-content:space-between;
  align-items: center;
  padding-block:3rem;
  margin-top:2rem;
  
}

.paymentmethod h3{
  font-size:2rem;
}

.errormsg{
  font-size: 2.3rem ;
 flex-basis:100%;
  font-weight:500;
  margin-bottom:2rem;
}

.ermsg{
  
  color:#f30008;
}
.sucmsg{
  color:#34db98;
  font-weight:bold;
}

.logout{
  color:#fe9c00;
  
background:linear-gradient(45deg, #cc88bb 0%,#e6683c 25%,#de789b 50%,#3498db 75%,#cc88de 100%);
-webkit-background-clip:  text;
-webkit-text-fill-color: transparent;
   
  font-weight:bold;
}
   
  /* edit profile css  */
  
  #editprofile{
    width:100vw;
    min-height:100%;
    background:#fdfdfd;
    position:absolute;
    top:10%;
    padding:2rem;
    display:flex;
    justify-content:center;
    align-items:center;
    
  }
  
  #editprofile {
    padding:2rem;
    width:100vw;
    display:flex;
    justify-content:space-around;
    align-items:center;
    flex-wrap: wrap;
  }
  
  #editprofile .details {
    width:93vw;
    display:flex;
    justify-content:space-around;
    align-items:left;
    flex-basis:100%;
    flex-direction: column;
    padding-left:1rem;
    font-size:3rem;
   margin-bottom:2rem;
  }
  
  
  #editprofile .details .profile{
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:2rem;
  }
  
  #editprofile .profile img{
   box-shadow: 0 0 .2rem .1rem rgba(0,0,0,.2);
    width:18rem;
    height:18rem;
    object-fit:cover;
    border-radius:50%;
  }
 
 
 #editprofile .details h3{
   font-size:2.3rem;
   font-weight:500;
   margin-bottom:2rem;
 } 
#editprofile .details label{
  color:#656565;
  font-size:2.4rem;
  margin-bottom:1rem;
  font-weight:400;
}

#editprofile   .details input{
  
  font-size:2.7rem;
  flex-basis:100%;
  width:100%;
  background:#fcfcfc;
  color:#303030;
  padding:1.5rem;
  border-radius:.7rem;
  border:none;
  outline:none;
  margin-top:1rem;
  border:.2rem solid #555;
}






.editprofilepage label  , .editpassword_link{
  text-decoration: underline;
}




.editpassword_link {
  color:#343434!important;
  font-weight:bold!important;
  margin-top:2rem;
  
  background:rgba(220, 220 , 220, .5);

background:linear-gradient(45deg, #cc88bb 10%,#e6683c 25%,#de789b 50%,#3498db 75%,#cc88de 100%);
-webkit-background-clip:  text;
-webkit-text-fill-color: transparent;
    
    font-weight:bold;
  
  
}

.passwordchange_dashboard , .delete_account_dashboard{
  position:absolute;
  top:12%;
  left:0;
  width:100vw;
  height:100vh;
  background:#fbfbfb;
}

.passwordchange_dashboard main , .delete_account_dashboard main{
  margin-top:5rem;
   padding:2rem;
   
}

.passwordchange_dashboard form , .delete_account_dashboard form{
 margin-top:5rem;
}

.passwordchange_dashboard  .details ,
.delete_account_dashboard .details{
  margin-bottom:2rem;
   padding:1rem;
}


.checkvalidpass  , .check_delete_valid{
  margin-top:5rem;
}



.checkvalidpass button {
  

  background:rgba(220, 220 , 220, .5);
box-shadow: 0 0 .2rem .1rem rgba(0,0,0,.2);
 
background:linear-gradient(45deg, #cc88bb 0%,#e6683c 25%,#de789b 50%,#3498db 75%,#cc88de 100%);
-webkit-background-clip:  text;
-webkit-text-fill-color: transparent;
    
    font-weight:bold;
  
}
.checkvalidpass button , .check_delete_valid button {
  padding:2rem;
  border:none;
  outline:none;
  font-size:2.8rem;
  text-transform:uppercase;
 
  
}


.check_delete_valid button{
  color:#656565;
}



.checkvalidpass button:active , .check_delete_valid button:active{
  transform:scale(.77);
}

#delete_account {
  margin-top:10rem;
  padding:2rem;
  border-radius:.8rem;
  border:none;
  outline:none;
  color:#232323;
  text-transform:uppercase;
  background:#ce4c3c;
  color:#f9f9f9;
}

#delete_account:active{
  transform: scale(.88);
}
  
     </style>
  
    
        <title></title>
        

    </head>
    <body>
      
      
      <div class="preloader"> 
    
      </div>
   
     <div class="frontend">
        <main>
            
            <header>
               <i class="fas fa-bars"></i>
             
             <div class="brand_logo" id="brandid"> 
             <span>CinmaTicket</span>
             </div>
                <nav>
       <a class="profile_us">Profile</a>
    <a href="#" class="ticketbb"> My ticket</a>
        <a href="logout.php" class="logout">logout </a>      
                </nav>
               
      <article class="mobile-nav">
               
       <a class="home_us  active">Home</a>
       <a class="profile_us">Profile</a>
 <a href="#" class="ticketbb" > My ticket</a>
          
          <a href="logout.php" class="logout">logout </a>
                  
                </article>

            </header>
        
     
     <div class="name">Welcome- 
     <?php 
     $seluser = mysqli_query($con, "select * from users where userid = '{$_SESSION['id']}' ");
     
     $userow = mysqli_num_rows($seluser);
  
  $userfetchdata =
  mysqli_fetch_array($seluser) ;
  
  
 echo  ucwords($userfetchdata['fullname']);
   
     ?></div>
   
    <div class="search_movie">
        <form>
            <article class="details">
    <input type="search" placeholder="search movie" class="search">
      </article>
        </form>
        
        </div>
     
     <a href="#"> <div class="gotop">
       <i class = "fas fa-arrow-up"></i>
     </div>
     </a>
        
         <div class="movie_container">
       
  
 </div>
        
        </main>
   
   <div class="ticket_room">
          
<article class="navbar">Ticket</article>
      </div>  
    
      

   <div class="userdashboard">
     
  
       <div class="dashboard">
         

   
          <div class="userInfo">
  
 
           </div>
 
     <div class="paymemt_method">
       <article>
               
               
               
<button class="brandpay  moneybtn">Add Money</button>
        
         </article>
     </div>
      
  </div>

<div id="editprofile">
  
  <div class="editform">
 
 <div class="hideeditform">
   
  <i class="fas fa-arrow-left"></i>
 </div>
   
     <div class="details"> 
 
 <?php 
 
 $sel = mysqli_query($con, "select * from users where userid = '{$_SESSION['id']}' ");
 
 
 $row = mysqli_fetch_array($sel);
 ?>
 
 <br>
 <h3 id="updatephoto_error"> this is smaple error</h3>
   <div class="profile  editphoto">
    <img src="profile/<?php echo $row['profile']; ?>" class="resimg"> 
    <form id ="editprofileform">
    <input type="file" id="file" name="editprofile" hidden="" accept="images/*"  >
     </form>
   </div>
   
   
    </div> 
     
      <div class="details">
     <form id="upadate_usernameform">
   
   <h3 class="editerror" id="updateusername_error">this is a default error message</h3>
        <label>Edit Fullname :</label>
     <input type="text" name="updateusername" id="updateusername" value=" <?php echo $row['fullname']; ?>" >
   

   
     </form>
      </div>
    
      <div class="details">
     <form id="updateemailform">
       
      <h3 class="editerror" id="updateemail_error">this is a default error message</h3>
      
        <label>Edit email id :</label>
     <input type="email" name="updateemail"  id="updateemail" value="<?php  echo $row['email']; ?>">
    
     </form>
     
      </div>
    
    <article class="details ">
      <label class="editpassword_link"> Change password</label>
    </article>
  
    <article class="details ">
      <button id="delete_account"> delete my account permanently </button>
    </article>
    

      
  </div>
   <article class="delete_account_dashboard">
 
 <main>
 <div class="hide_deleteAccountform">
   
  <i class="fas fa-arrow-left"></i>
 </div>
     
      <form id="delete_accountform">
     
      <div class="details">
      <h3 class="deleteemail_error" id="deleteemail_error">this is a default error message</h3>
        <label>Enter your email id:</label>
<input type="email" name="delete_email"  id="delete_checkemail" >
     
      </div>
    
      <div class="details">
        
        <label>why are you deleting
        your account ? (optional) </label>
     <input type="text" name="delete_resons"  id="delete_resons" >
    
      </div>
     
     
      <div class="details">
      <h3 class="delete_error_password" id="delete_password_error">this is a default error message</h3>
        <label>Enter your password:</label>
     <input type="text" name="delete_password"  id="delete_checkpassword" >
    
      </div>
     
      <div class="details check_delete_valid">
<button id="final_deletebtn">delete</button>
      </div>
     </form>
   </main>
   
     
   </article>
  
   <article class="passwordchange_dashboard">
 
 <main>
 <div class="hidepasswordform">
   
  <i class="fas fa-arrow-left"></i>
 </div>
     
      <form id="updatepasswordform">
     
      <div class="details">
      <h3 class="edituserpassworderror" id="updatepassword_error">this is a default error message</h3>
        <label>Enter your password:</label>
     <input type="text" name="checkuserpassword"  id="checkpass" >
     
      </div>
    
      <div class="details">
      <h3 class="editerror_newpassword" id="update_newpassword_error">this is a default error message</h3>
        <label>Enter new password:</label>
     <input type="text" name="update_newpassword"  id="updatepass" >
    
      </div>
     
      <div class="details checkvalidpass">
    <button>update</button>
      </div>
     </form>
   </main>
   
     
   </article>
</div>


 <div class="addmoneydashboard">
   
   <div class="addmoneyform_innerbody">
  
   <div class="hideaddmoneyform">
     <i class=" fas fa-arrow-left"></i>
   </div>
   
     <form id="addmoneyform">
       
       <div class="details">
  <h3 class="errormsg"> </h3>
         
         
         <label> Enter Amount</label>
  <input type= "number" name="useramt" id="amountinput">
  
  <div class="paymentmethod">
 
 <div>
 <label> Payment  Method </label>
</div> 

<div>
  
<select  id="pmentselect"   name="paymentorder">
<option value=" " selected="">select payment method</option>
<option value="google pay" >google pay</option>
<option value="phone pay">phone pay</option>
<option value="amazon pay">amazon pay</option>
<option value="paytm">paytm</option>
</select>

</div>

  </div>
  

<button class="addmoneybtn"> Add</button>
       </div>
    
    
     </form>
   </div>
   
 
 
 
 
 </div>
  </div>
 
 </div>
<script>
  

     //mobile nav 
   
   let navigation_active =  document.querySelectorAll(".mobile-nav a");
   
   
  let mobile_menu = $(".mobile-nav");
  
  
navigation_active.forEach(btn=>{
  
  btn.addEventListener("click", ()=>{
  
  document.querySelector(".active").classList.remove("active");
  btn.classList.add("active"); 
  });
  

});

   


//errormsg
  let errormsg = document.querySelector(".errormsg");
  

//addmoneydashboard 
let addmoneydashboard = $(".addmoneydashboard");

addmoneydashboard.hide();
    
//hideaddmoneyform
let hideaddmoneyform = $(".hideaddmoneyform i")
  let errormsghide = $(".errormsg");
  
hideaddmoneyform.click(()=>{
  addmoneydashboard.hide()
errormsghide.hide();
  
  
})


//brandbaymoneybtn

let brandbaymoneybtn  = $(".moneybtn");

brandbaymoneybtn.click(()=>{
  addmoneydashboard.show();
})

   
 //admoney validation 
 
 let validamout = false; 
 let validmethod = false; 


let useramt = document.querySelector("#amountinput");



 
 useramt.addEventListener("blur", (e)=>{
 
  if(useramt.value =="") {
    validamout =  false;
    errormsg.innerHTML = "please enter the amount";
    errormsg.classList.add("ermsg")
    errormsghide.show();
  }else{
    validamout = true;
    errormsg.innerHTML = ' ';
  }
  
 } 
 
);  



let pmentselect = document.querySelector("#pmentselect");


  pmentselect.addEventListener("change" , (e)=>{
  
  
  if(pmentselect.value == " "){
    validmethod = false;
    errormsg.innerHTML = "Please enter payment method";
    errormsghide.show();
  
  }else{
    validmethod = true;
    errormsg.innerHTML = "";
  }
 
 
})
  
  
  
   //addmoneyform 
   let addmoneybtn = document.querySelector(".addmoneybtn");
 
  let addmoneyform = document.querySelector("#addmoneyform");
   
  
  
 addmoneybtn.addEventListener("click", (e)=>{

e.preventDefault();

 if(validamout && validmethod){
  

  let data = new FormData(addmoneyform)
  ;
  
  fetch("addmoney.php?id="+<?php echo $_SESSION['id']?>, {
    method : "post",
    body: data,
  }).then(resp=>resp.text()).then((res)=>{
    errormsg.innerHTML = res;
   addmoneyform.reset();
   validamout = false;
   validmethod = false;
  
  
   
  }).catch(er=>alert(er));
  
  }
  
  else if(validamout == false){
 errormsghide.show();
 
   errormsg.innerHTML = "**please add amount";
   errormsg.classList.add("ermsg");
   
  }
  else if (validmethod == false){
 
 errormsghide.show();
 
   errormsg.innerHTML = "**please select payment method";
   errormsg.classList.add("ermsg");
   
 }else{
   
   errormsghide.show();
   errormsg.innerHTML = "**please fill the blank";
   errormsg.classList.add("ermsg");
   
 }

 }); 
  

            const baars = document.querySelector(".fa-bars");
            
            
     
     const mobnav = document.querySelector(".mobile-nav a");
     
     const headernav = document.querySelector("header nav");
    
     const mobilenav = document.querySelector(".mobile-nav");
    
   
    
            baars.onclick = function(){
         
    
 
 headernav.classList.toggle("slidernavbar");
    mobilenav.classList.toggle("slida");
   
 
          }
         
     
       
     let preloader = document.querySelector(".preloader");
     
     window.onload = function(){
         preloader.style.display="none";
     }
   
    
   $(document).ready(function(){
       
 let ticket_room = $(".ticket_room");
 
       let ticket = $(".ticketbb");
      
       let userdashboard = $(".userdashboard");
  let gotop = $(".gotop");
  
  let home_us  = $(".home_us");
  
  home_us.click(()=>{
    movie_container.show();
    gotop.show();
     userdashboard.hide();
     ticket_room.hide();
  })
  
  
let movie_container = $(".movie_container");
       userdashboard.hide();
       
       
       let profile_us = $(".profile_us");
       
       profile_us.click(function(){
          userdashboard.show();
          ticket_room.hide();
          movie_container.hide();
          gotop.hide();
       })

       
      
       
     ticket_room.hide();   
      
        ticket.click(function(){
            ticket_room.show();
            gotop.show();
            userdashboard.hide();
            movie_container.hide();
        });
   });   


   
  var body = document.querySelector(".movie_container");
           
         const btn = document.createElement("input");
         
         btn.classList.add("btnstyle")
         btn.setAttribute("type", "button")
       btn.setAttribute("value", "submit")  
       btn.setAttribute("onclick", "getmovies()")  
      
      body.appendChild(btn)
    
    
const APIURL =
    "https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=04c35731a5ee918f014970082a0088b1&page=1";
const IMGPATH = "https://image.tmdb.org/t/p/w1280";
const SEARCHAPI =
    "https://api.themoviedb.org/3/search/movie?&api_key=04c35731a5ee918f014970082a0088b1&query=";
    
 
    
    const  getmovies = async(url) =>{
    
    const response = await fetch(url);
    const  data = await response.json();
    showmovies(data) ;
     
    }
      getmovies(APIURL);
   
   
   const showmovies = async (data)=>{
      body.innerHTML = '';
      
      data.results.forEach( (result)=>{
          
       const imagePath = result.poster_path === null ? "imagemissing.png" : IMGPATH + result.poster_path;

     
          const booking_window = document.createElement("div");
          
          booking_window.classList.add("card");
        
      booking_window.innerHTML=`
      
   <div class="movie_poster">
                    <img src= ${imagePath}>
               
                </div>
                <div class="header">
         <h3>${result.original_title}</h3>
               
                </div>
 <div class="title">
 <p>${result.overview}</p></div>
            
    
      
      `;
      
      body.appendChild(booking_window);
     
            
          const book_seat = document.createElement("div");
          book_seat.classList.add("book_seat");
          
          booking_window.appendChild(book_seat);
   
      
          
          const form = document.createElement("form");
         form.setAttribute("method", "post")
 form.setAttribute("class", "dynamicform")
 form.setAttribute("data-te", "dya")
         form.setAttribute("id", "form1")
    form.setAttribute("action", "tt.php");
   //form.setAttribute("onsubmit", "return false");
   form.style.color="#fff" 
          form.classList.add("form");
          
    book_seat.appendChild(form);
         
  const hiddenradio = document.createElement("input");
  hiddenradio.setAttribute("type","text");
  hiddenradio.setAttribute("value",`${result.original_title}`);
  hiddenradio.setAttribute("name","movie");
  hiddenradio.setAttribute("readonly","");
  hiddenradio.classList.add("inputwidth");
   form.appendChild(hiddenradio)   
   
    
 /* const time = document.createElement("input");
  time.setAttribute("type","text");
  time.setAttribute("name","time");
  time.setAttribute("value","10:30 A.M");
  time.classList.add("inputwidth");
   form.appendChild(time);  
   */
   
  const time = document.createElement("input");
  time.setAttribute("type","text");
  time.setAttribute("name","time");
  time.setAttribute("value","10:30 A.M");
  time.classList.add("inputwidth");
   form.appendChild(time);  
   
  
 
 
  const date = document.createElement("input");
  date.setAttribute("type","date");
  date.setAttribute("value","");
  date.setAttribute("name","showdate");
  date.setAttribute("require"," ");
  date.classList.add("inputwidth", "date");
  
   form.appendChild(date)   
   
      
        
        for(i=1; i<=6; i++){
         
          
            const resp_radio = document.createElement("div");
        
          resp_radio.classList.add("resp_radio" , "wow");
           
    let seatcounter = i-7;  
        
          const radio = document.createElement("input");
          radio.setAttribute("type","radio"); 
      radio.setAttribute("name", "seatno");
      radio.setAttribute("onclick", "seatVal()");
      radio.setAttribute("value",`SG${seatcounter}`)
      
  
          radio.setAttribute("data-sid",`G${seatcounter}`);
         
         radio.classList.add("seatno");
         
const label = document.createElement("h3");
        label.classList.add("h3");
         label.innerHTML=`SG${seatcounter}` 
          
    book_seat.appendChild(resp_radio);
      form.appendChild(radio);   
         form.appendChild(label)
    


          }
 


  
  const box = document.createElement("div");
  
            
            var sellist = document.createElement("select");
           sellist.setAttribute("name","sel1");
           sellist.setAttribute("class","sel1");
        sellist.setAttribute("onchange","list(this.value)");
         
         sellist.classList.add("droplist", "inputwidth") 
          var opt = document.createElement("option");
          opt.setAttribute("value", "");
          opt.innerHTML = "choose Theater"
        
          const opt2 = document.createElement("option");
          opt2.setAttribute("value", "Pimpri");
          opt2.innerHTML = "Pimpri"
        
          const opt3 = document.createElement("option");
          opt3.setAttribute("value", "Hinjawadi");
          opt3.innerHTML = "Hinjawadi"
          
    const sellist2 = document.createElement("select");
     sellist2.setAttribute("class","sel2");
     sellist2.setAttribute("name","sel2");
    sellist2.classList.add("inputwidth" ,"droplist")  
       const sel2op = document.createElement("option");
    
      
        
          
            box.classList.add("wrapper");
            form.appendChild(sellist);
            form.appendChild(sellist2);
           sellist.appendChild(opt);
           sellist.appendChild(opt2);
           sellist.appendChild(opt3);
        sellist2.appendChild(sel2op);
  
  
  const movielabel = document.createElement("h3");
movielabel.innerHTML ="Movie Ticket Price :per-seat  100 Rs";
movielabel.classList.add("bigfont");
  form.appendChild(movielabel);
 
 
 const moviebooking_charge = document.createElement("h2");
 moviebooking_charge.classList.add("bigfont");
 
 moviebooking_charge.innerHTML= "Booking Charge : 20 Rs";
 
 form.appendChild(moviebooking_charge);
  
   const price = document.createElement("input");
   price.setAttribute("type", "text")
  price.setAttribute("name", "price")
  price.setAttribute("value", "120 Rs");
  price.setAttribute("readonly", "");
  price.setAttribute("placeholder", " Movie price : 100Rs");
  price.setAttribute("class", "inputwidth");
   
   form.appendChild(price);
   
   const bookingid  = document.createElement("input");
   bookingid.setAttribute("type", "hidden");
   bookingid.setAttribute("name", "userperid");
   bookingid.setAttribute("value", "<?php echo $_SESSION['id']; ?>");
   
   bookingid.classList.add("inputwidth")   
  
   form.appendChild(bookingid)
   
   
   const paymethod = document.createElement("select");
   paymethod.setAttribute("name", "paymd");
   paymethod.setAttribute("class", "paymd inputwidth droplist");
    form.appendChild(paymethod);
   
   const defaultpay = document.createElement("option");
   defaultpay.setAttribute("value", "credit");
   defaultpay.innerHTML = "credit"
  paymethod.appendChild(defaultpay);
   
   const payformula = document.createElement("option");
   
   payformula.value="",
   payformula.innerHTML = "payment method"
   
   paymethod.appendChild(payformula);
   
   const payformula2 = document.createElement("option");
   payformula2.value ="Google Pay";
   payformula2.innerHTML ="Google Pay";
   
   paymethod.appendChild(payformula2)
   
   const payformula3 = document.createElement("option");
   
   payformula3.value ="Phone Pay";
   payformula3.innerHTML ="Phone Pay";
   
   paymethod.appendChild(payformula3)
   
   
   const payformula4 = document.createElement("option");
   
   payformula4.value="Paytm";
   payformula4.innerHTML ="Paytm";
   
   paymethod.appendChild(payformula4);
   
   
   
   const payformula5  = document.createElement("option");
   payformula5.innerHTML ="Amazon Pay";
   payformula5.value ="Amazon Pay";
   
   paymethod.appendChild(payformula5);
   
    const submitbtn = document.createElement("input");
    submitbtn.setAttribute("type","button");
    submitbtn.setAttribute("name","sub");
   submitbtn.setAttribute("value","Book Ticket");
   submitbtn.setAttribute("class","Bbm");
  // submitbtn.setAttribute("onclick","valform()");

    submitbtn.classList.add("Bookyourticket")
    
    form.appendChild(submitbtn);   
     
      })    
      

  


   }
      
      
    
      $(document).on("change", ".sel1", function(){
          let data = $(this).val();
    
          fetch("select.php?id="+data).then(resp=>resp.text()).then(function(res){
         $(".sel2").html(res);  
          }).catch(er=>alert(er));
     
          
      });
      
      

     
   /*const valform  = ()=>{
      
    let form = document.querySelectorAll(".dynamicform");
        
        form.forEach((res)=>{
            
 let datas = new URLSearchParams(new FormData(form));
    
 alert(datas);
        })
        
    
        
    }
  */
  
  $(document).on('dblclick', '.dynamicform' , function(){
  
  
  var curObj = $(this),queryString = curObj.serialize();
 
 
 
       fetch("requestbookticket.php", {
            method: "post",
            body: queryString,
            headers: { "Content-Type":"application/x-www-form-urlencoded",
            },
    }).then(resp=>resp.text()).then( (res)=>{
      
      let response = res;
      
      if(response == 1){
swal({
  title: "Ticket has  booked successfully ",
  text: "Enjoy the show",
  type: "success",
  button: "ok"
});

 }
     
     else if(response == 2){
swal({
  title: "This seat has booked already ",
  text: "Check another seat",
  type: "warning",
  button: "ok"
});

 }
   
     else if(response == 3){
swal({
  title: "Invalid date selected",
  text: "Please select valid date",
  type: "info",
  button: "ok"
});

 }
   
     else if(response == 404){
swal({
  title: "Please fill the blank",
  text: "All fields are required",
  type: "info",
  button: "ok"
});

 }
  
     else if(response == 00){
swal({
  title: "Sorry insufficient balance please add money",
  text: "Add money and try again..",
  type: "info",
  button: "ok"
});

 }
   
     else if(response == "failed"){
swal({
  title: "Ticket have't booked",
  text: "Something went wrong ..",
  type: "error",
  button: "ok"
});

 }else{
        alert(response);
      }
      
      
      
    }).catch(er=>alert(er));
       

});
    
       
document.querySelector(".search").addEventListener(
    "keyup",
    function (event) {
        
    
        
        if (event.target.value.trim() != "") {
            getmovies(SEARCHAPI + event.target.value.trim())
            
            
            
        } else {
            getmovies(APIURL);
        }
       
 
    
    }
)
    
    
        
  
    
    setInterval ( function(){
        

     fetch("respons_ticket.php?user="+<?php echo $_SESSION['id'];  ?> ).then(resp=>resp.text()).then(
     (res)=>{
         
         
         $(".ticket_room").html(res);}
    ).catch(er=>console.log(er));
  
    },1000);
    
    
     setInterval (()=>{
     
     fetch('userdashboard.php?user='+<?php echo $_SESSION['id']; ?> ).then(resp=>resp.text()).then((res)=>{
          $(".userInfo").html(res);
     })
     }, 100) 
  
  
   let editform = $("#editprofile");
  editform.hide();
  
 $(document).on("click", ".editprofilepage" , ()=>{
 
 editform.show();
 
 
 });
 
 let backbtn = $(".hideeditform i");
 
 backbtn.click(()=>{
   editform.hide();
  
   updateusername_error.hide();
   updateemail_error.hide();
   updatephoto_error.hide();
 })
 
 
 let editphoto = document.querySelector(".editphoto  img");
 
 
 let updatephoto_error = $("#updatephoto_error");
 
 
 updatephoto_error.hide();
 
 let updateimg = document.querySelector("#file"); 
 
 
 editphoto.onclick = ()=>{
   updateimg.click();
  
  updateimg.addEventListener("change", (e)=>{
    
const getfile = document.querySelector("#file");

   let prevprofile = document.querySelector(".resimg"); 
 
 prevprofile.src = URL.createObjectURL(e.target.files[0]);
    
    
const fileform = new FormData();
fileform.append('image', getfile.files[0] );


fetch("updateprofile.php?userid="+<?php echo $_SESSION['id']  ?> ,{
    method: "post",
    body: fileform
}).then(resp=>resp.text()).then(
  (res)=>{
    updatephoto_error.show();
    updatephoto_error.html(res);
  }).catch(er=>console.log(er));


  });
    
  
  }
  
  
  
/*  updateimg.onchange = (e)=>{
 
  
   let prevprofile = document.querySelector(".editphoto img"); 
 
 prevprofile.src = URL.createObjectURL(e.target.files[0]);
    
 
   }
    */
  
  
  let  updateusername = document.querySelector("#updateusername");
  
  
  let validusername = false;
  
  
  let  updateusername_error = $("#updateusername_error");
 
 updateusername_error.hide();
 
  updateusername.addEventListener("keyup", (e)=>{
  
let   editedusername = updateusername.value.trim(); 
 
 
 let validation_username =  /^[A-Z a-z]{3,29}$/;



if(validation_username.test(editedusername) ){
   updateusername_error.hide();
  
   validusername = true;
   }else if(editedusername == ""){
     
     updateusername_error.show();
   updateusername_error.addClass("ermsg");
   updateusername_error.html("**please fill the blank");
     validusername = false;
   
     
   }
   
   else if(editedusername.length < 3){
     
     updateusername_error.show();
   updateusername_error.addClass("ermsg");
   updateusername_error.html("**please Add min 3 length letter blank");
     validusername = false;
   }
   else{
     
     updateusername_error.show();
   updateusername_error.addClass("ermsg");
   updateusername_error.removeClass("sucmsg");
   updateusername_error.html("**invalid input!");
     validusername = false;
   }
   

  });
  
  
  updateusername.addEventListener("blur", (e)=>{
  
  
  if(validusername) {
 
   updateusername_error.hide();
 
 
   let  upadate_usernameform = document.querySelector("#upadate_usernameform");
   
   let username_data = new FormData(upadate_usernameform);
   
   fetch("updateusername.php?id=" +<?php echo $_SESSION['id']; ?>,{
     method: "post",
     body: username_data
   }).then(resp=>resp.text()).then(
    
    (res)=>{
      updateusername_error.show();
      
      updateusername_error.html(res);
      updateusername_error.addClass("sucmsg");
    }
     
     ).catch(er=>alert(er));
  }

  });



let validemail = false;


let updateemail = document.querySelector("#updateemail");

let updateemail_error = $("#updateemail_error");

updateemail_error.hide();

updateemail.addEventListener("keyup", (e)=>{
  
  
  let emailval = updateemail.value.trim();
  
let  emailfilter = /^[a-zA-Z0-9.!#$%&'*+=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;  
  
  if(emailfilter.test(emailval)){
   validemail = true; 
   updateemail_error.hide();
   
  }else if(emailval == " "){
    validemail = false;
    updateemail_error.show();
    
    updateemail_error.html("*please fill the blank");
    
updateemail_error.addClass("ermsg");
 
 
  }else{
    validemail = false;
    updateemail_error.show();
    
    updateemail_error.html("*please enter a valid email id");
    
updateemail_error.addClass("ermsg");
 
  }
  
})



updateemail.addEventListener("blur", (e)=>{
 
 if(validemail){


let emailform = document.querySelector("#updateemailform");

let email_data = new FormData(emailform);
   
   fetch("updateemail.php?id="+<?php echo $_SESSION['id'];?>, {
     method: "post",
     body: email_data
   }).then(resp=> resp.text()).then(
  
  
  (res)=>{
   updateemail_error.show();
   
   updateemail_error.html(res);
   }  )
.catch(er=>alert(er));

 }
 
});





  let checkvalidpassbtn = document.querySelector(".checkvalidpass button");
  
  let updatepassword_error = $("#updatepassword_error");
 
 
  let update_newpassword_error = $("#update_newpassword_error");
  
  updatepassword_error.hide();
  update_newpassword_error.hide();
  
  
  
//udpatepassword validation 
let checkpass = document.querySelector("#checkpass");

let validuserpassword = false;
let validnewpassword = false;


checkpass.addEventListener("keyup", ()=>{
 
 
 let checkpassval = checkpass.value.trim();
 
  if(checkpassval.length  > 0  && checkpassval != ""){
    
    updatepassword_error.hide();
    validuserpassword = true;
  }else{
    
    validuserpassword = false;
    updatepassword_error.show();
    updatepassword_error.html("**please fill the blank");
    
    updatepassword_error.addClass("ermsg");
  }
})



//checknewpassword

let checknewpassword = document.querySelector("#updatepass");


checknewpassword.addEventListener("keyup" , ()=>{
  
 /* let pass_regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
  */ 
   
let pass_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
   
   let updatepassval = checknewpassword.value.trim();
   
   if(pass_regex.test(updatepassval)){
     validnewpassword = true;
     update_newpassword_error.hide();
   }else {
     validnewpassword = false;
     update_newpassword_error.show();
  update_newpassword_error.html(" Enter minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:");
  update_newpassword_error.addClass("ermsg");
  
   }
   
   
   
});
  
   checkvalidpassbtn.addEventListener("click", (e)=>{
   
    e.preventDefault();
    if(validuserpassword && validnewpassword){
   
   let updatepassform = document.querySelector("#updatepasswordform");
   
   let sendupdataion = new FormData(updatepassform);
   
  fetch("updatepass.php?id="+<?php echo $_SESSION['id'];?>, {
    method: "post",
    body: sendupdataion
    
  }).then(resp=>resp.text()).then((res)=>{
    updatepassword_error.show();
    updatepassword_error.html(res);
    
    
  }).catch(er=>alert(er));
  

    }else if(validuserpassword != true)
    {
      updatepassword_error.show();
      updatepassword_error.html("**please enter your password")
  
  updatepassword_error.addClass("ermsg");  
      
    }else{
      
      updatepassword_error.show();
      updatepassword_error.html("**All fields are required")
  
  updatepassword_error.addClass("ermsg");  
  
    }

  });
  
  //passwordchange_dashboard 
  
  let passwordchange_dashboard = $(".passwordchange_dashboard");
  
  passwordchange_dashboard.hide();
 
 
 let hidepasswordform = $(".hidepasswordform i");
 
 hidepasswordform.click(()=>{
   passwordchange_dashboard.hide();
   updatepassword_error.hide();
   update_newpassword_error.hide();
 })
 
 
  //editpassword_link 
  
  let editpassword_link  = $(".editpassword_link");
  
  editpassword_link.click(()=>{
   passwordchange_dashboard.show();
  });
  
//delete account Form


let deleteemail_error = $("#deleteemail_error");

deleteemail_error.hide();


let delete_account_dashboard = $(".delete_account_dashboard");


let deleteacountBtn  = $("#delete_account");






delete_account_dashboard.hide();
 deleteacountBtn.click(()=>{
  delete_account_dashboard.show();
})


let backwindow = $(".hide_deleteAccountform  i");

backwindow.click(()=>{
  delete_account_dashboard.hide();
})


let final_deletebtn = $("#final_deletebtn");


//delete check email 

let delete_checkemail = $("#delete_checkemail");


let valid_deleteemail = false;


delete_checkemail.on('keyup' , ()=>{

let  delete_checkemailval =  delete_checkemail.val().trim();

if(delete_checkemailval.length < 1){
  valid_deleteemail = false;
  deleteemail_error.show();
  deleteemail_error.html("**please fill the blank");
  
  deleteemail_error.addClass("ermsg");
}else{
  valid_deleteemail = true;
  deleteemail_error.hide();
}
});

// check delete passoword

let delete_password_error =  $("#delete_password_error");


delete_password_error.hide();


let  valid_deletepassword = false;

let delete_checkpassword = $("#delete_checkpassword");


delete_checkpassword.on('keyup' , ()=>{
  
  let delete_checkpasswordval = delete_checkpassword.val().trim();
  
  
if(delete_checkpasswordval.length < 1){
  valid_deletepassword = false;

  delete_password_error.show();

  delete_password_error.html(" please fill the blank");
  delete_password_error.addClass("ermsg");
  
 
  }else{
  
  valid_deletepassword = true; 
  delete_password_error.hide();
  }
});


final_deletebtn.click((e)=>{
  
  e.preventDefault();
  
  if(valid_deleteemail && valid_deletepassword){
    deleteemail_error.hide();
    
    let delete_accountform  = document.querySelector("#delete_accountform");
    
    let deleteformData = new FormData(delete_accountform);
    
    
  fetch("deleteaccount_request.php?id="+<?php echo $_SESSION['id']; ?>, 
  {
    method: "post",
    body: deleteformData
  }
  
  
  ).then(resp=>resp.text()).then(
    (res)=>{
      deleteemail_error.show();
      deleteemail_error.html(res);
      
      if(res == 1){
        window.location ="loginpage.php";
      }
    }).catch(er=>alert(er));
  
  }else{
    deleteemail_error.show();
    deleteemail_error.html("** All fields are required!");
    
 deleteemail_error.addClass("ermsg");
  }
});


  
  
 
  
</script>

 </body>
</html>