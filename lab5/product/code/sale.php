<html><head><title>query</title></head>
<body>
<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'mydatabase';
$table_name = 'Products';
$productID=$_GET["desc"]; $numb;
$connect = mysql_connect($server, $user, $pass);

if (!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    mysql_select_db($mydb);
    $SQLcmd = "SELECT  Numb FROM  Products WHERE ProductID = $productID";
    $result = mysql_query($SQLcmd, $connect);
    
    while($row = mysql_fetch_assoc($result)) $numb=$row[Numb];
    $numb--;
    $SQLcmd = "UPDATE Products 
            SET Numb= $numb
            WHERE ProductID = $productID";
    
    
    
    if (mysql_query($SQLcmd, $connect)){
        print '<font size="4" color="blue" >Update';
        //print "<i>$table_name</i> in database<i>$mydb</i><br></font>";
        print "Successfully";
    } else {
        die ("Update Failed SQLcmd=$SQLcmd");
    }
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
