
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php include 'Submitted.php';?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["jmeno"])) 
  {
    $jmeno = "nevypln�no";
  }
   
  else 
  {
    $jmeno = test_input($_POST["jmeno"]);
  }
  
  if (empty($_POST["heslo"])) 
  {
    $heslo = "nevypln�no";
  }
   
  else 
  {
    $heslo = test_input($_POST["heslo"]);
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Login</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Jm�no: <input type="text" value="<?php echo $jmeno;?>" name="jmeno">
  <br><br>
  Heslo: <input type="password" value="<?php echo $heslo;?>" name="heslo">
  <br><br>
  
  <input type="submit" name="submit" value="P�ihl�sit">  
</form>

<?php
echo "<h2>Zad�no: </h2>";
echo $jmeno;
echo "<br>";
echo $heslo;
echo "<br>";
?>

</body>
</html>
