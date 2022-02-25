var button = document.getElementById("loginbuttoni");

var usernameMsg = document.getElementById("usernameerrorlogin");
var passwordMsg = document.getElementById("passworderrorlogin");
var usernameRegex = /^[A-Z]\w+[._-]?\w+/;
var passwordRegex = /^[A-Z]\w+[a-z]\d{3}/;

button.addEventListener("click", function(event){
    var username = document.getElementById("usernameinputlogin").value;
    var password = document.getElementById("passwordinputlogin").value;
  
    if(username == "" || username == null){
      usernameMsg.innerText="Please fill the username field!";
      event.preventDefault();
    }else{
      if(usernameRegex.test(username)){
          usernameMsg.innerText="";
      }else{
          usernameMsg.innerText="* Username must be example.example";
          event.preventDefault();
      }
  
  }
  
    if (password == "" || password == null) {
      passwordMsg.innerText = "* Please fill the password field";
      event.preventDefault();
    } else {
      if (passwordRegex.test(password)) {
        passwordMsg.innerText = "";
      } else {
        passwordMsg.innerText =
          "* Password should start with a capital and end with 3 numbers";
        event.preventDefault();
      }
    }
  });