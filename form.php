<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form_style.css">
    <title>php-strong-password-generator-FORM</title>
</head>
<body>
    <div class="container">
        <div class="form_box">
            <form action="result.php" method="GET">
                <label for="psw_length"> Insert the password length desired</label><br>
                <input type="number" id="psw_length" name="userPswLength"><br><br>

                <label for="lowercase">Lowercase?</label><br>
                <input type="checkbox" id="lowercase" name="userLowerCase" value="qwertyuiopasdfghjklzxcvbnm"><br><br>

                <label for="uppercase">Uppercase?</label><br>
                <input type="checkbox" id="uppercase" name="userUpperCase" value="QWERTYUIOPASDFGHJKLZXCVBNM"><br><br>

                <label for="numbers"> Numbers?</label><br>
                <input type="checkbox" id="numbers" name="userNumbers" value="1234567890"><br><br>

                <label for="specialC"> Special characters?</label><br>
                <input type="checkbox" id="specialC" name="userSpecialC" value="!|£$%&/()=?^+-*.:_;<>"><br><br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    
</body>
</html>