<html><head><title>query</title></head>
<body>
<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'mydatabase';
$table_name = 'Products';
$desc=$_GET["itemDesc"]; $weight=$_GET["weight"];$cost=$_GET["cost"];$num=$_GET["num"];
$connect = mysql_connect($server, $user, $pass);

if (!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    $SQLcmd = "SELECT  * FROM  Products";
    
mysql_select_db($mydb);
$result =mysql_query($SQLcmd, $connect);
//print($result);
if($result){
    echo "<H1>Products list</H1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Product_desc</th>";
    echo "<th>Cost</th>";
    echo "<th>Weight</th>";
    echo "<th>Numb</th>";
    echo "</tr>";
    while($row = mysql_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['ProductID'] . "</td>";
        echo "<td>" . $row['Product_desc'] . "</td>";
        echo "<td>" . $row['Cost'] . "</td>";
        echo "<td>" . $row['Weight'] . "</td>";
        echo "<td>" . $row['Numb'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    die ("select Failed SQLcmd=$SQLcmd");
}
mysql_close($connect);
}
?>
