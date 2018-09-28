<!DOCTYPE html>
<html>
<head>
 <title>Εγγραφείτε</title>
 <link href="../images/flags.png" rel="shortcut icon">
 <script type="text/javascript" src="../scripts/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="../scripts/reggr.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <link rel="stylesheet" href="../css/reg.css" type="text/css" />
 <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-7"> 
<meta http-equiv="Content-Language" content="el">
</head>
<body>
            <!-- Codrops top bar -->
            <div class="codrops-top">
               <a href=" https://www.google.co.uk/">
                    <strong> Δε μου αρεσε η σελιδα! Πηγαινε με στο Google </strong>
                </a>
                <span  style="margin-top:2px;float:right">
                    <a href=" http://localhost/1SCOTSGREEK/">
                        <strong>Πισω στην αρχικη σελιδα </strong>
                    </a>
                </span>
                <div class="clr"></div>
                 </div><!--/ Codrops top bar -->
 <div id='header'>
  <div>
   <img src="../images/Gree.jpg" width='253px' height='202px' style="float:left"/>
   <div style="margin-top:2px;float:left">
    
    <div id="nav">
    
     <a href="http://localhost/1SCOTSGREEK"></a> 
    </div>
   <div style="clear:both"></div>
   </div>
  </div>
  <div style="clear:both"></div>
 </div>
 <div style="clear:both"></div>
    <div id="maincontainer">
     <p>Εγγραφείτε στην παρακάτω φόρμα χρησιμοποιόντας λατινικούς χαρακτήρες.</p> 
     <form id="register">
      <fieldset>
       <legend>Εγγραφή Χρήστη</legend><br />
       <label for="username">Όν.Xρήστη:&nbsp;</label>
       <input autofocus name="username" type="text" id="username" class="textEntry" required placeholder="User Name"/><br />
       <label for="fname">Όνομα:&nbsp;</label>
       <input name="fname" type="text" id="fname" class="textEntry" required placeholder="First Name"/><br />
       <label for="lname">Επώνυμο:&nbsp;</label>
       <input name="lname" type="text" id="lname" class="textEntry" required placeholder="Last Name"/><br />
       <label for="email">Email:&nbsp;</label>
       <input name="email" type="email" id="email" class="textEntry" required placeholder="Email"/><br />
       <label for="password">Κωδικός:&nbsp;</label>
       <input name="password" placeholder="Password" type="password" id="password" class="passwordEntry" required/><br />
      </fieldset>
      <input type="button" value="Εγγράφη" onclick="registerMe()" />
     </form>    
    </div>
</body>
</html>
