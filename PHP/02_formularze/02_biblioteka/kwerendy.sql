SELECT tytul FROM czytelnicy
INNER JOIN wypozyczenia ON czytelnicy.id=wypozyczenia.id_czytelnik
INNER JOIN ksiazki ON wypozyczenia.id_ksiazka=ksiazki.id
WHERE imie='Adam' AND nazwisko='Milek';