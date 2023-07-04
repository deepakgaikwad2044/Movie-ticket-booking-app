
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
  
 
  
    let btn = document.querySelector(".btn");
        
let email = document.querySelector(".email");

let formsubmitMsg = document.querySelector(".formsubmitMsg");

let password = document.querySelector(".password");

let notemptyemail = false;
let notemptypassword = false;

form = document.querySelector("#loginup");
   btn.onclick = function(e){
       let emailval = email.value.trim();
       let passwordval = password.value.trim();
     if( (emailval!='') && (passwordval !='')){
       
const data = new URLSearchParams(new FormData(form));   
       
    fetch("validuser.php" ,{
     method: 'post',
     body: data,
     headers: { "Content-Type":"application/x-www-form-urlencoded", },
    }).then(resp=>resp.text())
    .then(
function(res){
     let check = res;
     
      if(check=="done"){
         window.location="home.php";
      }else{
         
    formsubmitMsg.innerHTML=res;
      }    
        
  }  ).catch(er=>alert(er));
   
    
       }else{
     formsubmitMsg.innerHTML = "**please fill all fields";
     }
     e.preventDefault();
    
       
}

    
   