<?php
 include("dbconnect.php");
 $numrows=0;
 $password=$_POST['password'];
 $username=$_POST['username'];
 $query="select fname, lname from members where (password='$password' && username='$username')";
 $link = mysql_query($query);
 if (!$link) {
  echo 3;
  die();
 }
 $numrows=mysql_num_rows($link);
 if ($numrows>0){  // authentication is successfull
  $row = mysql_fetch_array($link, MYSQL_ASSOC);
  echo $row['fname'].' '.$row['lname'];
 } else {
  echo 3;  // authentication was unsuccessfull
 }
?>
