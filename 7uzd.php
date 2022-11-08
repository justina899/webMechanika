<?php
echo $_SERVER["REQUEST_METHOD"];
function getColor() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: ./7uzd.php");
        die;
       
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET"){
        $color = "#00ff9d";
    }
    return $color;
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
<body style="background-color: <?php echo getColor()?>;">

<form action="7uzd.php" method="get">
<button type="submit">button GET green</button>
</form>

<form action="7uzd.php" method="post">
<button type="submit">button POST yellow</button>
</form>
    
</body>
</html>