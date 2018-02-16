<?php
echo "<!DOCTYPE html>";
$usr = 'karel';
$pass = 'heslo123';


if(!empty($_POST['jmeno']) && !empty($_POST['heslo']))  
{
  if(($_POST['jmeno']==$usr) && ($_POST['heslo'] == $pass)) 
  {
    if(isset($_POST['pamatovat'])) 
    {
     setcookie('username', $_POST['jmeno'], time()+3600, '/');
     setcookie('password', md5($_POST['heslo']), time()+3600, '/');
    }
    
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