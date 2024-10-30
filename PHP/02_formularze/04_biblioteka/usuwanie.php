<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = new mysqli('localhost','root','','5e_2_biblioteka');
    if(!empty($_POST['firstname'])&&!empty($_POST['surname'])){
        $imie = $_POST['firstname'];
        $nazwisko = $_POST['surname'];
        $sql = "DELETE FROM Czytelnicy
        WHERE imie = '$imie' and nazwisko = '$nazwisko'";
        if($conn->query($sql)){
            echo "CZYTELNIK ZOSTAL USUNIETY";
        }else{
            echo "Uzytownik nie zostal usuniety - błąd"; 
        }
    }
    ?>
</body>
<?php
$conn->close();
?>
</html>