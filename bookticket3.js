    
   
    
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
                
 errorpass.innerHTML =" Atleast 1 lowercase letter 1 uppercase letter number 1 symbol enter "
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

    
       
         
      }else if(check === "emailerror"){
         
    result.innerHTML=res;
    
swal({
  title: "Please fill the blank",
  text: res,
  type: "warn",
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
     
  