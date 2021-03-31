<html>
    <head> <title> Result </title> </head>
    <body>
        
        <?php
            if(isset($_POST["name"])){
                $name = $_POST["name"];
            }
            else{
                print "Your name is empty!!";
                $name = "no name";
            }
            if(isset($_POST["mssv"])){
                $mssv = $_POST["mssv"];
            }
            else{
                print "Your student code is empty!!";
                $mssv = "don't have";
            }
            if(isset($_POST["class"])){
                $class = $_POST["class"];
            }
            else{
                print "Your class is null!!";
                $class = "null";
            }
            if(isset($_POST["uni"])){
                $uni = $_POST["uni"];
            }
            else{
                print "Your university is null!!";
                $uni = "null";
            }
            print "Hello, $name - $mssv <br> You are studying at $class, $uni <br>";
            echo "Your Hobbies are: <br>";
            echo "<ol>";
            foreach ($_POST['checkboxName'] as $value){
                echo "<li>$value</li>";
            }
            echo "</ol>";
            if(isset($_POST["num"])){
                if($_POST["num"] == 34){
                    print "<br> congratulation to you on winning the give away. <br> contact us from exercise@gmail.com to claim reward. Thank You!!";
                }
            }
        ?>
    </body>
</html>
