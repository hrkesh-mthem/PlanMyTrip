<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
if(isset($_SESSION["USERNAME"])){
$user_name=$_SESSION["USERNAME"];
$place=$_GET['p1'];
$city=$_GET['s1'];
$test=mysqli_query($conn,"select * from login where name='$user_name'");
$atry=mysqli_affected_rows($conn);
if($atry==1 && $test)
{
    while($rtry = mysqli_fetch_array($test))
  {
    $curr=$rtry['c_location'];
  }
}
$currl=strtolower($curr);
$curru=strtoupper($curr);
$cityl=strtolower($city);
}
else
{?>
<script type="text/javascript">
                       alert("Session erroe");
                                                  window.location.href = "home1.php";
                                                          </script>
<?php }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="star.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href='jquery-bar-rating-master/dist/themes/fontawesome-stars.css' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.js" type="text/javascript"></script>
<script src="jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>

  <style>
  .topnav {
    overflow: hidden;
    background-color: #1f2e2e;
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
  .modalm {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 730px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modalm-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
.animate {
    animation: animatezoom 0.6s
}
.containe {
    padding: 10px;
}
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
table#t1 {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;
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
th, th {
    text-align: left;
    padding: 8px;
}
  .text{
     
     position: relative;
    text-align: center;
    color: white;
   }
   span#s1{
float:left;
width:550px;
}
span#s2{
float:left;
width:500px;
}
   .top-left {
    position: absolute;
    top: 20px;
    left: 22px;
}
.mid{
  position: relative;
    text-align: center;
}
.mid1{
  position: relative;
}
  
   .top-left2 {
    position: absolute;
    top: 40px;
    left: 22px;
}
.post-action{
 margin-top: 20px;
 margin-bottom: 20px;
}
.checked {
    color: orange;
}

.like,.unlike{
 border: 0;
 background: none;
 letter-spacing: 1px;
 color: lightseagreen;
}

.like,.unlike:hover{
 cursor: pointer;
}
  .bimg{
    <?php 
    $s="select * from $city where place='$place'";
    $res=mysqli_query($conn,$s);
    while($row = mysqli_fetch_assoc($res)){
       ?>
            background-image: url("place/<?php echo $row['pic_name']?>");
       <?php } ?>
     background-repeat: no-repeat;
    background-position: center center;
  }
  .navbar{
    
  }
  .column {
    float: left;
    width: 100%;
    padding: 10px;
    border:1px solid black;
    border-collapse: collapse;
    position: relative;
    
}
.para{
font-size: 20px;

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
}

input[type=text]:focus {
    width: 100%;
}
  
  </style>
  
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
 </script>
 
 
</head>
<body>

<div class="jumbotron bimg">
  <div class="container text-center">
    <h1><?php $place1=strtoupper($place);
    echo $place1?></h1>
  </div>
</div>

<div class="topnav">
  <a class="active" href="">Place</a>
  <a href="wish.php">Back</a>
  <a href="home.php">Log Out</a>
</div>
<div class="column">
  
  <i class="fa fa-star" style="font-size:24px"></i>
  <p class="para"><b>Ratings</b> of <?php echo $place1?></p>
   <form id="myForm" action="reviewe1.php?p=<?php echo $place?>&c=<?php echo $cityl?>" method="post">
    <div class="stars">
        <input type="radio" name="star" class="star-1" id="star-1" value="1" onclick="document.getElementById('myForm').submit();" />
        <label class="star-1" for="star-1">1</label>
        <input type="radio" name="star" class="star-2" id="star-2" value="2" onclick="document.getElementById('myForm').submit();"/>
        <label class="star-2" for="star-2">2</label>
        <input type="radio" name="star" class="star-3" id="star-3" value="3" onclick="document.getElementById('myForm').submit();"/>
        <label class="star-3" for="star-3">3</label>
        <input type="radio" name="star" class="star-4" id="star-4" value="4" onclick="document.getElementById('myForm').submit();"/>
        <label class="star-4" for="star-4">4</label>
        <input type="radio" name="star" class="star-5" id="star-5" value="5" onclick="document.getElementById('myForm').submit();"/>
        <label class="star-5" for="star-5">5</label>
        <span></span>
    </div>
