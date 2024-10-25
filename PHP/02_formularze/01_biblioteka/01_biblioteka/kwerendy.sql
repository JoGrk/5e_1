insert into czytelnicy (imie, nazwisko, kod)
values ('Anna','Michalak','an05mi');

SELECT imie, nazwisko FROM czytelnicy;

SELECT tytul FROM ksiazki
WHERE id_autor = (SELECT id FROM autorzy WHERE nazwisko = 'Fredro');


SELECT nazwisko, COUNT(*) AS ilosc
FROM autorzy
INNER JOIN ksiazki ON autorzy.id = ksiazki.id_autor
GROUP BY nazwisko;






