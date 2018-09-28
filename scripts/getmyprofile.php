 

<?php
 include("dbconnect.php");
 $username=$_GET['username'];
 $query = "select fname, lname, bandname, address1, town, county, postcode, phone, email, web from members where username='$username'";
 
 $link = mysql_query($query);
 if (!$link) {
  echo 2;  
 } else {
  $rows = array();
  while($r = mysql_fetch_assoc($link)) {
   $rows[] = $r;
  }
  $json=json_encode($rows);  
  echo $json;
 }
 ?>