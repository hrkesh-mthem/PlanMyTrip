<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
if(isset($_SESSION["USERNAME"])){
$user_name= $_SESSION["USERNAME"];
$test=mysqli_query($conn,"select * from login where name='$user_name'");
$atry=mysqli_affected_rows($conn);
if($atry==1 && $test)
{
    while($rtry = mysqli_fetch_array($test))
  {
    $mail=$rtry['email'];
  }
}
}
else
{
  echo "session err";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .topnav {
    overflow: hidden;
    background-color: #1f2e2e;
}
input[type="radio"]{
  appearance: none;
  width: $radioBtn-size;
  height: $radioBtn-size;
  margin: 0 $radioBtn-size / 2;
  outline: $radioBtn-size / 2 solid $inactive-color;
  outline-offset: $radioBtn-size / -2;
  cursor: pointer;
  backface-visibility: hidden;
  border-radius: 50%;
  transform: rotate(45deg) scale(1);
  will-change: transform;
  
  &:checked {
    animation: active 1s ease forwards;
  }
}
body { 
  background: linear-gradient(90deg, #2bc0e4 10%, #eaecc6 90%);
  background-attachment: fixed;
}
/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #527a7a;
    color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
    background-color: #a3c2c2;
    color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
    padding: 6px;
    border: none;
    margin-top: 8px;
    font-size: 17px;
    width: 130px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
/*@media screen and (max-width: 600px) {
    .topnav a, .topnav input[type=text] {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
    }
    .topnav input[type=text] {
        border: 1px solid #ccc;
    }
}*/
.topnav .search-container button {
  float: none;
  padding: 6px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  width: 50px;
}
.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 60%;
    margin: 0;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
  .modal1 {
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

.modal1-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
.modal2 {
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

.modal2-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
   .text{
	   
	   position: relative;
    text-align: center;
    color: white;
   }
   
   .top-left {
    position: absolute;
    top: 20px;
    left: 22px;
}
  
   .top-left2 {
    position: absolute;
    top: 40px;
    left: 22px;
}
  .bimg{
	  background-image: url("drop.jpg");
	   background-repeat: no-repeat;
		background-position: center center;
  }
  .navbar{
	  
  }
  .containe {
    padding: 10px;
}
  .ser{
    width: 170px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
.animate {
    animation: animatezoom 0.6s
}
/*
input[type=text]:focus {
    width: 100%;
}*/
  
  </style>
  
 
 <link rel="stylesheet" href="sign_login.css">
 
 
 
 <script>
 
function validate()
{

var x=document.myform.password.value;
var y=document.myform.repeatpwd.value;


if(x.length<8)
{
   window.alert("Enter a strong password");
   return false;
}
if(y!=x)
{
  window.alert("Password and confirm password not matched");
  return false;
  }


var mail = document.myform.email.value;
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(mail) == false) 
        {
            window.alert('Invalid Email Address');
            return false;
        }
		
var reg2 = /^[0-9]{10}+$/;
	var ph=document.myform.mobile.value;
	
	if (reg2.test(ph.value) == false) 
        {
            window.alert('Invalid Mobile No');
            return false;
        }

}

function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            window.alert('Invalid Email Address');
            return false;
        }

        return true;

}

function validateNumber(){
	var reg = /^[0-9]{10}+$/;
	var ph=document.myform.mobile.value;
	
	if (reg.test(ph.value) == false) 
        {
            window.alert('Invalid Mobile No');
            return false;
        }
		
		return true;


}


function validateEmail_l(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            window.alert('Invalid Email Address');
            return false;
        }

        return true;

}

function validate_l(){
	
	
var mail = document.myform1.email.value;
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(mail) == false) 
        {
            window.alert('Invalid Email Address');
            return false;
        }
	
}

 </script>
 
 
</head>
<body>

<div class="jumbotron bimg">
  <div class="container text-center">
    <h1>GO SomeWhere</h1>      
    <p>Welcome <?php echo $mail?></p>
  </div>
</div>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="wish.php">My wishlist</a>
  <a href="home.php">Log Out</a>
  <div class="search-container">
    <form action="citynew.php" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div class="container">    
  <div class="row" id = "result">
   
   
  </div>
</div>

<br>

<br><br>















































<footer class="container-fluid text-center">
  <p>Plan Your Event Now!!!</p>  
  <form class="form-inline">Visit Us
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscibe</button>
  </form>
</footer>


































<!--SignUp model-->


<div id="id01" class="modal1">
  
  <form name = "myform" class="modal1-content animate" onsubmit="return validate()" action="signup.php" method = "post" style = "width:50%; height:700px;" >
   

    <div class="containe">
	   <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
	  <span id="s1"><label><b>User Name</b></label></span>
      <input type="text" placeholder="Enter Username" name="uname"  required><br>
	  
      <span id="s1"><label><b>Email</b></label></span>
      <input type="text" placeholder="Enter Email" name="email"  required><br>
	  
	  <span id="s1"><label><b>Mobile</b></label></span>
      <input type="number" placeholder="Enter Mobile" name="mobile"  required><br><br>
	  
	  <span id="s1"><label><b>Current Location</b></label></span>
      <input type="text" placeholder="Enter Location" name="location"  required><br>
	  
      <span id="s1"><label><b>Password</b></label></span>
      <input type="password" placeholder="Enter Password" name="password" required><br>

      <span id="s1"><label><b>Repeat-Password</b></label></span>
      <input type="password" placeholder="Repeat Password" name="repeatpwd" required><br>
      
      

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        
		<div>
		<button type="submit" class="signupbtn" value= "submit">Sign Up</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        
      </div>
      
    </div> 
    
  </form>
</div>





<div id="id02" class="modal2">
  
  <form class="modal2-content animate" name ='myform1' onsubmit="return validate_l()" action="login.php" method="post" style = "width:55%; height:70%">
   

    <div class="containe">
	<h1>Login</h1>
      <p>Enter the Details.</p>
      <hr>
       <span id="s1"><label><b>Username</b></label></span>
      <input type="text" placeholder="Enter Username" name="uname"  required style = "width:40% ; margin: 10px 0px;"><br>

       <span id="s1"><label><b>Password</b></label></span>
      <input type="password" placeholder="Enter Password" name="psw" required  style = "width:40% ; margin: 10px 0px;"><br>
        
      
      
    </div>

    
	  <div>
	     <button type="submit" class="signupbtn" value="submit">Login</button>
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
		
      <span class="forget">Forgot <a href="#">password?</a></span>
      </div>
    
  </form>
</div>








<script>
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');


window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2 ) {
        modal1.style.display = "none";
		modal2.style.display = "none";
    }
}





/*

$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"search_city.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_city').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});

*/
</script>






</body>
</html>
