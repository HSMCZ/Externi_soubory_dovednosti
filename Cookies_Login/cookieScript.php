<?php
$cookie_name = "UživatelskáCookie";
$cookie_value = "Jméno a Pøíjmení";

$cookie_2_Jmeno = "Sušenka";
$cookie_2_Hodnota = "";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<html>
<body>
   
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Zadej sem nìco prosím: <input type="text" value="<?php echo $_POST["zadano"];?>" name="zadano">   
  <br><br>
  <input type="submit" name="submit" value="Darovat mùj malinkej textík">  
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   
   $cookie_2_Hodnota = $_POST["zadano"];
   
   setcookie($cookie_2_Jmeno, $cookie_2_Hodnota, time() + (86400 * 30), "/");

if(!ISSET($_COOKIE[$cookie_2_Jmeno])) 
{
    echo "Cookie named '" . $cookie_2_Jmeno . "' is not set!";
    echo "<br>";
} 

else 
{
    echo "Cookie '" . $cookie_2_Jmeno . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_2_Jmeno];
    echo "<br>";
}
}
?>

</body>
</html>