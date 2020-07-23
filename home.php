<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="content/job-portal.css" />
</head>
<body>
  <div id="header">
  	<p>header</p>
  </div>
  <div id="sidenav">
  	<ul class="sidenav_meno">
  		<li class="active"><a href="#"><i class="fa fa-home"></i> <span>One</span></a></li>
  		<li><a href="#"><i class="fa fa-user"></i> <span>Two</span></a></li>
  		<li><a href="#"><i class="fa fa-book"></i> <span>Three</span></a></li>
  		<li><a href="#"><i class="fa fa-fire"></i> <span>Four</span></a></li>
  		<li><a href="#" onclick="toggle_visibility('show');"><i class="fa fa-hand-o-right"></i> <span>Multi</span></a>
  			<ul class="sidenav_meno_2" style="display: none;" id="show">
  				<li><a href="#"><i class="fa fa-genderless"></i> <span>section1a</span></a></li>
  				<li><a href="#"><i class="fa fa-genderless"></i> <span>section1b</span></a></li>
  				<li><a href="#"><i class="fa fa-genderless"></i> <span>section1c</span></a></li>
  			</ul>
  		</li>
  		<li><a href="#"><i class="fa fa-fire"></i> <span>Five</span></a></li>
  	</ul>
  </div>
  <div id="content">
  	<h1>content</h1>
  </div>
</body>
</html>

<script language="JavaScript">
        function toggle_visibility(id) {
        var e = document.getElementById(id);
                  if(e.style.display == 'block')
                     e.style.display = 'none';
                  else
                     e.style.display = 'block';
        }
</script>