<html><head><title>Create Table</title></head>
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
    $SQLcmd = "INSERT INTO Products(Product_desc, Cost, Weight, Numb)
                VALUES('$desc','$cost','$weight','$num')";
    
mysql_select_db($mydb);

if (mysql_query($SQLcmd, $connect)){
    print '<font size="4" color="blue" >INSERT INTO';
    print "<i>$table_name</i> in database<i>$mydb</i><br></font>";
    print "Successfully";
} else {
    die ("Insert Failed SQLcmd=$SQLcmd");
}
mysql_close($connect);
}
?>





</body>
</html>