
<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styly/styl.css">
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
    $prvniErr = "nevypln�no";
  }
   
  else 
  {
    $prvni = test_input($_POST["prvni"]);
  }
  
  if (empty($_POST["druhy"])) 
  {
    $druhyErr = "nevypln�no";
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
<div id="formular">
  
<h2>PHP KALKULA�KA</h2>

<p><span class="error">* povinn� pole.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <a class="zelenyText">Prvn� ��slo: </a>
  
  <input type="number" value="<?php echo $prvni;?>" name="prvni">
  <span class="error">* <?php echo $prvniErr;?></span>
  
  <br><br>
  
  <div id="volba">
    <a class="cervenyText">Oper�tor: </a>
    <select selectedItem="<?php echo $operace;?>" name="operace">
      <option value="soucet" >+</option>
      <option value="odecet" >-</option>
      <option value="nasobek" >*</option>
      <option value="deleno" >/</option>
      <option value="mocnina" >moc</option>
      <option value="odmocnina" >odm</option>
    </select>  
    <span class="error">* <?php echo $operaceErr;?></span>
  </div>
  <br>
     
  <a class="zelenyText">Druh� ��slo: </a><input type="number" value="<?php echo $druhy;?>" name="druhy">
  <span class="error">* <?php echo $druhyErr;?></span>
    <br> 
    <input id="spocitej" type="submit" name="submit" value="Spo��tej">
    <input id="vymaz" type="submit" name="submit" value="Vyma�">
    <br> 
  <a class="zelenyText">V�sledek: <?php echo $vysledek;?></a>
  <br><br>  
    
  
  
  <br><br>
  
</form>
  </div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

function secti($prvni, $druhy)
{
  $vysledek = ($prvni + $druhy);
  echo "Sou�et je: " . ($prvni + $druhy);
}

function odecti($prvni, $druhy)
{
  $vysledek = ($prvni - $druhy);
  echo "Ode�et je: " . ($prvni - $druhy);
}

function vynasob($prvni, $druhy)
{
  $vysledek = ($prvni * $druhy);
  echo "N�sobek je: " . ($prvni * $druhy);
}

function vydel($prvni, $druhy)
{
  $vysledek = ($prvni / $druhy);
  echo "Vyd�leno je: " . ($prvni / $druhy);
}

function mocnina($prvni, $druhy)
{
  $vysledek = ($prvni * $prvni);
  echo "mocnina ��sla 1 je: " . ($prvni * $prvni);
  echo "<br><br>";
  echo "mocnina ��sla 2 je: " . ($druhy * $druhy);
}

function odmocnina($prvni, $druhy)
{
  $vysledek = sqrt($prvni);
  echo "Odmocnina ��sla 1 je: " . sqrt($prvni);
  echo "<br><br>";
  echo "Odmocnina ��sla 2 je: " . sqrt($druhy);
}

switch($operace)
{
    case "soucet":
      secti($prvni, $druhy);
    break;
    
    case "odecet":
      odecti($prvni, $druhy);
    break;
    
    case "nasobek":
      vynasob($prvni, $druhy);
    break;
    
    case "deleno":
      vydel($prvni, $druhy);
    break;
    
    case "mocnina":
      mocnina($prvni, $druhy);
    break;
    
    case "odmocnina":
      odmocnina($prvni, $druhy);
    break;
}
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
}
?>

</body>
</html>
