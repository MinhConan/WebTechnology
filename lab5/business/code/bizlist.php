<html><head><title>query</title>
<style>
.item2 { grid-area: menu; }
.item3 { grid-area: main; }


.grid-container {
  display: grid;
  grid-template-areas:
    'menu main main ';
  grid-gap: 10px;
  padding: 10px;
}

.grid-container > div {
  
  text-align: center;
  padding: 20px 0;

}
</style>
</head>
<body>
<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'business_service';
$table_name = 'categories';
$connect = mysql_connect($server, $user, $pass);

if (!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    
    if (isset($_GET['cate'])) {
        $cateid=$_GET['cate'];
        $SQLcmd = "SELECT  * FROM  businesses, biz_categories
                        Where businesses.BusinessID = biz_categories.BusinessID
                           AND biz_categories.CategoryID = '$cateid'";
        
        mysql_select_db($mydb);
        $bizlist =mysql_query($SQLcmd, $connect);
        
    }
    
    $SQLcmd = "SELECT  * FROM  $table_name";
    
mysql_select_db($mydb);
$result =mysql_query($SQLcmd, $connect);



mysql_close($connect);
}
?>
<h1>Business List  </h1>
<form  action="">
	<div class="grid-container">
		<div class="item2">
    		<label for="cate">Click on a category to find businesses list:</label>
    		</br>
    		<select id="cate"  name="cate"  >
    		    <?php 
    		          while($row = mysql_fetch_assoc($result)){
    		              echo "<option value=\"". $row['CategoryID'] . "\">". $row['Title'] ."</option>";
                    }
    		    ?>

    		</select><br><br>
		</div>
  <div class="item3">
	<table>
		<tr><td>ID</td><td>Name</td><td>Address</td><td>City</td><td>Telephone</td><td>URL</td><td>CategoryID</td></tr>
		<?php 
		while($row = mysql_fetch_assoc($bizlist)){
		    
		    echo "<tr><td>";
		    echo $row['BusinessID'];
            echo "</td><td>";
            echo $row['Name'];
            echo "</td><td>";
            echo $row['Address'];
            echo "</td><td>";
            echo $row['City'];
            echo "</td><td>";
            echo $row['Telephone'];
            echo "</td><td>";
            echo $row['URL'];
            echo "</td><td>";
            echo $row['CategoryID'];
            echo "</td></tr>";
		}
		  
		?>

			
		</table>
</div>  

</div>
<input type="SUBMIT" value="submit">
</form>

</body>