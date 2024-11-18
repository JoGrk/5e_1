<?php
$conn = new mysqli('localhost', 'root', '', '5e_1_portal');
$sql = "SELECT COUNT(*) as ile FROM dane";
$result = $conn->query($sql);
$liczba_uzytkownikow_portalu=$result->fetch_all(1);



?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal spolecznosciowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <section class="header1">
            <h2>Nasze osiedle</h2>
            
        </section>
        <section class="header2">
            <h5>
                <?php
    foreach($liczba_uzytkownikow_portalu as $liczba){
        echo $liczba['ile'];
    }

            ?>  
            </h5>
        </section>
    </header>

    <main>
        <section class="left">
            <h3>Logowanie</h3>
            <form action="" method="post"><br>
                <label for="login">login</label><br>
                <input type="text" id = "login" name = "login"><br>

                <label for="password">Hasło</label>
                <input type="password" name="password" id="password"> <br>

                <button>Zaloguj</button>
                
            </form>
        </section>
        <section class="right">
            <h3>Wizytówka</h3>
            <div class="card">
                <?php 
                if (!empty($_POST['login']) && !empty($_POST['password'])){
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    $sql = "SELECT haslo FROM uzytkownicy
                            WHERE login = '$login'";
                    $result = $conn -> query($sql);
                    if ($result -> num_rows == 0) {
                        echo "Login nie istnieje";
                    }
                    else{
                        $row = $result -> fetch_assoc();
                        if(sha1($password) != $row['haslo']){
                            echo "haslo nieprawidłowe";
                        }
                    }


                }

                
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>Strone wykonał: ja</p>
    </footer>
</body>
</html>
<?php
$conn -> close();
?>