

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // setcookie('ciastko', 'witam na stronie', time()+10);
        // if(isset($_COOKIE['ciastko']))
        //     echo $_COOKIE['ciastko'];

        // 
        if (!isset($_COOKIE['licznik'])) {
            setcookie('licznik',1,time()+15);
        }else{
            $licznik =  $_COOKIE['licznik'];
            setcookie('licznik',$licznik+1,time()+15);
            echo $_COOKIE['licznik'];
        }

    ?>
</body>
</html>