<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="X-UA-Compatible" content="chrome=1">
 <title>Σύνδεση</title>
 <link href="../images/flags.png" rel="shortcut icon">
 <link rel="stylesheet" href="../css/structure.css" type="text/css" />
 <link rel="stylesheet" href="../css/navigation.css" type="text/css" />
 <link rel="stylesheet" href="../css/account.css" type="text/css" />
 <script type="text/javascript" src="../scripts/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="../scripts/reggr.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-7"> 
<meta http-equiv="Content-Language" content="el">
 
  <style type="text/css" >
 </style>
 <script type="text/javascript">
 </script>
 
</head>
<body>

 <header id="header">
  <img style="float:left" src="../images/fl.jpg" alt="fl" title=""/>
  <h2 class="myBanner">Καλώς ήρθατε!Συνδεθείτε για να ξεκινήσετε!</h2>
  <p></p>
  <div>
 </div>
  <ul>
  <h2>Welcome&nbsp;<span id="whome">Guest</span>&nbsp;<span id="logger"><a href="javascript:logMeOut()">Αρχική</a></span></h2>
   </ul>
  <div style="clear:both"></div> 
 </header>
 <div id="main">
  <div id="login">
         <h2>
          Συνδεθείτε
         </h2>
         <p>Εδώ μπορείτε να βάλετε το όνομα και τον κωδικό σας ή να <a id="MainContent_reg" class="soc" href="register-greek.php" text-align:justify; >Εγγραφείτε</a>.</p>
           <form id="logform">
           <fieldset class="login">
            <legend>Συνδεθείτε για να ξεκινήσετε!</legend><br />
              <label for="username" id="UserNameLabel">Ον.Χρήστη:</label>
             <input autofocus name="username" type="text" id="username" class="textEntry" required placeholder="Απαραίτητο"/><br />
              <label for="password" id="PasswordLabel"  class="loglabel">Κωδικός:</label>
             <input required name="password" type="password" id="password" class="passwordEntry" placeholder="Τουλάχιστον 3 χαρακτήρες."/><br />
            </p>
            </fieldset>
             <input type="button" name="LoginButton" value="Σύνδεση" onclick="logMeIn()" />
           </form>
  </div>
 </div>
 
</body>
</html>
