<?php

$conn = new mysqli('localhost', 'root', '', '5e_1_podzespoly')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!empty($_POST['price']) && !empty($_POST['typy_id']) && !empty($_POST['name'])){
        $price = $_POST['price'];
        $name = $_POST['name'];
        $typy_id = $_POST['typy_id'];

        $sql = "INSERT INTO podzespoly (typy_id,nazwa,cena)
        values($typy_id,'$name',$price)";
        if($conn->query($sql)){
            echo "podzespol $name zostal dodany";
        }

    }
    else{
        echo "Wprowadz dane";
    }

    $conn -> close();
    ?>
</body>
</html>