<?php
  $host="localhost"; 
  $username="root"; 
  $password=""; 
  $db_name="webengi"; 

  mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
  mysql_select_db("$db_name")or die("cannot select DB");
?>