<?php
 $idd="";
 $token="";
  if (isset($_GET['id'])){
   $idd = (int)$_GET['id'];
  }
  if (isset($_GET['token'])){
   $token = (string)$_GET['token'];
  }
  include './database.php';
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
  	</ul>
  </div>
  <?php
   $check="";
   $query  = "SELECT * from job ORDER BY id desc";   
   
  ?>
  <div id="search_token">
    <div id="category">
      <div id="token" class="location" style="float: left;"><b>Location ::</b></div>
             <?php
                $result = mysql_query($query) or die(mysql_error());
                 while ($row= mysql_fetch_array($result)) {
                  if($row["location"] != "" && $check!=$row['location']){
                    $check=$row['location'];
             ?>
              <a href="jobs.php?token=<?=$row['location']?>"><div class="location_list" id="token"><?php echo $row['location']; ?></div></a>
             <?php
               }
             }
             ?>
      
    </div>
    <div id="category">
      <div id="token" class="category"><b>Category ::</b></div>
            <?php
              $result = mysql_query($query) or die(mysql_error());
                while ($row= mysql_fetch_array($result)) {
                  if($row["category"] != "" && $check!=$row['category']){
                    $check=$row['category'];
             ?>
              <a href="jobs.php?token=<?=$row['category']?>"><div class="category_list" id="token"><?php echo $row['category']; ?></div></a>
             <?php
               }
             }
             ?>
    </div>
    <div id="category">
      <div id="token" class="skill"><b>Skill ::</b></div>
          <?php
              $result = mysql_query($query) or die(mysql_error());
                while ($row= mysql_fetch_array($result)) {
                  if($row["skill"] != "" && $check!=$row['skill']){
                    $check=$row['skill'];
             ?>
             <a href="jobs.php?token=<?=$row['skill']?>"><div class="skill_list" id="token"><?php echo $row['skill']; ?></div></a>
             <?php
               }
             }
             ?>

      </div>
    </div>    

  <div id="content">
        <div id="job_heading">
           <?php
                 if($token!=""){
                   $query  = "SELECT * from job where skill='$token' OR category='$token' OR location='$token'";   
                 }else{
                 	$query  = "SELECT * from job";
                 }
                 $result = mysql_query($query) or die(mysql_error());
                 while ($row= mysql_fetch_array($result)) {
                 	if($row["tittle"] != ""){
                    $id=$row['id'];
             ?>
             <a href="jobs.php?id=<?=$id?>">
               <div id="job">
                <div id="job_img">
                  <div style="margin-top:25px; margin-left:10px; width:70px; height:70px; background:#ff33cc;color: white; font-size: 50px; font-family: copper black;">
                    <b style="margin-left: 17px;"><?php echo substr($row['tittle'], 0, 1); ?></b>
                  </div>
                </div>
                <div id="job_tittle">
                  <h3><?php echo $row["tittle"]; ?></h3>
                  <p><?php echo $row['address']; ?><br><span class="fa fa-briefcase"> <?php echo $row['full_half']; ?></span></p>
                </div>
               </div>
             </a>
            <?php
               }
              }
            ?>
        </div>  

        <div id="job_detail">
         <div id="job_detail2">
          <style type="text/css">
            #job_img2,#job_tittle2{
               float: left;
              }
            @media (min-width: 600px){
                 #job_img2{
                   width: 10%;
                }
                  #job_tittle2{
                     width: 90%;
                }
            }
          </style>
          <?php 
              if($idd!=""){
                $query1  = "SELECT * from job WHERE id='$idd' LIMIT 1";   
              }else{
                $query1  = "SELECT * from job LIMIT 1";
              }
              $result1 = mysql_query($query1) or die(mysql_error());
              $row= mysql_fetch_array($result1);

           ?>

           <h1 id="margin"><?php echo $row['tittle']; ?></h1>

           <div id="margin">
             <div id="job_img2">
               <div style="margin-top:25px; margin-left:10px; width:70px; height:70px; background:#666;color: white; font-size: 50px; font-family: copper black;">
                    <b style="margin-left: 17px;"><?php echo substr($row['tittle'], 0, 1); ?></b>
                  </div>
             </div>
             <div id="job_tittle2" style="margin-top: 12px;">
               <p><?php echo $row['address']; ?><br><span class="fa fa-clock-o"> <?php echo get_time_ago( strtotime($row['time']) ); ?></span><br><span class="fa fa-briefcase"> <?php echo $row['full_half']; ?></span></p>
            </div>
           </div>
           <hr id="margin">
           <div id="margin">
             <a href="applyJob.php" title="Apply For Job" >
              <div style="width: 150px; height: 30px; background: green; border-radius: 25px; color: white">
                <span style="margin-left: 22px; font-size: 20px;">Apply Now</span> <span class="fa fa-arrow-circle-o-right"></span>
              </div>
            </a>
           </div>
           <hr id="margin">

           <p id="margin"><b>Overview:</b></p>
           <p id="margin">This position oversees, directs, coordinates, and is accountable for the electrical installation, service, and repairs to electromechanical equipment/machinery at customer sites using hoists, lift trucks, hand tools, and power tools following layout drawings and manufacturer s instructions, utilizing a strong knowledge of mechanical, hydraulic, and electrical machinery. Relies on extensive Material Handling experience and judgment to plan and accomplish assigned goals. The supervisor provides on-site troubleshooting, repair, and implementation of various retro-fits to material handling equipment. In addition to the basic services provided. The Supervisor is capable of commissioning, providing PLC program modifications, implementing maintenance programs, informal training, and system audits. Works under direction of the Manager, Director, Field Services.</p>

           <p id="margin">This position oversees, directs, coordinates, and is accountable for the electrical installation, service, and repairs to electromechanical equipment/machinery at customer sites using hoists, lift trucks, hand tools, and power tools following layout drawings and manufacturer s instructions, utilizing a strong knowledge of mechanical, hydraulic, and electrical machinery. Relies on extensive Material Handling experience and judgment to plan and accomplish assigned goals. The supervisor provides on-site troubleshooting, repair, and implementation of various retro-fits to material handling equipment. In addition to the basic services provided. The Supervisor is capable of commissioning, providing PLC program modifications, implementing maintenance programs, informal training, and system audits. Works under direction of the Manager, Director, Field Services.</p>
         </div>
        </div>

  </div>
</body>
</html>
<?php
  function get_time_ago( $time ){
    $time_difference = time() - $time;
    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );
    foreach( $condition as $secs => $str ){
        $d = $time_difference / $secs;
        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
  }
?>
