
 <?php 
    //$GLOBALS['pocetKusu1'] = 6;
    $pocetKusu1 = 6;
    $pocetKusu2 = 2;
    $pocetKusu3 = 9;
    $pocetKusu4 = 12;
    $pocetKusu5 = 8;
    $pocetKusu6 = 1;
  
  ?>
     
     <h2>Naše nabídka</h2>
        
<form method="post" action="index.php?stranka=objednat">
     
<table width='500' border='0' cellpadding='5'>

<tr>

<td align='center' valign='center'>
            <img src='img/HJ.jpg' alt='Hovězí játra'/>
            <br />
            <a href="index.php?hj.php">Hovězí játra 29Kč/Kg</a>
            <br>
            <input type="number" min="0" max="<?php echo $pocetKusu1;?>" value="0" name="kus1">
            <br />
            <a><?php echo $pocetKusu1;?> kusů skladem</a>
            <br />
            </td>
     
<td align='center' valign='center'>
            <img src='img/HK.jpg' alt='Hovězí Kostky'/>
            <br />
            <a href="index.php?hk.php">Hovězí Kostky 89Kč/Kg</a>
            <br>
            <input type="number" min="0" max="<?php echo $pocetKusu2;?>" value="0" name="kus2">
            <br />
            <a><?php echo $pocetKusu2;?> kusů skladem</a>
            <br />
            </td>
     
        
<td align='center' valign='center'>
            <img src='img/HSsD.jpg' alt='Hovězí svalovina s droby'/>
            <br />
            <a href="index.php?hs.php">Hovězí svalovina s droby 27Kč/Kg</a>
            <br>
            <input type="number" min="0" max="<?php echo $pocetKusu3;?>" value="0" name="kus3">
            <br />
            <a><?php echo $pocetKusu3;?> kusů skladem</a>
            <br />
        </td>

    </tr>
<tr>

<td align='center' valign='center'>
            <img src='img/VZ.jpg' alt='Koňská svalovina kusová' />
            <br />
            <a href="index.php?ks.php">Koňská svalovina 121Kč/Kg</a>
            <br>
            <input type="number" min="0" max="<?php echo $pocetKusu4;?>" value="0" name="kus4">
            <br />
            <a><?php echo $pocetKusu4;?> kusů skladem</a>
            <br />
        </td>

<td align='center' valign='center'>
            <img src='img/SS.jpg' alt='Selečí sekané' />
            <br />
            <a href="index.php?ss.php">Selečí sekané 69Kč/Kg</a>
            <br>
            <input type="number" min="0" max="<?php echo $pocetKusu5;?>" value="0" name="kus5">
            <br />
            <a><?php echo $pocetKusu5;?> kusů skladem</a>
            <br />
        </td>
        
<td align='center' valign='center'>
            <img src='img/MvC.jpg' alt='Makrela v celku' />
            <br />
            <a href="index.php?mvc.php">Makrela v celku 89Kč/Kg</a>
            <br>
            <input type="number" min="0" max="<?php echo $pocetKusu6;?>" value="0" name="kus6">
            <br />
            <a><?php echo $pocetKusu6;?> kusů skladem</a>
            <br />
        </td>

</tr>

</table>

     <br> 
     <input type="submit" name="submit" value="OBJEDNAT">
  </form>
                                                            
<br>    
<a class="cenyDPH" >Ceny jsou uváděny s DPH</a>
