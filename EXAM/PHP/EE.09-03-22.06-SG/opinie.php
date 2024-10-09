<?php
    $conn => new mysqli('localhost', 'root', '', '5e_1_hurtownia');
        $sql = "SELECT zdjecie,imie,opinia 
FROM Klienci 
INNER JOIN opinie ON Klienci.id = opinie.klienci_id
WHERE typy_id IN (2,3)";
$result = $conn->query($sql);
$customers1 = $result->fetch_all(1);
$sql2 = "SELECT imie,nazwisko,punkty
FROM Klienci 
ORDER BY punkty DESC 
LIMIT 3";
$result2 = $conn->query($sql2);
$customers2 = $result2->fetch_all(1); 
    $conn -> close();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Hurtownia spożywcza</h1>
    </header>
    <main>
        <h2>Opinie naszych klientów</h2>
        <!-- skrypt 1 -->
         <?php
            foreach($customers1 as $customer1){
                echo ""
            }
         ?>
    </main>
    <footer>
        <div class="div1">
            <h3>
            Współpracują z nami
            </h3>
            <a href="http://sklep.pl/">Sklep 1</a>
        </div>
        <div class="div2">
            <h3>
                Nasi top klienci
            </h3>
            <ol>
                <!-- skrypt2 -->
            </ol>
        </div>
        <div class="div3">
            <h3>
                Skontaktuj się
            </h3>
        <p>Telefon: 111222333</p>
        </div>
        <div class="div4">
            <h3>
                Autor i jakiś numer tam
            </h3>
        </div>
    </footer>
</body>
</html>