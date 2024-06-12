<?php
$userLength = $_GET["userPswLength"];

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
    <link rel="stylesheet" href="./css/result_style.css">
    <title>php-strong-password-generator-Result</title>
</head>
<body>
    <div class="container">
        <div class="psw_box">
            <p><?php echo $pswShowedString ?></p>
        </div>
    </div>
</body>
</html>