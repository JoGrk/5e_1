<?php
$conn = new mysqli('localhost','root','','motory');
$sql1 = "SELECT nazwa, opis, poczatek, zrodlo 
FROM wycieczki 
INNER JOIN zdjecia ON zdjecia.id = wycieczki.zdjecia_id;";

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <img src="motor.png" alt="motocykl" class='motor'>
    <header><h1>Motocykle - moja pasja</h1></header>
    <main>
        <section class='left'>
            <h2>Gdzie pojechać?</h2>

        

            <?php
            $result = $conn->query($sql1);
            $rows = $result -> fetch_all(1);
            echo "<dl>";
            foreach ($rows as $row) {
                echo "<dt>{$row['nazwa']}, rozpoczyna się w {$row['poczatek']}  <a href='{$row['zrodlo']}.jpg'>Zobacz zdjecie</a></dt>
                    <dd>{$row['opis']}</dd>
                ";
            }
            echo "</dl>";
            ?>
        </section>
        <section class='right'>
            <div class='top'>
                <h2>Co kupić?</h2>
                <ol>
                    <li>Honda CBR125R</li>
                    <li>Yamaha YBR125</li>
                    <li>Honda VFR800i</li>
                    <li>Honda CBR1100XX</li>
                    <li>BMW R1200GS LC</li>
                </ol>
            </div>
            <div class='bottom'>
                <h2>Statystyki</h2>
                <p>Wpisanych wycieczek:
                <?php
                $sql2 = "SELECT count(id) as iloscWycieczek FROM wycieczki;";
                $result = $conn ->query($sql2);
                $rows = $result -> fetch_all(1);
                foreach ($rows as $row) {
                    echo "{$row['iloscWycieczek']}";
                }
                ?>
                </p>
                <p>Użytkowników forum: 200</p>
                <p>Przesłanych zdjęć: 1300</p>
            </div>
        </section>
    </main>
    <footer>Stronę wykonał: dfgl</footer>
</body>
</html>

<?php
$conn -> close();
?>