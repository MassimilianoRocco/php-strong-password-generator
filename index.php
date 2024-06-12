<?php
    $userLength = isset($_GET["userPswLength"]) ? $_GET["userPswLength"] : 0;

    $lowerCaseString = isset($_GET["userLowerCase"]) ? $_GET["userLowerCase"]: "";
    $upperCaseString = isset($_GET["userUpperCase"]) ? $_GET["userUpperCase"] : "" ;
    $numberString = isset($_GET["userNumbers"]) ? $_GET["userNumbers"] :"" ;
    $symbolString = isset($_GET["userSpecialC"]) ? $_GET["userSpecialC"]: "";

    $pswString = $lowerCaseString . $upperCaseString . $numberString . $symbolString;
    $pswShowedString = "";

    for($x=0; $x<$userLength; $x++){
        $randomIndex = rand(0, strlen($pswString)-1);
        $pswShowedString .= $pswString[$randomIndex];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="form_box">
            <form action="index.php" method="GET">
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
            
           
            <?php if($pswShowedString > 0){
                    echo "<p>".$pswShowedString."</p>";
                } 
            ?>
        </div>



    </div>
    
</body>
</html>