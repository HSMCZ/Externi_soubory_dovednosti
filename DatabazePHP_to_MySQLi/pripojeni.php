<?php
$servername = "localhost";
$username = "civrny"; //P�ihla�ovac� jm�no
$password = "Martas83"; //P�ihla�ovac� heslo

// Create connection
$pripojeni = mysqli_connect($servername, $username, $password);

// Check connection
if (!$pripojeni) 
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "Sice jsi k ni�emu, ale funguje ti to. A nikdo t� nem� r�d.";

?>