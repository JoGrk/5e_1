<?php 
            $conn =new mysqli('localhost','root','','rzeki');
            $sql ="SELECT nazwa,rzeka,stanOstrzegawczy,stanAlarmowy,stanWody 
            FROM wodowskazy 
            INNER JOIN pomiary ON wodowskazy.id = pomiary.wodowskazy_id
            WHERE dataPomiaru = '2022-05-05'";
            $result = $conn -> query($sql);
            $measurments_all = $result -> fetch_all(1);

            $sql2 ="SELECT nazwa,rzeka,stanOstrzegawczy,stanAlarmowy,stanWody 
            FROM wodowskazy 
            INNER JOIN pomiary ON wodowskazy.id = pomiary.wodowskazy_id
            WHERE dataPomiaru = '2022-05-05' AND stanWody > stanOstrzegawczy";
            $result = $conn -> query($sql2);
            $measurments_warning = $result -> fetch_all(1);

            $sql3 ="SELECT nazwa,rzeka,stanOstrzegawczy,stanAlarmowy,stanWody 
            FROM wodowskazy 
            INNER JOIN pomiary ON wodowskazy.id = pomiary.wodowskazy_id
            WHERE dataPomiaru = '2022-05-05' AND stanWody > stanAlarmowy";
            $result = $conn -> query($sql3);
            $measurments_alarm = $result -> fetch_all(1);
            

            ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
    <section class="blok1">
        <img src="obraz1.png" alt="Mapa Polski">
    </section>
    <section class ="blok2">
        <h1>Rzeki w województwie</h1>
    </section>
    </header>

    <section class="menu">
        <form method="post">
            <label for="option" class="stan">Wszystkie</label>
            <input type="radio" name="option" value="all" >
            <label for="option" class="stan">Ponad stan ostrzegawczy</label>
            <input type="radio" name="option" value="warning">
            <label for="option" class="stan">Ponad stan alarmowy</label>
            <input type="radio" name="option" value="alarm">
            <button>Pokaż</button>
           
        </form>
       
    </section>

    
       <main>
       <section class="left">
            <h3>Stan na dzień 2022-05-05</h3>
            <table>
                <tr>
                    <th>Wodomierz</th>
                    <th>Rzeka</th>
                    <th>Ostrzegawczy</th>
                    <th>Alarmowy</th>
                    <th>Aktualny</th>
                </tr>
                <?php 
           if(!empty($_POST['option']))
           {
            $option =$_POST['option'];
            if($option=="all"){
                foreach($measurments_all as $meas){
                    echo "<tr> ";
                    foreach($meas as $me)
                    {
                        echo "<td>$me </td>";
                    }
                    echo "</tr>";
                    
                }

            }
            else if($option =="warning"){
                foreach($measurments_warning as $meas2){
                    echo "<tr> ";
                    foreach($meas2 as $me2)
                    {
                        echo "<td>$me2 </td>";
                    }
                    echo "</tr>";
                    
                }
            }
            else
            foreach($measurments_alarm as $meas3){
                echo "<tr> ";
                foreach($meas3 as $me3)
                {
                    echo "<td>$me3 </td>";
                }
                echo "</tr>";
                
            }
           }
            ?>
            </table>
        </section>
        <section class="right">
            <h3>Informacje</h3>
            <ul>
                <li>Brak ostrzeżeń o burzach z gradem</li>
                <li>Smog w mieście Wrocław</li>
                <li>Silny wiatr w Karkonoszach</li>
            </ul>
            <h3>Średni stan wód</h3>
            <!-- skrypt2 -->
             <a href="https://komunikaty.pl">Dowiedz się Więcej</a>
             <img src="obraz2.jpg" alt="rzeka">
        </section>
       </main>
    
    
    <footer>
        <p>Stronę wykonał : XXXX</p>
    </footer>
</body>
</html>
<?php 

$conn ->close();
?>