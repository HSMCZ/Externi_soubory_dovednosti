
<h2>PHP Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Text: <input type="text" value="<?php echo $_POST["zadano"];?>" name="zadano">   
  <br><br>
  Hledat: <input type="text" value="<?php echo $_POST["hledat"];?>" name="hledat">
  <br><br>
  Nahradit: <input type="text" value="<?php echo $_POST["nahradit"];?>" name="nahradit">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
$zadano = $hledat = $nahradit = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["zadano"])) 
  {
    $zadano = "Defaultní text";
  } 
  else 
  {
    $zadano = $_POST["zadano"];
  }
  
  if (empty($_POST["hledat"])) 
  {
    $hledat = "";
  } 
  else 
  {
    $hledat = $_POST["hledat"];
  }
  
  if (empty($_POST["nahradit"])) 
  {
    $nahradit = "NAHRAZENO";
  } 
  else 
  {
    $nahradit = $_POST["nahradit"];
  }
  
  echo $zadano; 
  
  echo "<br><br>" . "Toto je jeho délka: " . strlen($zadano); 
    
  echo "<br><br>" . "Takhle je text pospátku: " . strrev($zadano);
    
  echo "<br><br>" . "Hledané slovo je na pozici: " . strpos($zadano, $hledat);
  
  echo "<br><br>" . "Nahradil jsi slovo jiným na toto: " . str_replace($hledat, $nahradit, $zadano);
  
  echo "<br><br>" . "Poèet slov je: " . str_word_count($zadano);

}
?>     