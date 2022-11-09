<?php
print_r($_POST);
if(isset($_POST['name1'])){
    echo ($_POST['name1']);
}
if(isset($_POST['name2'])){
    echo ($_POST['name2']);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
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
<body>
<?php if($_SERVER["REQUEST_METHOD"] == "GET"){  ?>
<form action="11uzd.php?name1" method="post">
<?php

?>
Player1: <input type="text" name="name1"><br>
Player2: <input type="text" name="name2"><br>
<button type="submit">PRADETI</button>
</form>
<?php
}
?>

<?php if($_SERVER["REQUEST_METHOD"] == "POST"){  ?>
<form action="11uzd.php" method="get">
<?php

?>
Player1: <?php $name1 ?>
<button type="submit">MESTI KAULIUKA</button>
</form>
<?php
}
?>
</body>
</html>