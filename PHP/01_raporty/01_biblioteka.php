<?php 
        $conn = new mysqli('localhost','root','','biblioteka');
        $sql = "SELECT imie, nazwisko
        FROM autorzy
        ORDER BY nazwisko ASC";
        $result = $conn->query($sql);
        $autorzy = $result->fetch_all(1);
        $conn->close();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php 
            foreach ($autorzy as  $autor) {
                echo "<li>";
                echo $autor['imie']." ".$autor['nazwisko'];
                echo "</li>";
            }
        ?>
    </ol>
</body>
</html>