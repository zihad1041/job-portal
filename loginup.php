<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
  <link rel="shrotcut icon" href="job.png"/>
  <script src="content/click.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="content/job-portal.css" />
	<style type="text/css">
		
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}

.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	width: 100%;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

	</style>
	<script type="text/javascript">
		$(function() {
          $('#login-form-link').click(function(e) {
		     $("#login-form").delay(100).fadeIn(100);
 		     $("#register-form").fadeOut(100);
		     $('#register-form-link').removeClass('active');
		     $(this).addClass('active');
		     e.preventDefault();
	      });
	      $('#register-form-link').click(function(e) {
		     $("#register-form").delay(100).fadeIn(100);
 		     $("#login-form").fadeOut(100);
		     $('#login-form-link').removeClass('active');
		     $(this).addClass('active');
		      e.preventDefault();
	      });
        });
	</script>
</head>

<body>
  <div id="header">
  	<ul class="header">
  		<li style="font-size: 32px; font-family: cooper black;"><b>Job Portal</b></li>
  		<li style="margin-left: 750px;"><a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
  		<li class="left"><a href="jobs.php"><i class="fa fa-suitcase"></i> <span>Jobs</span></a></li>
  		<li class="left"><a href="#" class="active"><i style="color: white;" class="fa fa-upload"></i> <span style="color: white;">Post Job</span></a></li>
  	</ul>
  </div>
      <div class="container" style="margin-top: 100px;">
    	<div class="row" style="margin-left: 1%;">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div id="login-form" style="display: block;">
									<div style="margin-left: 25%" class="form-group">
										<p class="statusin" style="color: red;"></p> 
									</div>
									<div class="form-group">
										<input type="text" name="username" class="userIdOfuser" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" class="passwordOfuser" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</div>
								<style>
                                 input#userSignInForm {
                                  padding: 5px;
                                  float: right;
                                  margin-top: -46px;
                                 }
                                 input#userSignInForm {
                                  border: 2px solid #089c2d;
                                  background: #ddd;
                                  }
                                </style>
								<div id="register-form" style="display: none;">
										<p class="status"></p>
									  <div class="form-group">
										<input class="name" type="text" name="username" tabindex="1" class="form-control" placeholder="Full Name" value="">
									  </div>
									  <div class="form-group">
										<input class="userId" type="text" name="userid" tabindex="1" class="form-control" placeholder="Username" value="">
									  </div>
									  <div class="form-group">
										<input type="email" name="email" class="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									  </div>
									  <div  class="form-group">
										<input class="password" type="password" name="password" tabindex="2" class="form-control" placeholder="Password">
									  </div>
									  <div  class="form-group">
										<input class="confirmPassword" type="password" name="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									  </div>
									  <div  class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
</body>
</html>

<link href="content/loginup/style.css" rel="stylesheet">
<link href="content/loginup/style2.css" rel="stylesheet">
<script src="content/loginup/script.js"></script>
<script src="content/loginup/script2.js"></script>
</body>
</html>
<script type="text/javascript">
	
$(".btn-register").on("click", function () {
    var userId = $(".userId").val();
    var name = $(".name").val();
    var email = $(".email").val();
    var password = $(".password").val();
    var confirmPassword = $(".confirmPassword").val();
    $.ajax({
        method: "POST",
        url: "userSignUp.php",
        data: {name: name, userId: userId, email: email, password: password,confirmPassword:confirmPassword},
        success: function (data) {

            if (data!== "") {
                $(".status").text(data);
            } else {
                $(".status").text(data);
            }
        }
    });
});
$(".btn-login").on("click", function () {

    var userIdOfuser = $(".userIdOfuser").val();
    var passwordOfuser = $(".passwordOfuser").val();

    $.ajax({
        method: "POST",
        url: "userLogin.php",
        data: {userId: userIdOfuser, password: passwordOfuser},
        success: function (data) {
         
            if (data === "no") {
                $(".statusin").html("Account isn't valid");
            }if(data === "yes") {
                $(".statusin").html("Succesfully Logining...");
                 window.location.replace('applyJob.php');
            }
        }
    });
});

</script>