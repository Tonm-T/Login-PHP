
<?php
require 'database.php';


if (!empty($_POST['email']) && !empty($_POST['password']) {
  $sql = "INSERT INTO users (email, password) VALUES )(:email, :password)";
  $seter = $conn->prepeare($sql);
  $seter->bindParam(':email',$_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $seter->bindParam(':password', $password);

  if ($seter->execute()) {
  $message = 'Successfully created new user';
  } else {
    $message = 'Sorry there must have been an issue creating your account';
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

<h1>SignUp</h1>

<span>or <a href="login.php">Login</a> </span>

<form class="" action="signup.html" method="post">
  <input type="text" name="email" placeholder="Enter your Email">
  <input type="text" name="password" placeholder="Enter your Password">
    <input type="text" name="confirm_password" placeholder="Confirm your Password">
  <input type="submit" value="SEND">
</form>

  </body>
</html>
