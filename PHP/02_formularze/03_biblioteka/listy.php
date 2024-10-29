
<?php
    $conn = new mysqli('localhost', 'root', '','5e_2_biblioteka');
    $sql = "SELECT id, imie, nazwisko
        FROM autorzy;";
    $result = $conn -> query($sql);
    $authors = $result -> fetch_all(1);
    
    
    
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="author">Wybierz autora</label>
        <select name="author" id="id_author">
            <!-- <option value="3">Julian Tuwim</option> -->
            <?php
                foreach($authors as $author){
                    $id = $author['id'];
                    $imie = $author['imie'];
                    $nazwisko = $author['nazwisko'];
                    echo "<option value='$id'>$imie $nazwisko</option>";
                }
            ?>
        </select>
        <br><button>Wyślij</button>
    </form>
    <table>
        <tr>
            <th>tytul</th>
            <th>imie</th>
            <th>nazwisko</th>
        </tr>
        <?php

    if(!empty($_POST['author'])){
         $id = $_POST['author'];
        $sql2 ="SELECT imie, nazwisko, tytul
        FROM autorzy
        INNER JOIN ksiazki ON autorzy.id = ksiazki.id_autor
        WHERE id_autor = $id";

        $result2 = $conn ->query($sql2);
        $books = $result2 ->fetch_all(1);
        foreach($books as $book){
                echo"<tr>";
                echo"<td>{$book['tytul']}</td>";
                echo"<td>{$book['imie']}</td>";
                echo"<td>{$book['nazwisko']}</td>";
                echo"</tr>";
        }
    }
          
        ?>
    </table>
    
</body>
</html>
<?php

$conn -> close();

?>