<?php
session_start();
 require('connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);

if ($count == 1){
$_SESSION['username'] = $username;
}else{

echo "Neparei dati";
}
}
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Cau " . $username . "
";
echo "tu esi ieksha
";
echo "<a href='logout.php'>Iziet</a>";

}else{

?>

<!DOCTYPE html>
<html>
<title> Vadim 1. md / Login </title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='styles.css' rel='stylesheet' type='text/css'>
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
    <li class="right active">
      <a href="/login.php"> Login </a>
    </li>
    <li class="right">
      <a href="/register.php"> Registration &nbsp; </a>
    </li>
  </nav>

  <div class="register-form with-margin">
    <?php
      if(isset($msg) & !empty($msg)){
        echo $msg;
      }
     ?>
    <h1>Login</h1>
    <form action="" method="POST">
        <p><label>Lietotaja vards : </label>
      <input id="username" type="text" name="username" placeholder="username" /></p>

         <p><label>Parole: &nbsp;&nbsp; : </label>
       <input id="password" type="password" name="password" placeholder="password" /></p>

        <a class="btn" href="register.php">Registreties</a>
        <input class="btn register" type="submit" name="submit" value="Login" />
        </form>
    <?php } ?>
  </div>

</body>
</html>
