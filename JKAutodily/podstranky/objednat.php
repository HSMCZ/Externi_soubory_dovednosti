<?php 
   $GLOBALS[0] = $_POST["kus1"];
   $GLOBALS[1] = $_POST["kus2"];
   $GLOBALS[2] = $_POST["kus3"];
   $GLOBALS[3] = $_POST["kus4"];
   $GLOBALS[4] = $_POST["kus5"];
   $GLOBALS[5] = $_POST["kus6"];
   
   $GLOBALS[6] = "Hovězí játra";
   $GLOBALS[7] = "Hovězí Kostky";
   $GLOBALS[8] = "Hovězí svalovina s droby";
   $GLOBALS[9] = "Koňská svalovina";
   $GLOBALS[10] = "Selečí sekané";
   $GLOBALS[11] = "Makrela v celku";
   
   //echo  $GLOBALS[0];
   //echo "<br>";
   
?>

<h2>Vaše objednávka</h2>
     <?php
      $indexVyrobku = 6;
     
      for ($i = 0; $i <= 5; $i++) 
      {
        if ($GLOBALS[$i] == 0 || $GLOBALS[$i] == null)
        {
          //echo "<a href='HK.php'>$GLOBALS[$indexVyrobku]</a>: Není v košíku";
          //echo "<br><br>";
          $indexVyrobku++;
        }
        
        else 
        {
          echo "<a href='HK.php'>$GLOBALS[$indexVyrobku]</a>: $GLOBALS[$i]krát";
          echo "<br><br>";
          $indexVyrobku++;               
        }
      }
     ?>
     
     <form method="post" action="index.php?stranka=udaje">
        <input type="submit" name="submit" value="K objednávce">
     </form>
     
     <form method="post" action="index.php?stranka=nabidka">
        <input type="submit" name="submit" value="Objednat znovu">        
     </form>