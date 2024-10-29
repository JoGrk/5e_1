
SELECT id, imie, nazwisko
FROM autorzy; 


SELECT imie, nazwisko, tytul
FROM autorzy
INNER JOIN ksiazki ON autorzy.id = ksiazki.id_autor
WHERE id_autor = 2;