</form>
<?php 
$sqrr=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRowrr = mysqli_affected_rows($conn);
if($affectedRowrr==1 && $sqrr){
  while($rowrr = mysqli_fetch_array($sqrr))
  {
    $cnt=$rowrr['cust'];
    $avg=$rowrr['rating'];
  }
  ?>
  <div class="mid">
<?php echo $avg;?>&nbsp;<i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
     echo $cnt ?>&nbsp;<i class="fa fa-user"></i>
</div><br>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c5'];
    $ra=$rowrra['r5'];
  }
  if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 480px;"><div><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></span>
  <div style="background-color: #006600;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c4'];
    $ra=$rowrra['r4'];
  }
  if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 492px;"><div><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></span>
  <div style="background-color: #1aff1a;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c3'];
    $ra=$rowrra['r3'];
  }
 if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 504px;"><div><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></span>
  <div style="background-color: #ffff00;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c2'];
    $ra=$rowrra['r2'];
  }
  if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 516px;"><div><i class="fa fa-star"></i><i class="fa fa-star"></i></div></span>
  <div style="background-color: #ff9933;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c1'];
    $ra=$rowrra['r1'];
  }
  if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 528px;"><div><i class="fa fa-star"></i></div></span>
  <div style="background-color: #ff5c33;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php }?>
</div>

  
  <div class="column">
    <i class="fa fa-info-circle" style="font-size:24px"></i><p class="para"><b>About</b> <?php echo $place1?></p>
     <?php $s1="select * from $city where place='$place'";
     echo $city;
     echo $place;
    $res1=mysqli_query($conn,$s1);
    //echo $res1;
    while($row1 = mysqli_fetch_assoc($res1)){
      echo $row1['p_text'];
      } ?>
  </div>
<?php function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 69.05482;
  $unit = strtoupper($unit);

  if ($unit == "K") {
      $dist=$dist * 111.13384;
      return round($dist,2);
  } else if ($unit == "N") {
      $dist=$dist * 59.97662;
      return round($dist,2);
  } else {
      return round($miles,2);
  }
}
//echo distance(21.1702,72.8311,22.3072,73.1812, "K") . " Km<br>";
?>
<br>
<div class="column">
     <?php $s2="select * from $city where place='$place'";
    $res2=mysqli_query($conn,$s2);
    $s3="select * from location where city='$curr'";
    $res3=mysqli_query($conn,$s3);
    while(($row2 = mysqli_fetch_assoc($res2)) && ($row3 = mysqli_fetch_assoc($res3))){?>
        <i class="fa fa-plane" style="font-size:24px"></i><p class="para"><b>Distance</b> to <?php echo $place1?> from <?php echo $curru?></p>
      <?php  $dist=distance($row2['latitude'],$row2['longitude'],$row3['latitude'],$row3['longitude'],"K");
      echo $dist . " Km<br>";
     } ?>
  </div>
  <div class="column">
        <table>
          <tr>
            <th> </th>
            <th>From</th>
            <th>To</th>
            <th>Distance</th>
            <th>Time</th>
            <th> </th>
          </tr>
          <tr>
            <td><i class="fa fa-plane" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $plane=round(($dist/350),2);
                 $plane1=floor($plane);
                 $plane2=$plane-$plane1;
            if($plane1>0)
              {
                echo $plane1 . " hrs ";
              }
            if($plane2>0)
              {
                $plane2=round(($plane2*60),0);
                echo $plane2 . " min";
              }?></td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="" /></td>
          </tr>
          <tr>
            <td><i class="fa fa-train" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $train=round(($dist/70),2);
            $train1=floor($train);
                 $train2=$train-$train1;
            if($train1>0)
              {
                echo $train1 . " hrs ";
              }
            if($train2>0)
              {
                $train2=round(($train2*60),0);
                echo $train2 . " min";
              }?></td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="" /></td>
          </tr>
          <tr>
            <td><i class="fa fa-bus" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $bus=round(($dist/40),2);
            $bus1=floor($bus);
                 $bus2=$bus-$bus1;
            if($bus1>0)
              {
                echo $bus1 . " hrs ";
              }
            if($bus2>0)
              {
                $bus2=round(($bus2*60),0);
                echo $bus2 . " min";
              }?></td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="" /></td>
          </tr>
          <tr>
            <td><i class="fa fa-taxi" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $four=round(($dist/30),2);
            $four1=floor($four);
                 $four2=$four-$four1;
            if($four1>0)
              {
                echo $four1 . " hrs ";
              }
            if($four2>0)
              {
                $four2=round(($four2*60),0);
                echo $four2 . " min";
              }?></td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="" /></td>
          </tr>
          <tr>
            <td><i class="fa fa-motorcycle" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $two=round(($dist/20),2);
            $two1=floor($two);
                 $two2=$two-$two1;
            if($two1>0)
              {
                echo $two1 . " hrs ";
              }
            if($two2>0)
              {
                $two2=round(($two2*60),0);
                echo $two2 . " min";
              }?></td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="" /></td>
          </tr>
        </table>
  </div>
  <div class="column">
    <i class="fa fa-comments-o" style="font-size:24px"></i>
    <p class="para"><?php echo $place1?> <b>traveller reviews</b></p>
    <table id="t1">
    <?php
