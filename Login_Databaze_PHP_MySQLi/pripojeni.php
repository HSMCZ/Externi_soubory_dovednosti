<?php
$servername = "localhost";
$username = "civrny"; //P�ihla�ovac� jm�no
$password = "Martas83"; //P�ihla�ovac� heslo

// Create connection
$pripojeni = mysqli_connect($servername, $username, $password);

// Check connection
if (!$pripojeni) 
{
    die("N�co se tro�ku posralo: " . mysqli_connect_error());
}

echo "Sice jsi k ni�emu, ale funguje ti to. A nikdo t� nem� r�d.";

?>


<form method="post" action="testUzivatele.php">
  <br><br>
  <input type="submit" name="submit" value="Vytvo�it u�ivatele">  
</form>

<form method="post" action="testUzivatele.php">
  <br><br>
  Login: <input type="text" name="jmeno">  
  <br><br>
  Heslo: <input type="password" name="heslo">
  <br><br>
  <input type="submit" name="submit" value="Vytvo�it u�ivatele">
  <br><br>  
</form>
