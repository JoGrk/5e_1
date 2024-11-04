<?php 
$conn = new mysqli('localhost', 'root', '', '5e_1_podzespoly');
$sql = "SELECT nazwa, cena FROM podzespoly";
$result = $conn -> query($sql);
$podzespoly = $result->fetch_all(1);
$conn -> close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kacper Kaczmarek</h1>
    <ul>
    <?php
    foreach($podzespoly as $podzespol){
        echo "<li><b> {$podzespol['nazwa']}</b>
         {$podzespol['cena']}</li>";
    }
    ?>
    </ul>
    <form action="dodawanie.php" method="post">
        <label for="typy_id">Wprowadź typ: </label><br>
        <input type="text" name="typy_id" id="typy_id"><br>
        <label for="price">Podaj cene: </label><br>
        <input type="number" name="price" id="price"><br>
        <label for="name">Podaj nazwę: </label><br>
        <input type="text" name="name" id="name">
        <br><button>Wyslij</button>
    </form>
</body>
</html>