<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = new mysqli('localhost','root','','5e_2_dania');
        if(!empty($_POST['nazwa'])&&!empty($_POST['cena'])&&!empty($_POST['typ'])){
        $nazwa = $_POST['nazwa'];
        $cena = $_POST['cena'];
        $typ = $_POST['typ'];
        $sql = "INSERT INTO dania(
            typ, nazwa, cena
            )Values($typ,'$nazwa',$cena)";
        if($conn->query($sql)){
            echo "Danie $nazwa zostało dodane";
        } 
        };
    $conn -> close();
    ?>
</body>
</html>