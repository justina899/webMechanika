<?php
if(isset($_POST['totalCount'])){
    echo "viso checkbox sugeneruota: " . $_POST['totalCount'] . "<br>";
}
if(isset($_POST['boxes'])){
    echo "pazymeta: " . count($_POST['boxes']);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $color = "black";
        $color2 = "white";
}elseif($_SERVER["REQUEST_METHOD"] == "POST"){
        $color = "white";
        $color2 = "black";
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
<body style="background-color:<?= $color ?>; color:<?= $color2 ?>"> 
<?php if($_SERVER["REQUEST_METHOD"] == "GET"){  ?>
    <form action="" method="post">
    <?php
        $checkbox = '<input type="checkbox" name="boxes[]" id="">';
        $letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K"];
        $times = rand(3,10);
        for ($i = 0; $i < $times; $i++){
            echo $checkbox . $letters[$i];
        }
        
        ?>
        <input type="hidden" name="totalCount" value="<?=$times?>">
        <button type="submit">button</button>
    </form>
<?php

}
?>

</body>
</html>