<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jedryszek do Nauki!!!</title>
</head>
<body>
    <!-- Formularz z listą wydawnictw jako checkbox - można wybrać kilka wartości. Wyświetla książki z danego wydawnictwa (imie, nazwisko, tytul) w postaci bloków o rozmiarze 200px x 100 px, imię i nazwisko autora, tytuł poniżej. Formularz na 1/3 szerokości ekranu, klocuszki na reszcie -->

    <form action="">
        <ul>

            <?php
                $conn = new mysqli('localhost', 'root',' ','biblioteka');
                $sql = 'SELECT id, nazwa FROM wydawnictwa';
                
                $result = $conn -> query($sql);
                $rows = $result -> fetch_all(1);
                
                echo "<ul>"
                foreach ($rows as $row) {
                    echo "<label for=""></label>";
                    echo "<input type='checkbox' name='".$row['imie ']"' id='".$row['id']"'>";
                }
                echo "<ul/>"
                $conn -> close()
            ?>
        </ul>
    </form>


</body>
</html>