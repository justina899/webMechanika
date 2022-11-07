<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="blue.php">to blue</a>  
<?php 
//  header('Location: red.php');
//      exit();
header( "refresh:5;url=red.php" );
?>
</body>
</html>