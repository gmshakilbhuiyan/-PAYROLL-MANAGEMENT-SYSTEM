<?php 
session_start(); 
$_SESSION["islogin"]=0;
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<style> 
body {font-family: Arial, Helvetica, sans-serif;} 
 
/* Full-width input fields */ 
input[type=text], input[type=password] { 
    width: 100%; 
    padding: 12px 20px; 
    margin: 8px 0; 
    display: inline-block; 
    border: 1px solid #ccc; 
    box-sizing: border-box; 
} 
 
/* Set a style for all buttons */ 
button { 
    background-color: #4CAF50; 
    color: white; 
    padding: 14px 20px; 
    margin: 8px 0; 
    border: none; 
    cursor: pointer; 
    width: 100%; 
} 
 
button:hover { 
    opacity: 0.8; 
} 
 
/* Extra styles for the cancel button */ 
.cancelbtn { 
    width: auto; 
    padding: 10px 18px; 
    background-color: #f44336; 
} 
 
/* Center the image and position the close button */ 
.imgcontainer { 
    text-align: center; 
    margin: 24px 0 12px 0; 
    position: relative; 
} 
 
img.avatar { 
    width: 40%; 
    border-radius: 50%; 
} 
 
.container { 
    padding: 16px; 
} 
 
span.psw { 
    float: right; 
    padding-top: 16px; 
} 
 
/* The Modal (background) */ 
.modal { 
    display: none; /* Hidden by default */ 
    position: fixed; /* Stay in place */ 
    z-index: 1; /* Sit on top */ 
    left: 0; 
    top: 0; 
    width: 100%; /* Full width */ 
    height: 100%; /* Full height */ 
    overflow: auto; /* Enable scroll if needed */ 
    background-color: rgb(0,0,0); /* Fallback color */ 
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */ 
    padding-top: 60px; 
} 
 
/* Modal Content/Box */ 
.modal-content { 
    background-color: #fefefe; 
    margin: 2% auto 10% auto; /* 5% from the top, 15% from the bottom and centered */ 
    border: 1px solid #888; 
    width: 40%; /* Could be more or less, depending on screen size */ 
} 
 
/* The Close Button (x) */ 
.close { 
    position: absolute; 
    right: 25px; 
    top: 0; 
    color: #000; 

 
    font-size: 35px; 
    font-weight: bold; 
} 
 
.close:hover, 
.close:focus { 
    color: red; 
    cursor: pointer; 
} 
 
/* Add Zoom Animation */ 
.animate { 
    -webkit-animation: animatezoom 0.6s; 
    animation: animatezoom 0.6s 
} 
 
@-webkit-keyframes animatezoom { 
    from {-webkit-transform: scale(0)}  
    to {-webkit-transform: scale(1)} 
} 
     
@keyframes animatezoom { 
    from {transform: scale(0)}  
    to {transform: scale(1)} 
} 
 
/* Change styles for span and cancel button on extra small screens */ 
@media screen and (max-width: 300px) { 
    span.psw { 
       display: block; 
       float: none; 
    } 

    .cancelbtn { 
       width: 100%; 
    } 
} 
 
.button { 
        background-color: #000000; 
        color: #FFFFFF; 
        padding: 10px; 
        border-radius: 10px; 
        -moz-border-radius: 10px; 
        -webkit-border-radius: 10px; 
        margin:10px 
    } 
     
    .small-btn { 
        width: 50px; 
        height: 25px; 
    } 
     
    .medium-btn { 
        width: 70px; 
        height: 30px; 
    } 
     
    .big-btn { 
        width: 180px; 
        height: 40px; 
    } 
</style> 
<?php 
include("header12.php"); 

//include("dbconnect.php"); 
extract($_POST); 
 
if(isset($submit)) 

 
?> 
</head> 
<body> 
<center> 
</br></br></br> 
<h1><strong>TEJGAON COLLEGE EMPLOYEE MANAGER</strong></h1> 
<br> 
<h1><STRONG>ADMINISTRATOR &nbsp; LOGIN</STRONG></h1> 
 
 
<button onclick="document.getElementById('id01').style.display='block'" class="button big-btn"  style="width:10%; font-size : 20px;"><strong>Login</strong></button> 
</center> 
<div id="id01" class="modal"> 
   
  <form class="modal-content animate" name="form1" method="post" action="welcome.php"> 

    <div class="imgcontainer"> 
      
      <img src="admin.png" alt="Avatar" class="avatar"> 
    </div> 
 
    <div class="container"> 
      <label for="uname"><b>Username</b></label> 
      <input type="text" placeholder="Enter Username" name="username" id="username" required> 
 
      <label for="psw"><b>Password</b></label> 
      <input type="password" placeholder="Enter Password" name="password" id="password" required> 
         
      <button type="submit"  name="submit" id="submit" value="Login">Login</button> 
      <button type="submit"  name="submit" id="SingUpsubmit" value="SingUp">SingUp</button> 
     <!-- <label> 
        <input type="checkbox" checked="checked" name="remember"> Remember me 
      </label>--> 
    </div> 
 
    <div class="container" style="background-color:#f1f1f1"> 
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
       
<!--   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button onclick="document.getElementById('id02').style.display='block'" class="button big-btn"  style="width:50%; font-size : 20px;"><strong>Forget Password</strong></button> --> 
 
    </div> 
  </form> 
</div> 
 
 
 
<div id="id02" class="modal"> 
   

 
  <form class="modal-content animate" method="post" action=""> 
    <div class="imgcontainer"> 
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span> 
       
    </div> 
 
    <div class="container"> 
      <label for="uname"><b>Enter Your Email id</b></label> 
      <input type="text" placeholder="Enter Username" name="username" id="username" required> 
 
             
      <input type="submit" name="submi" value="Submit"> 
       
    </div> 
     
  </form> 
</div> 
<script> 
// Get the modal 
var modal = document.getElementById('id01'); 
var modal = document.getElementById('id02'); 
 
 
// When the user clicks anywhere outside of the modal, close it 
window.onclick = function(event) { 
    if (event.target == modal) { 
        modal.style.display = "none"; 
    } 
} 
</script> 