<html>
<title>JKAutodily</title>
<head runat="server">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Styly/styly.css"/>
    <title>JKAutodily</title>
</head>
<body id="telo">
          <h1>JK Autodíly</h1>
     <div id='NavigaceT'>
     <nav>
            <a href='index.php?stranka=domu'>Domů</a>
            <a href='index.php?stranka=kontakt'>Kontakt</a>
            <a href='index.php?stranka=hledatdily'>Hledat díly</a>
            <a href='index.php?stranka=dotaz'>Položit dotaz</a>
            <a href='index.php?stranka=kosik'>Košík</a>
          </nav>
     </div>
     
     <div id='obsahKontakt'>
					<?php
						if (isset($_GET['stranka']))
							$stranka = $_GET['stranka'];
						else
							$stranka = 'domu';
						if (preg_match('/^[a-z0-9]+$/', $stranka))
						{
							$vlozeno = include('podstranky/' . $stranka . '.php');
							if (!$vlozeno)
								echo('Podstránka nenalezena');
						}
						else
							echo('Neplatný parametr.');
					?>
     </div>

</body>
</html>