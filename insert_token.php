<?php
  
  include './database.php';

  if (isset($_GET['token'])){
      $token = (int)$_GET['token'];
   }
   mysql_query("DELETE from token");
      
      $insert_query = "INSERT into token(token) VALUES('$token')";
      $result =mysql_query($insert_query);
      if($result){
          header("Location: jobs.php");
       }
  
?>