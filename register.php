<?php
  require('connect.php');

    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
    $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysql_query($query);
        if($result){
            $msg = "Lietotais ir registrets!";
        }
    }
    ?>
<!DOCTYPE html>
<html>
<head>
<title> Vadim 1. md / Registration </title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<link href='styles.css' rel='stylesheet' type='text/css'>
</head>
<body>

  <nav>
    <li>
      <a href="index.html"> Sakums </a>
    </li>
    <li>
      <a href="galerija.html"> Galerija </a>
    </li>
    <li>
      <a href="aptauja.html"> Aptauja </a>
    </li>
    <li>
      <a href="kontakti.html"> Kontakti </a>
    </li>
    <li class="right">
      <a href="/login.php"> Login </a>
    </li>
    <li class="right active">
      <a href="/register.php"> Registration &nbsp; </a>
    </li>
  </nav>

<div class="register-form with-margin">
<?php
  if(isset($msg) & !empty($msg)){
    echo $msg;
  }
 ?>
<h1>Register</h1>
<form action="" method="POST">
    <p><label>Lietotaja vards : </label>
  <input id="username" type="text" name="username" placeholder="username" /></p>

  <p><label>Emails&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
   <input id="password" type="email" name="email" required placeholder="vadim@vadim.com" /></p>

     <p><label>Parole&nbsp;&nbsp; : </label>
   <input id="password" type="password" name="password" placeholder="password" /></p>

    <a class="btn" href="login.php">Ienakt</a>
    <input class="btn register" type="submit" name="submit" value="Register" />
    </form>
</div>

</body>
</html>