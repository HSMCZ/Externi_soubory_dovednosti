<?php
$jmeno = $heslo = ""; 
session_start();
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {
        $_SESSION['login_user'] = $jmeno;   
        $_SESSION['password_user'] = $heslo;
     }
?>

<form method="post" action="login.php">  
  Login: <input type="text" value="" name="jmeno">   
  <br><br>
  Heslo: <input type="password" value="" name="heslo">
  <br><br>
  <input type="checkbox" name="pamatovat" value="Y"> Pamatovat si mì
  <br><br> 
  <input type="submit" name="submit" value="Login">  
</form>

