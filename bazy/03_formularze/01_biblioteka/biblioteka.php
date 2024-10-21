<?php 
$conn = new mysqli('localhost', 'root','','5e_1_biblioteka');
$sql1="SELECT imie, nazwisko FROM czytelnicy;";
$res1=$conn->query($sql1);

$readers = $res1->fetch_all(1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Nasi czytelnicy</h3>
    
    <ul>
    <?php
    foreach($readers as $reader){
        echo "<li>"
                .$reader['imie']." ".$reader['nazwisko']
            ."</li>";

        // echo "<li>
        //          {$reader['imie']} {$reader['nazwisko']}
        //      </li>";

    }
    
    
    ?>
    </ul>
    
    


    <form method="post" action="biblioteka.php" >
        <label for="name">Imię: </label>
        <input type="text" name="name" id="name">
        <label for="surname">Nazwisko: </label>
        <input type="text" name="surname" id="surname">
        <label for="birthyear">Rok urodzenia:</label>
        <input type="number" name="birthyear" id="birthyear">
        <button type="submit">Dodaj</button>
    </form>

    <?php
        if (!empty($_POST['name'])&& !empty($_POST['surname'])
        && !empty($_POST['birthyear'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $birthyear = $_POST['birthyear'];
            $kod = substr($name,0,2).substr($birthyear,-2,2).substr($surname,0,2);
            $kod = strtolower($kod);
            $sql = "INSERT INTO czytelnicy (imie, nazwisko, kod)
            values ('$name','$surname','$kod');";
            if($conn->query($sql)){
                echo "Czytelnik $surname zostal dodany do bazy danych";
            }else{
                echo "napraw";
            };


        }else
        {
            echo "Uzupełnij dane.";
        }

    ?>

</body>
</html>
<?php
$conn -> close();
?>