<?php 
$conn = new mysqli('localhost','root','','egzamin');
$sql ="SELECT czas,kierunek,nr_rejsu, status_lotu
FROM przyloty";
$result = $conn ->query($sql);
$przyloty =$result ->fetch_all(1);


?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <section class="banner1">
            <img src="zad5.png" alt="logo lotnisko">
        </section>
        <section class="banner2">
            <h1>Przyloty</h1>
        </section>
        <section class="banner3">
            <h3>przydatne linki</h3>
            <a href="kwerendy.txt" target="blank">Pobierz</a>
        </section>
    </header>

    <main>
        <table>
            <tr>
                <th>CZAS</th>
                <th>KIERUNEK</th>
                <th>NUMER REJSU</th>
                <th>STATUS</th>
            </tr>
            <?php
            foreach($przyloty as $przylot){
                echo "<tr>";
                foreach($przylot as $pole){
                    echo "<td>$pole</td>";
                }
                echo " </tr>";
            }
            
            ?>
        </table>
    </main>

    <footer>
        <section class="footer1">
            <!-- skrytp2 -->
             <?php
             if(isset($_COOKIE['biscuits'])){
                echo "Witaj ponownie na stronie lotniska";

             }
             else{
                echo"<p>Dzień dobry! Strona lotniska używa ciasteczek";
                setcookie('biscuits',"bleh bleh",time()+2*60*60);
             }
             
             ?>
        </section>
        <section class="footer2">
            <p>Autor : XXXX</p>
        </section>
    </footer>
</body>
</html>


<?php
$conn ->close();
 ?>