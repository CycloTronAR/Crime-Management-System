<!DOCTYPE html>
<html>
<head>
    
	<title>Crime Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="font.css" rel="stylesheet" type="text/css">
  <style>
body {
  background-size: contain;
  background-image: url(home_bg.jpg);
  background-position: center; 
}

body,html {
  width: 100%;
  height: 100%;
  font-family: "Lato";
  color: white;
}

h1 {
  font-weight: 600;
  font-size: 3em;
}


.content{
  padding-top: 25%;
  text-align: center;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                 0px 8px 13px rgba(0,0,0,0.1),
                 0px 18px 23px rgba(0,0,0,0.1);
}
hr {
  width: 250px;
  border-top: 1px solid #f8f8f8;
  border-bottom: 1px solid rgba(0,0,0,0.2);
}
</style>  
</head>
    
<body>

<nav class="navbar navbar-default navbar-fixed-top">
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
        <li class="active"><a href="home.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userlogin.php">User Login  <i class="fa fa-user"></i></a></li>
        <li><a href="official_login.php">Official Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="content">
 				<h1>Have a Complaint?</h1>
 				<h3>Register Below &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
 				<hr>
        <a href="registration.php" class="btn btn-default btn-lg" role="button" aria-pressed="true">Sign Up!</a>
 			</div>
 		</div>
 	</div>
</div>
<div style="position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 60px;
    background-color: rgba(0,0,0,0.8);
    color: white;
    text-align: center;">
    <h5 style="color: white;">&copy <b>Crime Portal 2021</b></h5>
</div> 
<div style="position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 45px;
    color: white;">
    <text-align align="center">
      <h5 style="color: white;"><b>Designed By: <br>Abhishek Sharma(Team Lead) & Aditya Raj &
        Abhishek Pandey & Ayan Bayen & Akshita Gotyal & Ritwiza Tomar</b></h5>
    </text-align>
</div> 

</body>
</html>