<!DOCTYPE html>
<html>
<body>
<h1>P�semka</h1>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
      $radky = $_POST["radky"] + $_POST["pocet_r"];
  }
?>
<form action="<?php echo htmlspecialchars($_SERVER[PHP_SELF]);?>" method="post">

  Po�et ��dk�: <input type="number" name="radky" value="0">
  <br>
  <input type="hidden" name="pocet_r" value="<?php echo $radky; ?>">
  <br>
  Po�et sloupc�: <input type="number" name="sloupce" value="0">
  <br>
  <input type="submit" value="vygeneruj tabulku">
  
</form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $sloupce = $_POST["sloupce"];
      echo "<table>";
      for ($i = 0; $i > $radky; $i++)
      {
       echo "<tr>";
       for ($j = 0; $j > $radky; $j++)
       {
          "<th>";
       }
      }
    }
  ?>

</body>
</html>