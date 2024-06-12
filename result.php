<?php
$userLength = $_GET["userPswLength"];

$pswString = "";
for($x=0; $x<$userLength; $x++){
    $pswString .= "X";
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
    <p><?php echo $pswString ?></p>
</body>
</html>