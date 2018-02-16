<?php
$servername = "localhost";
$username = "civrny"; //Pøihlašovací jméno
$password = "Martas83"; //Pøihlašovací heslo
$dbName = "civrny"; //Jméno databáze

$pripojeni = mysqli_connect($servername, $username, $password, $dbName);
$sqlDotaz = "INSERT INTO Uzivatele (Jmeno, Heslo)
             VALUES ('JmenoTestUzivatele', 'HesloTestUzivatele')";
             
            
if (mysqli_query($pripojeni, $sqlDotaz)) 
{
    echo "Zapsáno v tabulce";
}

else 
{
    echo "Nìco sa pokáklo: " . $sqlDotaz . "<br>" . mysqli_error($pripojeni);
}

mysqli_close($pripojeni);
?>