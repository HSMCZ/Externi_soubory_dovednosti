<?php
$servername = "localhost";
$username = "civrny"; //Pøihlašovací jméno
$password = "Martas83"; //Pøihlašovací heslo

// Create connection
$pripojeni = mysqli_connect($servername, $username, $password);

// Check connection
if (!$pripojeni) 
{
    die("Nìco se trošku posralo: " . mysqli_connect_error());
}

echo "Sice jsi k nièemu, ale funguje ti to. A nikdo tì nemá rád.";

?>


<form method="post" action="testUzivatele.php">
  <br><br>
  <input type="submit" name="submit" value="Vytvoøit uživatele">  
</form>

<form method="post" action="testUzivatele.php">
  <br><br>
  Login: <input type="text" name="jmeno">  
  <br><br>
  Heslo: <input type="password" name="heslo">
  <br><br>
  <input type="submit" name="submit" value="Vytvoøit uživatele">
  <br><br>  
</form>
