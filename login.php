<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

<h1>Login</h1>

<span>or <a href="signup.php">SignUp</a> </span>

<form class="" action="login.php" method="post">
<input type="text" name="Email" placeholder="Enter your Email">
<input type="text" name="Password" placeholder="Enter your Password">
<input type="submit" value="SEND">


</form>
  </body>
</html>
