<?php
  $jmeno = $heslo = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {
        if (empty($_POST["jmeno"])) 
        {
          $jmeno = "Nezadan� jm�no";
        }
        else
        {
          $jmeno = $_POST["jmeno"];
        }
        
        if (empty($_POST["heslo"])) 
        {
          $heslo = "";
        }
        else
        {
          $heslo = $_POST["heslo"];
        }
        
        //Vytvo�en� su�enky PHP
        //$cookieJm_name = "LoginCookie";
        //$cookieJm_value = $jmeno;

        //$cookieHe_name = "Su�enka";
        //$cookieHe_value = $heslo;

        //setcookie($cookieJm_name, $cookieJm_value, time() + (86400 * 30), "/");
        //setcookie($cookieHe_name, $cookieHe_value, time() + (86400 * 30), "/");
        
        //Prom�nn� session
        //session_start();
        //$_SESSION["jmeno"] = $jmeno;
        //$_SESSION["heslo"] = $heslo;
        
     }
?>

<form method="post" action="login.php">  
  Login: <input type="text" value="<?php echo $jmeno;?>" name="jmeno">   
  <br><br>
  Heslo: <input type="password" value="<?php echo $heslo;?>" name="heslo">
  <br><br>
  <input type="checkbox" name="pamatovat" value="Y"> Pamatovat si m�
  <br><br> 
  <input type="submit" name="submit" value="Login">  
</form>