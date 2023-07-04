 
 
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
  
  
  let home_us  = $(".home_us");
  
  home_us.click(()=>{
    movie_container.show();
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
       })

       
      
       
     ticket_room.hide();   
      
        ticket.click(function(){
            ticket_room.show();
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

