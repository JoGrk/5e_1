<?php 
    $conn = new mysqli('localhost','root','','5e_1_raporty');

    $sql = "SELECT adres_sklepu, AVG(cena) as srednia_cena FROM sklep_informacje INNER JOIN sklep_magazyn ON sklep_informacje.id_sklepu = sklep_magazyn.id_sklepu INNER JOIN zabawka_informacje ON sklep_magazyn.id_zabawki = zabawka_informacje.id_zabawki GROUP BY adres_sklepu;";

    $result = $conn -> query($sql);
    
    $avg_price_toys = $result->fetch_all(1);
    $sql = "SELECT adres_sklepu, zabawka, stan_magazynu
    FROM sklep_informacje
    INNER JOIN sklep_magazyn ON sklep_informacje.id_sklepu = sklep_magazyn.id_sklepu
    INNER JOIN zabawka_informacje ON sklep_magazyn.id_zabawki = zabawka_informacje.id_zabawki;";

    $result = $conn -> query($sql);

    $stan_magazynu = $result->fetch_all(1);
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
    <ol>
        <?php
           foreach($avg_price_toys AS $avg_price_toy){
            echo "<li>";
            echo "<b> ".$avg_price_toy['adres_sklepu']."</b> ";
            echo $avg_price_toy['srednia_cena'];
            echo "</li>";
           }
        ?>
    </ol>

    <table>
        <?php
            foreach($stan_magazynu as $wiersz){
                
            }



        ?>
    </table>
</body>
</html>