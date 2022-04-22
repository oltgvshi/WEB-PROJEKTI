var nameRegex = /^[A-Z][a-z]{1,}/;
var surnameRegex = /^[A-Z][a-z]{1,}/;
var usernameRegex = /^[A-Z]\w+[._-]?\w+/;
var emailRegex = /[a-z]\w+@[a-z]+[-]?[a-z]\.[a-z]{2,3}/;
var passwordRegex = /^[A-Z]\w+[a-z]\d{3}/;
var roleRegex = /user|admin/;


var editButton = document.getElementById("editButton");

var nameMsgEdit = document.getElementById("nameerror");
var surnameMsgEdit = document.getElementById("surnameerror");
var usernameMsgEdit = document.getElementById("usernameerror");
var emailMsgEdit = document.getElementById("emailerror");
var passwordMsgEdit = document.getElementById("passworderror");
var roleMsgEdit = document.getElementById("roleerror");


editButton.addEventListener("click", function (event) {

var nameEdit = document.getElementById("nameINP").value;
var surnameEdit = document.getElementById("surnameINP").value;
var usernameEdit = document.getElementById("usernameINP").value;
var emailEdit = document.getElementById("emailINP").value;
var passwordEdit = document.getElementById("passwordINP").value;
var roleEdit = document.getElementById("roleINP").value;

if (nameEdit == "") {
nameMsgEdit.innerText = "! Fill Name"
event.preventDefault();
}

else {
if (nameRegex.test(nameEdit)) {

    nameMsgEdit.innerText = "";

}
else {
    nameMsgEdit.innerText = "! Name should start with a capital"
    event.preventDefault();
}
}

if (surnameEdit == "") {
surnameMsgEdit.innerText = "! Fill Surname"
event.preventDefault();
}

else {
if (surnameRegex.test(surnameEdit)) {
    surnameMsgEdit.innerText = "";

}
else {
    surnameMsgEdit.innerText = "! Surname should start with a capital"
    event.preventDefault();
}
}

if (usernameEdit == "") {
usernameMsgEdit.innerText = "! Fill Username"
event.preventDefault();
}

else {
if (usernameRegex.test(usernameEdit)) {
    usernameMsgEdit.innerText = "";
}
else {
    usernameMsgEdit.innerText = "! Username must be example.example"
    event.preventDefault();
}
}
if (emailEdit == "") {
emailMsgEdit.innerText = "! Fill Email"
event.preventDefault();
}

else {
if (emailRegex.test(emailEdit)) {
    emailMsgEdit.innerText = "";

}
else {
    emailMsgEdit.innerText = "! Email must be standard"
    event.preventDefault();
}
}

if (passwordEdit == "") {
    passwordMsgEdit.innerText = "! Fill Password"
    event.preventDefault();
}

else {
    if (passwordRegex.test(passwordEdit)) {

        passwordMsgEdit.innerText = "";

    }
    else {
        passwordMsgEdit.innerText = "! Password should start with a capital and end with 3+ numbers and . or ,"
        event.preventDefault();
    }
}

if (roleEdit == "") {
roleMsgEdit.innerText = "! Fill Role"
event.preventDefault();
}

else {
if (roleRegex.test(roleEdit)) {

    roleMsgEdit.innerText = "";

}
else {
    roleMsgEdit.innerText = "! Role must be user or admin"
    event.preventDefault();
}
}


}); 