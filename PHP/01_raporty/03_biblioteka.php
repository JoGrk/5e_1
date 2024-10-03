<?php
    $conn = new mysqli('localhost','root','','biblioteka');
    $sql = "SELECT nazwisko, COUNT(*) AS ile_tytulow 
FROM autorzy  
    INNER JOIN ksiazki ON autorzy.id = ksiazki.id_autor
GROUP BY nazwisko";
    $result = $conn->query($sql);
    $autors = $result->fetch_all(1);
    
    $sql2 = "SELECT imie, nazwisko
FROM autorzy 
ORDER BY nazwisko";
$result2 = $conn->query($sql2);
$authors_surname = $result2->fetch_all(1);

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
    <h2>Ilość książek</h2>
    <ul>
       <?php 
        foreach($autors as $autor){
            $nazwisko = $autor['nazwisko'];
            $tytuly = $autor['ile_tytulow'];
            echo "<li>$nazwisko $tytuly</li>";
        }
       ?>
    </ul>

    <h2>autorzy</h2>

    <table>
        <tr>
            <th>imie</th>
            <th>nazwisko</th>
        </tr>
        <?php
            foreach($authors_surname as $author_surname){
                echo "<tr>";
                echo "<td>".$author_surname['imie']."</td>";
                echo "<td>".$author_surname['nazwisko']."</td>";
                echo "</tr>";
            }

        ?>
    </table>

</body>
</html>