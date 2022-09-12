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
    
    $query="select i_id,i_name,location from police_station";
    $result=mysqli_query($conn,$query);  
    ?>
    
	<title>Head View Police Station</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="font.css" rel="stylesheet" type="text/css">

</head>
<body style="background-color: #B0AFAF">
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
        <li><a href="official_login.php">Official Login</a></li>
           
        <li><a href="headlogin.php">Head Login</a></li>
        <li class="active"><a href="head_view_police_station.php">HQ Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="headHome.php">View Complaints</a></li>
        <li class="active" ><a href="head_view_police_station.php">Police Station</a></li>
        <li><a href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
   
 <div  style="margin-top: 10%;margin-left: 45%">
     
   <a href="police_station_add.php" class="btn btn-primary">Add Police Station</a>
 </div>
    
<div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th scope="col">Incharge Id</th>
        <th scope="col">Incharge Name</th>
        <th scope="col">Location of Police Station</th>
      </tr>
    </thead>

    <?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['i_id']; ?></td>
        <td><?php echo $rows['i_name']; ?></td>     
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