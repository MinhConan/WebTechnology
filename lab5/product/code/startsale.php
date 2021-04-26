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
    $SQLcmd = "SELECT  ProductID, Product_desc FROM  Products";
    
mysql_select_db($mydb);
$result =mysql_query($SQLcmd, $connect);
//print($result);
?>    
	<form action="sale.php" method="GET">
    	<label for="desc">Choose a Product to sale:</label>
    	<select name="desc" id="desc" > 
    
<?php     
    while($row = mysql_fetch_assoc($result)){
        echo "<option value=\" " . $row['ProductID'] . "\">".$row['ProductID'].".". $row['Product_desc'] . "</option>";

    }
?>
    	</select>
    	</br>
    	<input type="SUBMIT" value="Submit">
    </form>
<?php 
mysql_close($connect);
}
?>
