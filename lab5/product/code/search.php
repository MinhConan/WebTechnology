<html><head><title>query</title></head>
<body>
<form action="" method="GET">
		<table>
			<tr>
				<td>Enter Product to search : </td>
				<td><input type="text" size="10" maxlength="15" name="itemDesc"></td>
			</tr>
			<tr>
				<td align="right"><input type="SUBMIT" value="Submit"></td>
			</tr>
			
		</table>
	</form>


<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'mydatabase';
$table_name = 'Products';
if(isset($_GET["itemDesc"]))
    $desc=$_GET["itemDesc"]; 
$connect = mysql_connect($server, $user, $pass);

if (!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    $SQLcmd = "SELECT  * FROM  Products
                WHERE Product_desc='$desc'";
    
mysql_select_db($mydb);
$result =mysql_query($SQLcmd, $connect);
//print($result);
if(isset($_GET["itemDesc"])){
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
} 
mysql_close($connect);
}
?>
