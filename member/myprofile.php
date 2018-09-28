<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="X-UA-Compatible" content="chrome=1">
 <title>Scotsgreek</title>
 <link rel="stylesheet" href="../css/structure.css" type="text/css" />
 <link rel="stylesheet" href="../css/navigation.css" type="text/css" />
 <link rel="stylesheet" href="../css/searchus.css" type="text/css" />
 <link rel="stylesheet" href="../css/results.css" type="text/css" />
 <link rel="stylesheet" href="../css/myprofile.css" type="text/css" />
 <script type="text/javascript" src="../scripts/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="../scripts/reggr.js"></script>
 
 <style type="text/css" >
  canvas { border: 1px solid blue; }
 </style>

</head>
<body>
 <?php include("../includes/header.html")?>  
 <div id="main">


  <div id="left">
   <h2>My Profile</h2>
   <p>Here you can change your account-please keep in mind that you are not allowed to change your username.</p>
   <form id="profile">
    <fieldset class="register">
     <legend>Account Details</legend><br />
     <label for="username" class="reglabel">User Name:</label>
     <input name="username" id="username" type="text" id="username" disabled="disabled"/><br />
     <label for="fname" class="reglabel">First Name:</label>
     <input required name="fname" type="text" id="fname" /><br />
     <label for="lname" class="reglabel">Last Name:</label>
     <input required name="lname" type="text" id="lname" /><br />
     <label for="email" id="EmailLabel" class="reglabel">E-mail:</label>
     <input required name="email" type="email" id="email" /><br />
     
    </fieldset>
    <input type="button" value="Update" onclick="updateMe()"/>
    <input type="reset" value="Reset" />
   </form>
   <p>Click update button when finished! </p>
  </div>
  <div style="clear:both"></div>
 </div>
 <?php include("../includes/footer.html")?>  
 <script>
  getMe(sessionStorage['username']);
  $("#username").val(sessionStorage['username']);
 </script>
 
</body>
</html>
 

