<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $licznik = $_COOKIE['licznikodwiedzin']??1;
    if(!isset($_COOKIE['imie'])){
        echo " <form action='' Method='post'>
            <input type='text' name='imie' placeholder='podaj imie' >
            <button>Wyślij</button>
            </form>";
        $imie=$_POST['imie'];
        setcookie('imie',$imie,time()+10);
        setcookie('licznikodwiedzin',$licznik,time()+10);
    }else{
        $imie=$_COOKIE['imie'];
        setcookie('licznikodwiedzin',$licznik+1,time()+10);
        $ile=$_COOKIE['licznikodwiedzin'];
        echo"Witaj użytkowniku $imie jesteś na naszej stronie $ile raz";
        setcookie('imie',$imie,time()+10);
    }
    ?>
  
    
    
</body>
</html>