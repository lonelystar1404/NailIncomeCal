<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
<html>
<head lang ="en">
  <head>
    <meta charset="utf-8">
   

   
    <link href="signin.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
 

  </head>
</head>
<header>
   <div class="navbar navbar-default navbar-tt navbar-static-top">
     <ul class="nav navbar-nav nav-tt navbar-right navbar-lwr">
            <li >
              <a href="welcome.html">Home</a>
            </li>
            <li>
              <a href="signin.html" autofocus >Log in</a>
            </li>
            <li>
              <a href="signup.html">Sign up</a>
            </li>
    
            <li>
              <a href="#">Contact Us</a>
            </li>
          </ul>
          </div>
</header>
<body>
    
<div class="container">
   

    <form method="post" action="login.php" id="login">
    <fieldset>
        <legend>Login</legend>
         <input type="text" name="usernameLogin" id="usernameLogin"  class="form-control" placeholder="User Name" required autofocus>
      
        <input type="password" name="pwLogin" id="pwLogin" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button> 
    </fieldset>
</form>
</div>
</body>
    <hr>
<footer class="center">

    <p>
        
        <p class="center">  Copy right &copy; COSC484- THien Nguyen</p>
    </p>
</footer>
</html>