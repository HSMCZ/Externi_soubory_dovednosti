
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$prvniErr = $druhyErr = $operaceErr = "";
$prvni = $druhy = $vysledek = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["prvni"])) 
  {
    $prvniErr = "nevyplnìno";
  }
   
  else 
  {
    $prvni = test_input($_POST["prvni"]);
  }
  
  if (empty($_POST["druhy"])) 
  {
    $druhyErr = "nevyplnìno";
  }
   
  else 
  {
    $druhy = test_input($_POST["druhy"]);
  }

  if (empty($_POST["operace"])) 
  {
    $operaceErr = "Vyber operaci";
  } 
  
  else
  {
    $operace = test_input($_POST["operace"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Formuláøové sèítání pøíklad</h2>
<p><span class="error">* povinné pole.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Èíslo jedna: <input type="number" name="prvni">
  <span class="error">* <?php echo $prvniErr;?></span>
  <br><br>
  Èíslo dva: <input type="number" name="druhy">
  <span class="error">* <?php echo $druhyErr;?></span>
  <br><br>
  
  Operace:
  <input type="radio" name="operace" value="soucet">Seèti
  <input type="radio" name="operace" value="odecet">Odeèti
  <span class="error">* <?php echo $operaceErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Èísla a vısledek:</h2>";
echo "<a>Èíslo 1 je: </a> $prvni";
echo "<br>";
echo "<a>Èíslo 2 je: </a> $druhy";
echo "<br>";

if($operace == "soucet")
{
   echo "Souèet je: " . ($prvni + $druhy); 
} 

else if($operace == "odecet")
{
   echo "Odeèet je: " . ($prvni - $druhy); 
}

?>

</body>
</html>
