<!DOCTYPE html>
<html>
<body>
      <h1>Písemka</h1>
<?php
  $a = rand (1,9);
  $b = rand (1,9);
  $c = rand (1,9);
  $d = rand (1,9);
  $e = rand (1,9);
  $f = rand (1,9);
  $g = rand (1,9);
  $h = rand (1,9);
  $i = rand (1,9);
  
  echo "<table style='width:100%; border: 3px solid black; font-weight: 20px;'>
  <tr>
    <td>$a</td>
    <td>$b</td> 
    <td>$c</td>
  </tr>
  <tr>
    <td>$d</td>
    <td>$e</td> 
    <td>$f</td>
  </tr>
  <tr>
    <td>$g</td>
    <td>$h</td> 
    <td>$i</td>
  </tr>
</table>";
  
?>

</body>
</html>