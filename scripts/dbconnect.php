<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbase = "bookings";
  $link = @ mysql_connect($hostname, $username, $password);
  if (!$link) {
  	echo 1;;
    die();
  }
  $db_selected = @ mysql_select_db($dbase, $link);
  if (!$db_selected) {
    echo 2;
    die();
  }
 ?>

