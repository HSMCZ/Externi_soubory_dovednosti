<?php
$servername = "localhost";
$username = "civrny"; //P�ihla�ovac� jm�no
$password = "Martas83"; //P�ihla�ovac� heslo
$dbName = "civrny"; //Jm�no datab�ze

$pripojeni = mysqli_connect($servername, $username, $password, $dbName);
$sqlDotaz = "INSERT INTO Uzivatele (Jmeno, Heslo)
             VALUES ('JmenoTestUzivatele', 'HesloTestUzivatele')";
             
            
if (mysqli_query($pripojeni, $sqlDotaz)) 
{
    echo "Zaps�no v tabulce";
}

else 
{
    echo "N�co sa pok�klo: " . $sqlDotaz . "<br>" . mysqli_error($pripojeni);
}

mysqli_close($pripojeni);
?>