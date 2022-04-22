var buttonn = document.getElementById("registerbuttoni");

var fnameMsg =document.getElementById("nameerror");
var surnameMsg = document.getElementById("surnameerror");
var userMsg = document.getElementById("usernameerror");
var emailMsg = document.getElementById("emailerror");
var pswMsg = document.getElementById("passworderror");
var roleMsg = document.getElementById("roleerror");


var userRegex = /^[A-Z]\w+[._-]?\w+/;
var fnameRegex = /^[A-Z][a-z]{1,}/;
var surnameRegex = /^[A-Z][a-z]{1,}/;
var emailRegex = /[a-z]\w+@[a-z]+[-]?[a-z]\.[a-z]{2,3}/;
var pswRegex = /^[A-Z]\w+[a-z]\d{3}/;
var roleRegex = /user|admin/;

buttonn.addEventListener("click", function(event){
  var user = document.getElementById("usernameinput").value;
  var surname = document.getElementById("surnameinput").value;
  var fname = document.getElementById("nameinput").value;
  var email = document.getElementById("emailinput").value;
  var psw = document.getElementById("passwordinput").value;
  var role = document.getElementById("roleinput").value;


  

  if(user == "" || user == null){
    userMsg.innerText="Please fill the username field!";
    event.preventDefault();
  }else{
    if(userRegex.test(user)){
        userMsg.innerText="";
    }else{
        userMsg.innerText="* Please fill the username field correctly (name123)";
        event.preventDefault();
    }

}

  if(fname == "" || fname == null){
    fnameMsg.innerText="Please fill the first name field!";
    event.preventDefault();
  }else{
    if(fnameRegex.test(fname)){
        fnameMsg.innerText="";
    }else{
        fnameMsg.innerText="* Name should start with a capital letter";
        event.preventDefault();
    }

}

if(surname == "" || surname == null){
  surnameMsg.innerText="Please fill the surname field!";
  event.preventDefault();
}else{
  if(surnameRegex.test(surname)){
      surnameMsg.innerText="";
  }else{
      surnameMsg.innerText="* Surname should start with a capital letter";
      event.preventDefault();
  }

}

if(email == "" || email == null){
  emailMsg.innerText="Please fill the email field!";
  event.preventDefault();
}else{
  if(emailRegex.test(email)){
      emailMsg.innerText="";
  }else{
      emailMsg.innerText="* Email must be standard";
      event.preventDefault();
  }

}

if(psw == "" || psw == null){
  pswMsg.innerText="Please fill the password field!";
  event.preventDefault();
}else{
  if(pswRegex.test(psw)){
      pswMsg.innerText="";
  }else{
      pswMsg.innerText="* Password should start with a capital and end with 3 numbers";
      event.preventDefault();
  }

}

if(role == "" || role == null){
  roleMsg.innerText="Please fill the password field!";
  event.preventDefault();
}else{
  if(roleRegex.test(role)){
      roleMsg.innerText="";
  }else{
      roleMsg.innerText="* Role should be user or admin";
      event.preventDefault();
  }

}




});