<?php
session_start();
echo "<!DOCTYPE html>";
$usr = 'karel';
$pass = 'heslo123';

if(!empty($_SESSION['login_user']) && !empty($_SESSION['password_user']))  
{
  if(($_SESSION['login_user'] == $usr) && ($_SESSION['password_user'] == $pass)) 
  {
    header('Location: welcome.php');
  } 
  
  else 
  {
    echo "<html lang='cs'>
     <head>
        <title>Chyba</title>
        <meta charset='UTF-8'>
        
    </head>
      <body>
        <h2>CHYBA</h2>
        chybně zadané uživatelské jméno nebo heslo
        <a href='index.php'>Zkusit znovu</a>
      </body>
    <html> ";
  }
}

else 
{
  echo "<html lang='cs'>
     <head>
        <title>Chyba</title>
        <meta charset='utf-8'>
        
    </head>
      <body>
        <h2>CHYBA</h2>
        Vyplňte uživatelské jméno i heslo!
        <a href='index.php'>Zkusit znovu</a>
      </body>
    <html> ";
}

?>