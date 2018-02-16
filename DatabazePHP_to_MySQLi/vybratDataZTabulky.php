
<!DOCTYPE html>
<html>
<head>
<style>
#zakaznici {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
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

</body>
</html>

<?php
$servername = "localhost";
$username = "civrny";
$password = "Martas83";
$databaze = "civrny";   

// Create connection
$conn = new mysqli($servername, $username, $password, $databaze);

// Check connection
if ($conn->connect_error) 
{
    die("Pøipojení selhalo: " . $conn->connect_error);
} 

$sqlDotaz = "SELECT * FROM seznam";

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