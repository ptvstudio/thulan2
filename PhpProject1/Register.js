function validate() {
var u = document.getElementById("username").value;
var p1 = document.getElementById("password").value;
var p2 = document.getElementById("password-repeat").value;
    
if(u== "") {
alert("Please enter a Username!");
return false;
}
if(p1 == "") {
alert("Please enter a password");
return false;
}
if(p2 == "") {
alert("Please verify the password!");
return false;
}
  
alert("Please enter the correct information!")
  
return true;
}