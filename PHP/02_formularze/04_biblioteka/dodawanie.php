<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie</title>
</head>
<body>
    <?php
        $conn = new mysqli('localhost','root','','5e_2_biblioteka');
     if(!empty($_POST['firstname'])&&!empty($_POST['surrname'])){
        // sa dane
        $imie =$_POST['firstname'];
        $nazwisko =$_POST['surrname'];
        $sql ="INSERT INTO Autorzy 
            (imie,nazwisko)
            VALUES ( '$imie','$nazwisko'); ";
        if($conn ->query($sql))  {
            echo "autor został dodany";
        } 
        else{
            echo "Są jakieś problemy z dodaniem autora ";
        }
    }
    else{
        echo "brak danych";
    }

    ?>
</body>
</html>
<?php
$conn ->close();
?>