$resu = mysqli_query($conn,"select * from revplace where place='$place' order by id desc");



 while($row = mysqli_fetch_assoc($resu)){
?>
<tr>
<td>
<div style="padding-left:45px;width:100%;"><i class="fa fa-user"></i>&nbsp;
 <?php echo $row['user'].'<br><b>'.$row['rtitle'].'</b><br>'.$row['rev'].'<br><br>';
 ?>
</div>
</td>
<td>
  <div style="padding-left: 20px;">
  <?php echo date('jS M Y', strtotime($row['rdate']));
 ?></div>
  </td>
</tr>
<?php } ?>
</table>
    <div class="mid"><input type="button" value="Write a review"  class="btn btn-danger" id="myBtn1" onclick="document.getElementById('idm').style.display='block'" /></div>
  </div>
<br><br>
<div id="idm" class="modalm">
  
  <form class="modalm-content animate" action="rsub1.php?pl=<?php echo $place?>&c1=<?php echo $city?>" method="post" style = "width:55%; height:61%">
   

    <div class="containe">
      <div class="mid">
  <h1>Your review of <?php echo $place1?></h1>
      <hr>
       <span id="s1"><label><b>Title of your review</b></label></span>
      <input type="text" name="title" required style = "width:40% ; margin: 10px 0px;"><br>

       <span id="s2"><label><b>Your review</b></label></span>
      
      <textarea  name="rev" maxlength="1000" cols="40" rows="5" required  style = "width:40% ; margin: 10px 0px;"></textarea>
      <br>
        
      
      </div>
    </div>

    
    <div>
      <div class="mid">
       <button type="submit" class="btn btn-danger" value="submit">Submit review</button>
        <button type="button" onclick="document.getElementById('idm').style.display='none'" class="btn btn-danger">Cancel</button>
</div>
      </div>
    
  </form>
</div>
<footer class="container-fluid text-center">
  <p>Plan Your Event Now!!!</p>  
  <form class="form-inline">Visit Us
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscibe</button>
  </form>
</footer>
<script>
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modalm = document.getElementById('idm');


window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2 || event.target==modalm) {
        modal1.style.display = "none";
    modal2.style.display = "none";
    modalm.style.display = "none";
    }
}/*
$(function() {
 $('.rating').barrating({
  theme: 'fontawesome-stars',
  onSelect: function(value, text, event) {

   // Get element id by data-id attribute
   var el = this;
   var el_id = el.$elem.data('id');

   // rating was selected by a user
   if (typeof(event) !== 'undefined') {
 
     var split_id = el_id.split("_");
     var postid = split_id[1]; // postid

     // AJAX Request
     $.ajax({
       url: 'rating_ajax.php',
       type: 'post',
       data: {postid:postid,rating:value},
       dataType: 'json',
       success: function(data){
         // Update average
         var average = data['averageRating'];
         $('#avgrating_'+postid).text(average);
       }
     });
   }
  }
 });
});*/






/*$(document).ready(function(){

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
});*/
</script>






</body>
</html>
