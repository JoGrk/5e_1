
<?php
    $conn = new mysqli('localhost', 'root', '','kupauto');
    $sql ="SELECT model, rocznik, przebieg, paliwo, cena, zdjecie
FROM samochody
WHERE id=10;";
$result = $conn ->query($sql);
$cars = $result -> fetch_all(1);

$sql2 = "SELECT marki.nazwa, model, rocznik, cena, zdjecie
FROM samochody
INNER JOIN marki on samochody.marki_id=marki.id
LIMIT 4";
$result2 = $conn->query($sql2);
$cars2 = $result2->fetch_all(1);

$sql = "SELECT nazwa FROM marki;";
$res = $conn->query($sql);
$marki = $res->fetch_all(1);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis Aut</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1><strong><em>KupAuto!</em></strong> Internetowy Komis Samochodowy</h1>
    </header>

    <section id="main1">
        <!-- skrypt1 -->
         <?php
         foreach($cars as $car){
            echo "<img src='{$car['zdjecie']}' alt='Oferta dnia' >
            <h4>Oferta Dnia: Toyota {$car['model']}</h4>
            <p>
            Rocznik: {$car['rocznik']},
            przebieg: {$car['przebieg']}
            rodzaj paliwa: {$car['paliwo']}
            </p>
            <h4>Cena: {$car['cena']}</h4>
            ";

         }
         ?>
    </section>

    <section id="main2">
        <h2>Oferty Wyroznione</h2>
        <section class="flex">
        <!-- skrypt2 -->
         <?php
            foreach($cars2 as $car2){
                echo "
                <div class='block'>
                  <img src='{$car2['zdjecie']}' alt='{$car2['model']}'>
                  <h4>{$car2['nazwa']} {$car2['model']} </h4>
                  <p>Rocznik: {$car2['rocznik']}</p>
                  <h4>Cena: {$car2['cena']}</h4>
                 </div>
                ";
            }
         ?>
         </section>
    </section>

    <section id="main3">
        <h2>Wybierz marke</h2>
        <form action="" method="POST">
            <!-- skrypt3 -->
             <select name="marka" id="marka">
                <?php 
                    foreach($marki as $marka) {
                        echo "<option value='{$marka['nazwa']}'>{$marka['nazwa']}</option>";
                    }
                ?>
             </select>
             <button>Wyszukaj</button>
            
        </form>
         <!-- skrypt4 -->
          <section class="flex">
          <?php
          if(!empty($_POST['marka'])){
            $marka=$_POST['marka'];
            $sql4 ="SELECT model, cena, zdjecie
                FROM samochody
                INNER JOIN marki on samochody.marki_id=marki.id
                WHERE marki.nazwa='$marka';";
            $result4 = $conn ->query($sql4);
            $cars4 =$result4 ->fetch_all(1);
            foreach($cars4 as $car4){
                echo "
                <div class='block'>
                  <img src='{$car4['zdjecie']}' alt='{$car4['model']}'>
                  <h4>$marka {$car4['model']} </h4>
                  <h4>Cena: {$car4['cena']}</h4>
                 </div>
                ";
            }
          }
           ?>
        </section>
    </section>

    <footer>
        <p>Stronę wykonał: xxxx</p>
        <p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
    </footer>
</body>
</html>


<?php
    $conn -> close();
?>