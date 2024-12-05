<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php 
    $name = $_COOKIE['name'] ?? null;
    if(!$name) {
        echo "
        <form action='' method='POST'>
            <input type='text' name='name'>
            <button>Dodaj</button>
        </form>
        ";
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $imie = $_POST['name'];
            setcookie("name",$imie,time()+10);
        }
    }else {
        if($name) {
            echo "Imie: $imie";
            setcookie("name",$imie,time()+10);
        }
    }
    ?>

</body>
</html>