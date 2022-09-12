<!DOCTYPE html>
<html>
<head>
    
<?php
    session_start();
    if(!isset($_SESSION['x']))
      header("location:headlogin.php");
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
      die("could not connect".mysqli_error());
    }
    if(isset($_POST['s1']))
    {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $cid=$_POST['cid'];
      $_SESSION['cid']=$cid;
      header("location:head_case_details.php");
    }
    }
    $loc=$_SESSION['loc'];
    $query="select c_id,type_crime,d_o_c,location from complaint where location='$loc' order by c_id asc";
    $result=mysqli_query($conn,$query);  
?>

	<title>HQ Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="font.css" rel="stylesheet" type="text/css">
  
<script>
  function f1()
  {
    var sta2=document.getElementById("ciid").value;
    var x2=sta2.indexOf(' ');
    if(sta2!="" && x2>=0)
    {
      document.getElementById("ciid").value="";
      alert("Blank Field Not Allowed");
    }
  }
</script>
    
</head>
<body style="background-image: url(search1.jpeg);">
<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="official_login.php">Official Login</a></li>
        <li ><a href="headlogin.php">HQ Login</a></li>
        <li class="active"><a href="headHome.php">HQ Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active" ><a href="headHome.php">View Complaints</a></li>
        <li ><a href="head_view_police_station.php">Police Station</a></li>
        <li><a href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</nav>

<div>
    <form style="margin-top: 5%; margin-left: 40%;" method="post">
      <input type="text" name="cid" style="width: 250px; height: 30px;" placeholder="&nbsp Complaint Id" id="ciid" onfocusout="f1()" required>
      <div>
        <input class="btn btn-primary" type="submit" value="Search" name="s1" style="margin-top: 10px; margin-left: 11%;">
     </div>
    </form>
</div>
    
<div style="padding:50px;">
  <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color:white;">
    <tr>
      <th scope="col">Complain Id</th>
      <th scope="col">Type of Crime</th>
      <th scope="col">Date Of Crime</th>
      <th scope="col">Location of Crime</th>
    </tr>
    </thead>
    <?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 
    <tbody style="background-color: white; color: black;">
    <tr>
      <td><?php echo $rows['c_id']; ?></td>
      <td><?php echo $rows['type_crime']; ?></td>     
      <td><?php echo $rows['d_o_c']; ?></td>     
      <td><?php echo $rows['location']; ?></td>         
    </tr>
    </tbody>
    <?php
      } 
    ?>
  </table>
</div>
<div style="position: fixed;
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