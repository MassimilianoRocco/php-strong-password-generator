<?php
$userLength = $_GET["userPswLength"];


$generalString = "qwertyuiopasdf1234567890ghjklzxcvbnmQW!|£$%&/()=?^+-*.:_;<>ERTYUIOPASDFGHJKLZXCVBNM";

$lowerCaseString = $_GET["userLowerCase"] ? $_GET["userLowerCase"]: "";
$upperCaseString = $_GET["userUpperCase"] ? $_GET["userUpperCase"] : "" ;
$numberString = $_GET["userNumbers"] ? $_GET["userNumbers"] :"" ;
$symbolString = $_GET["userSpecialC"] ? $_GET["userSpecialC"]: "CIAO";

$pswString = $lowerCaseString . $upperCaseString . $numberString . $symbolString;

// for($x=0; $x<$userLength; $x++){
//     $randomIndex = rand(1, strlen($generalString));
//     $pswString .= $generalString[$randomIndex];
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/result_style.css">
    <title>php-strong-password-generator-Result</title>
</head>
<body>
    <div class="container">
        <div class="psw_box">
            <p><?php echo $pswString ?></p>
        </div>
    </div>
</body>
</html>