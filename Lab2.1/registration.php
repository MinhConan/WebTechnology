
<HTML>
    <HEAD> <TITLE>Email form test </TITLE> </HEAD>
    <BODY>
        <FORM action="actionpage.php"
              method="POST">
            First name: <INPUT type="text" size="12" maxlength="20" name="fname">
            
            Last name: <INPUT type="text" size="12" maxlength="20" name="lname">
            <br>
            <LABEL for="email">Email: </LABEL><br>
            <INPUT type="text" maxlength="20" name="email">
            <br>
            Password:<br> <INPUT type="password" name="psw">
            <br>
            Phone:<br> <INPUT type="number" name="phone">
            <br>
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday">
            <br>
            Gender: <br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            <BR>
            <INPUT TYPE="submit" value="Click to Submit">
            <INPUT TYPE="RESET" value="Erase and Restart">
        </FORM>
    </BODY>
</HTML>

