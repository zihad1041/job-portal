<?php
  include './database.php';
  session_start();
   if($_SESSION["isLogin"]!=true){
       header("Location: loginup.php");
       die();
    }
    $username = $_SESSION['username'];
    if (isset($_GET["logout"])) {
    $_SESSION["isLogin"]=false;
    header('location:jobs.php');
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
  <link rel="shrotcut icon" href="job.png"/>
  <script src="content/click.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="content/job-portal.css" />
</head>

<body>
  <div id="header">
  	<ul class="header">
  		<li style="font-size: 32px; font-family: cooper black;"><b>Job Portal</b></li>
  		<li style="margin-left: 750px;"><a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
  		<li class="left"><a href="jobs.php"><i class="fa fa-suitcase"></i> <span>Jobs</span></a></li>
  		<li class="left"><a href="#" class="active"><i style="color: white;" class="fa fa-upload"></i> <span style="color: white;">Post Job</span></a></li>
      <li class="left"><a href="?logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
  	</ul>
  </div>

  <div style="margin-left: 10%; margin-top: 10%; font-size: 20px;">
    <b>
    Apply Job
  </b>
  </div>

</body>
</html>