<!-- 
 1.formularz: dodający nowego autora -> obsługa w pliku dodawanie.php


2. formularz usuwający czytelnika -> obsługa w pliku usuwanie.php

3.lista rozwiajana wyświetlająca kategorie i następnie ksiązki z danej kategorii
 -->
<?php
    $conn = new mysqli('localhost','root','','5e_2_biblioteka');
    
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h2>Dodawanie autora</h2>
   <form action="dodawanie.php" method ="post">
    
    <input type="text" name="firstname" id="firstname" placeholder="podaj imie">
    <input type="text" name="surrname" id="surrname" placeholder="podaj nazwisko">

    <button>Dodaj</button>

   </form>

    <h2>Usuwanie użytkownika</h2>

   <form action="usuwanie.php" method="post">
    <input type="text" name="firstname"
    placeholder="podaj imie">
    <input type="text" name="surrname" id="surrname" placeholder="podaj nazwisko">

    <button>Usuń</button>
   </form>
 </body>
 </html>
 <?php
$conn -> close();
?>