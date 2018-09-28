<?php
include("dbconnect.php");
$username=$_GET['username'];
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$query="update members set fname='$fname',lname='$lname',"; 
$query.="email='$email', where username='$username'";
$link = mysql_query($query);
if (!$link) {
 echo 0;
} else {
 echo "This is it!!!";
}
?>