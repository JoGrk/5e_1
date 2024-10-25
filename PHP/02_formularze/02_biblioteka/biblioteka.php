<?php
    $conn = new mysqli('localhost','root','','5e_1_biblioteka');

    if(!empty($_POST['firstName']) && !empty($_POST['surname'])){
        $firstName = $_POST['firstName'];
        $surname = $_POST['surname'];


        $sql1 = "SELECT tytul FROM czytelnicy
        INNER JOIN wypozyczenia ON czytelnicy.id=wypozyczenia.id_czytelnik
        INNER JOIN ksiazki ON wypozyczenia.id_ksiazka=ksiazki.id
        WHERE imie='$firstName' AND nazwisko='$surname'";
        $result = $conn -> query($sql1);
        $books = $result -> fetch_all(1);

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
    <form method="post">
        <label for="firstName">Imie:</label>
        <input type="text" name="firstName" id="firstName">
        <label for="surname">Nazwisko:</label>
        <input type="text" name="surname" id="surname">
        <button>Wyślij</button>
    </form>
    <?php
        $foreach($books as $book)
    ?>
</body>
</html>