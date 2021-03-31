<html>
    <head> <title> Resistance </title> </head>
    <body>
        <font size="5">Thank You: Got your email.</font>
        <?php
            $name = $_POST["fname"] . $_POST["lname"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            print ("<br>Your email address is $email");
            print ("<br>Your phone is $phone");
        ?>
    </body>
</html>
