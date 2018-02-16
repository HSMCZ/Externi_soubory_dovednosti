<?php
$servername = "localhost";
$username = "civrny"; //Pøihlašovací jméno
$password = "Martas83"; //Pøihlašovací heslo

// Create connection
$pripojeni = mysqli_connect($servername, $username, $password);

// Check connection
if (!$pripojeni) 
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "Sice jsi k nièemu, ale funguje ti to. A nikdo tì nemá rád.";

?>