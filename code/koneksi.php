<?php
error_reporting(0);
  $host = 'localhost';
  $user = 'root';      
  $password = '1234';      
  $database = 'laundrycc';  
 
  $konek_db = mysql_connect($host, $user, $password) or die(mysql_Error());
  $find_db = mysql_select_db($database) or die(mysql_Error());
?>  