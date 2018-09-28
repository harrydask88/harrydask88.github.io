<?php
include("dbconnect.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];
$query = "select username from members where username='$username'";
$link = mysql_query($query);
if (!$link) {
 echo 3;
 die();
}
$num=mysql_num_rows($link);
if ($num>0){
 echo 5;
 die();
}
$query = "insert into members (username, fname, lname, email,  
   password) values('$username','$fname','$lname',
   '$email','$password')";
$link = mysql_query($query);
if (!$link) {
 echo 4;
}
header('location:../index.php');
?>

