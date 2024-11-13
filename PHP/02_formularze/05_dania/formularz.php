<?php
    $conn = new mysqli('localhost','root','','5e_2_dania');
    $sql = "SELECT id,nazwa FROM typy_dan";
    $result = $conn->query($sql);
    $typy_dan = $result->fetch_all(1); 
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
    <form action="dodawanie.php" method="Post">
            <label for="nazwa">Nazwa dania:</label>
            <input type="text" name="nazwa" id="nazwa"> <br> <br>
            <label for="cena">Cena dania:</label>
            <input type="text" name="cena" id="cena"> <br> <br>
            <p>Wybierz typ dania:</p>
            <!-- <label>
                <input type="radio" name="typ" value="1">
                Główne
            </label> <br> -->
            
            
            <?php
                foreach($typy_dan as $typ_dania){
                    echo "
                       <label>
                        <input type='radio' name='typ'
                        value='{$typ_dania['id']}'>
                        {$typ_dania['nazwa']}
                        </label> <br> 
                    ";
                }

            ?>
            <button>Wyślij</button>
    </form>
</body>
</html>