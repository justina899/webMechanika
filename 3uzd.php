<?php
$color = "black";
print_r($_GET);
if(isset( $_GET['color'] )){
    $color = $_GET['color'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#<?=$color?>">
<form action="3uzd.php" method="get">
Color: <input type="text" name="color"><br>
<button type="submit">submit</button>
</form>
</body>
</html>