<?php
    $conn = new mysqli('localhost','root','','5e_2_dania');
    $sql = "SELECT id,nazwa FROM typy_dan";
    $result = $conn->query($sql);
    $typy_dan = $result -> fetch_all(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <select name="typ_dania" id="typ_dania">
            <!-- <option value="2">Napoje</option> -->
            <?php
            foreach($typy_dan as $typ_dania){
                echo "<option value='{$typ_dania['id']}'>
                        {$typ_dania['nazwa']}
                     </option>";
            }
            ?>
        </select>
         
    </form>

    <ul>
        <?php
            if(!empty($_POST['typ_dania'])){
                $typ_dania = $_POST['typ_dania'];
                $sql2 = "SELECT nazwa, cena FROM dania
                        WHERE typ=$typ_dania";
                $result = $conn->query($sql2);
                $dania = $result -> fetch_all(1);

                foreach($dania as $danie){
                    echo "<li>";
                    echo "{$danie['nazwa']} {$danie['cena']}";
                    echo "</li>";
                }
            }
        ?>
    </ul>>
</body>
</html>
<?php
    $conn -> close();
?>