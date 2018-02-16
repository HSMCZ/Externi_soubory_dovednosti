
<!DOCTYPE html>
<html>
<head>
<style>
#zakaznici {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    width: 50%;
}

#zakaznici td, #zakaznici th {
    border: 1px solid #ddd;
    padding: 8px;
}

#zakaznici tr:nth-child(even){
  background-color: #f2f2f2;
}

#zakaznici tr:hover {
  background-color: #ddd;
}

#zakaznici th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<title>Page Title</title>
</head>
<body>

<h2>Vyber dotaz</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Dotaz:  
  <select name = "vyberVolby" value="<?php echo $comment;?>">
  <option selected="selected" value="Dotaz0">Select...</option>
    <option value="Dotaz1">Dotaz1</option>
    <option value="Dotaz2">Dotaz2</option>
    <option value="Dotaz3">Dotaz3</option>
    <option value="Dotaz4">Dotaz4</option>
    <option value="Dotaz5">Dotaz5</option>
    <option value="Dotaz6">Dotaz6</option>
</select> 
  <br><br>
  <input type="submit" name="submit" value="Odeslat dotaz">  
</form>

</body>
</html>

<?php
$servername = "localhost";
$username = "civrny";
$password = "Martas83";
$databaze = "civrny";
$volba = "";

if(isset($_POST["vyberVolby"]))
{
  $volba = $_POST["vyberVolby"];
  echo $volba;
  echo "<br><br>";
}  

// Create connection
$conn = new mysqli($servername, $username, $password, $databaze);

// Check connection
if ($conn->connect_error) 
{
    die("Pøipojení selhalo: " . $conn->connect_error);
} 

switch ($volba) 
{
    case "Dotaz0":
        $sqlDotaz = "SELECT * FROM seznam";        
        break;
        
    case "Dotaz1":
        $sqlDotaz = "SELECT * FROM seznam ORDER BY cislo_zajezdu ASC";
        break;
    
    case "Dotaz2":
        $sqlDotaz = "SELECT * FROM seznam WHERE jmeno = 'Helena'";
        break;
        
    case "Dotaz3":
        $sqlDotaz = "SELECT * FROM seznam WHERE prijmeni LIKE 'M%'";
        break;
        
    case "Dotaz4":
        $sqlDotaz = "SELECT * FROM seznam WHERE cislo_zajezdu BETWEEN 200862 AND 200865";
        break;
        
    case "Dotaz5":
        $sqlDotaz = "SELECT * FROM seznam WHERE datum BETWEEN '1945-1-1' AND '1946-1-1' ORDER BY datum ASC";
        break;
        
    case "Dotaz6":
        $sqlDotaz = "SELECT * FROM seznam WHERE cislo_zajezdu = '200870' ORDER BY datum ASC LIMIT 10";
        break;
        
    default:  $sqlDotaz = "SELECT * FROM seznam"; 
}



$result = $conn->query($sqlDotaz);

if ($result->num_rows > 0) 
{
    echo "<table id='zakaznici'>
            <tr>
              <th>ID</th>
              <th>Jméno zákazníka</th>
              <th>Èíslo zájezdu</th>
              <th>Datum objednání</th>
            </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr> <td>" . $row["id"] . "</td> <td>" . $row["jmeno"] . " " . $row["prijmeni"] . "</td> <td>" . $row["cislo_zajezdu"] . "</td> <td>" . $row["datum"] . "</td></tr>";
    }
    echo "</table>";
}

else 
{
    echo "0 results";
}

$conn->close();

?>
