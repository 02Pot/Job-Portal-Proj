<?php
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register</title> 
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Register</span></div>

        <form method="post" action="../class/registerclas.php">

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email or Phone" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" required>
          </div>
          
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>

          <div class="row button">
            <input type="submit" value="Login">
          </div>
          
          <div class="signup-link">Already a member? <a href="login.php">Login now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>