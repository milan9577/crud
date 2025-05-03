<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MILAN</title>
</head>
<body>

  <div class="logo-1">
    <img src="img/logo.jpg" alt="IMG">

    <div class="text-1">
        <h1><i>MILAN</i></h1>
    </div>

    <div class="topnav">
      <a class="active" href="Login.php">Home</a>
      <a href="Resistretion.php">Resistretion</a>
      </div>
</div>

  <div class="container">

    
    <form action="" method="POST">
      Email address or phone number<br>
      <input type="text" name="email" placeholder="Enter your email address"> <br><br>
      Password<br>
      <input type="text" name="password" placeholder="Enter your Password"> <br><br>

      <button class="show-btn btn" type="login " name="login">login </button>
    </form>
  </div>
 
  
    
</body>
</html>





<?php

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


  $conn = mysqli_connect('localhost', 'root', '', 'developer_info');
if (!$conn) {
    die("not connected" . mysqli_connect_error());
}

    $sql = "INSERT INTO  developer(email, password) VALUES('$email', '$password')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
      die("not inserted" . mysqli_error());
    }
}

?>



