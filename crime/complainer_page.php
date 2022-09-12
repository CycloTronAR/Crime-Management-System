<!DOCTYPE html>
<html>
 
<?php
  session_start();
  if(!isset($_SESSION['x'])){
    header("location:userlogin.php");
  }
  $conn=mysqli_connect("localhost","root","","crime_portal");
  if(!$conn)
  {
    die("could not connect".mysqli_error());
  }
  $u_id=$_SESSION['u_id'];
  $result=mysqli_query($conn,"SELECT a_no FROM user where u_id='$u_id' ");
  $q2=mysqli_fetch_assoc($result);
  $a_no=$q2['a_no'];
  $result1=mysqli_query($conn,"SELECT u_name FROM user where u_id='$u_id' ");
  $q2=mysqli_fetch_assoc($result1);
  $u_name=$q2['u_name'];
      
  if(isset($_POST['s'])){
    $con=mysqli_connect('localhost','root','');
    if(!$con){
      die('could not connect: '.mysqli_error());
    }
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $location=$_POST['location'];
    $type_crime=$_POST['type_crime'];
    $d_o_c=$_POST['d_o_c'];
    $description=$_POST['description'];
    $var=strtotime(date("Ymd"))-strtotime($d_o_c); 
    if($var>=0){
      $comp="INSERT into complaint(a_no,location,type_crime,d_o_c,description) values('$a_no','$location','$type_crime','$d_o_c','$description')";
      $res=mysqli_query($conn,$comp);
      if(!$res){
        $message1 = "Complaint already filed";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
    else{
      $message = "Complaint Registered Successfully";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
  else
  {
    $message = "Enter Valid Date";
    echo "<script type='text/javascript'>alert('$message');</script>";}
  }
  }
?>  
<script>
function f1(){
  var sta1=document.getElementById("desc").value;
  var x1=sta1.trim();
  if(sta1!="" && x1==""){
    document.getElementById("desc").value="";
    document.getElementById("desc").focus();
    alert("Space Found");
  }
}
</script>
 
<head>
<title>Complainer Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="font.css" rel="stylesheet" type="text/css">
<link href="page_design.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body style="background-size: cover;background-image: url(reg.jpeg);background-position: center;">
<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="home.php"><b>Home</b></a>
  </div>
  <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li ><a href="userlogin.php">User Login</a></li>
      <li class="active"><a href="complainer_page.php">User Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="complainer_page.php">Log New Complain</a></li>
      <li><a href="complainer_complain_history.php">Complaint History</a></li>
      <li><a href="logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</div>
</nav>   
<div class="video" style="margin-top: 5%"> 
<div class="center-container">
<div class="bg-agile"><br>
<div class="login-form"><p><h2>Welcome <br><?php echo "$u_name" ?></h2></p>
<p><h2 style="color:white">Log New Complain</h2></p>
<form action="#" method="post" style="color: gray">Aadhar
<input type="text"  name="aadhar_number" placeholder="Aadhar Number" required="" disabled value=<?php echo "$a_no"; ?>>
<div class="top-w3-agile" style="color: gray">Location of Crime
<select class="form-control" name="location">
<?php
  $loc=mysqli_query($conn,"select location from police_station");
  while($row=mysqli_fetch_array($loc)){
?>
<option> <?php echo $row[0]; ?> </option>
<?php
  }
?>
</select>
</div>
<div class="top-w3-agile" style="color: gray">Type of Crime
<select class="form-control" name="type_crime">
  <option>Theft</option>
	<option>Robbery</option>
  <option>Pick Pocket</option>
  <option>Murder</option>
  <option>Rape</option>
  <option>Molestation</option>
  <option>Kidnapping</option>
  <option>Missing Person</option>
</select>
</div>
<div class="Top-w3-agile" style="color: gray">Date Of Crime : &nbsp &nbsp  
<input style="background-color: #313131;color: white" type="date" name="d_o_c" required>
</div>
<br>
<div class="top-w3-agile" style="color: gray">Description
<textarea  name="description" rows="40" cols="60" placeholder="Describe the incident in details with time" onfocusout="f1()" id="desc" required></textarea>
</div>
<input type="submit" value="Submit" name="s">
</form>	
</div>	
</div>
</div>	
</div>	
<div style="position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 30px;
  background-color: rgba(0,0,0,0.8);
  color: white;
  text-align: center;">
  <h4 style="color: white;">&copy <b>Crime Portal 2021</b></h4>
</div>

</body>
</html>