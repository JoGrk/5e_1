<?php
    $conn = new mysqli('localhost', 'root', '', 'terminarz');
    $sql1 = "SELECT DISTINCT wpis
    FROM zadania
    WHERE dataZadania BETWEEN '2020-07-01' AND '2020-07-07' AND wpis IS NOT NULL AND wpis != '';";
    $result1 = $conn->query($sql1);
    $tasks1 = $result1 -> fetch_all(1);
    $sql2 = "SELECT dataZadania, wpis 
    FROM zadania 
    WHERE miesiac = 'lipiec';";
    $result2 = $conn->query($sql2);
    $tasks2 = $result2->fetch_all(1);
    $conn -> close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <section id = "first">
            <img src="logo1.png" alt="lipiec">
        </section>
        <section id = "second">
            <h1>Terminarz</h1>
            <p>najbliższe zadania</p>
             <!-- skript1 -->
              <?php
              foreach($tasks1 as $task1) {
                echo $task1['wpis']."; ";
              }
              ?>
        </section>
    </header>
    <main>
        <!-- skrypt2 -->
         <?php
        foreach($tasks2 as $task2) {
            echo "<section class='calendar'>";
            echo "<h6>". $task2['dataZadania']. "</h6>";
            echo "<p>". $task2['wpis']. "</p>";
            echo "</section>";
          }
         ?>
    </main> 
    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: XYZ</p>
    </footer>
</body>
</html>