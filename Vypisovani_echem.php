 <!DOCTYPE html>
<html>
<title>Blogysek</title>
<body>

<h1>Dzefi</h1>
<p>Fakt nema kamarady...</p>
                                    
<?php
//Deklarace proměnných
 $cisloPet = 5;
 $Text = "Allahu Akbar Nadpis";
 
 //vygeneruj nadpis
 echo "<h1>Vygenerovanej nadpis 1</h1>";
 echo "Dzefi nema kamarady, ani jednoho...";
 
 //Vypsání textu a proměnné
 echo "tohle by melo vypsat petku: " . $cisloPet;
 
 //ke sloučení textu netřeba tečky
 echo "<h1>Tohle bude nadpis s textem: $Text</h1>";
 
 //FUNKCE
 $globalniPromenna = "Mam rad zelvy";
 print $globalniPromenna;
 
 function mojeFunkce()
 {
     //deklaruji ji před prací s ní slovem "global"
     //Pokud bude static, tak se po provedení uchová.
     global $globalniPromenna;
     $globalniPromenna = "Dzefi ty jeden uchyle!";
     echo "<h3> nadpis 3 a odpoved dzefimu: $globalniPromenna</h3>";
     $globalniPromenna = "Furt mam rad zelvy a mit je rad budu dal!!";
 }
 
 mojeFunkce();
 print $globalniPromenna . "<br></br>";
 var_dump($globalniPromenna) . "<br></br>";
 
 class Auto 
 {
    function Auto() 
     {
        $this->model = "VolksWagen";
    }
 }
 
 $prvniAuto = new Auto();
 echo $prvniAuto->model . "<br></br>";
 
?>
</body>
</html> 