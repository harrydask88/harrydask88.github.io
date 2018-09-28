<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="X-UA-Compatible" content="chrome=1">
 <title>Login</title>
 <link href="../images/flags.png" rel="shortcut icon">
 <link rel="stylesheet" href="../css/structure.css" type="text/css" />
 <link rel="stylesheet" href="../css/navigation.css" type="text/css" />
 <link rel="stylesheet" href="../css/account.css" type="text/css" />
 <script type="text/javascript" src="../scripts/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="../scripts/regsc.js"></script>
 
  <style type="text/css" >
 </style>
 <script type="text/javascript">
 </script>
 
</head>
<body>

 <header id="header">
  <img style="float:left" src="../images/fl.jpg" alt="fl" title=""/>
  <h2 class="myBanner">Welcome!Login in below to Start!</h2>
  <ul>
 <h2>Welcome&nbsp;<span id="whome">Guest</span>&nbsp;<span id="logger"><a href="javascript:logMeOut()">Home</a></span></h2>
  </ul>
  <div style="clear:both"></div> 
 </header>
 <div id="main">
  <div id="login">
         <h2>
          Log In
         </h2>
         <p>You can enter you username and password, or you can  <a id="MainContent_reg" class="soc" href="register-scots.php" text-align:justify; >Register</a>.</p>
           <form id="logform">
           <fieldset class="login">
            <legend>Login to Start!</legend><br />
              <label for="username" id="UserNameLabel">Username:</label>
             <input autofocus name="username" type="text" id="username" class="textEntry" required placeholder="Required"/><br />
              <label for="password" id="PasswordLabel"  class="loglabel">Password:</label>
             <input required name="password" type="password" id="password" class="passwordEntry" placeholder="At least 3 characters"/><br />
            </p>
            </fieldset>
             <input type="button" name="LoginButton" value="Log In" onclick="logMeIn()" />
           </form>
  </div>
 </div>
 
</body>
</html>
