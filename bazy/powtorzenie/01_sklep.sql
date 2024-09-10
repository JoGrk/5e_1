-- Utwórz tabele:

-- Producenci
--  kod całkowity, klucz podstawowy, autoinkrementacja
-- nazwa  tekst, pole nie może być puste

CREATE TABLE Producenci(
kod INT PRIMARY KEY AUTO_INCREMENT,
nazwa text NOT NULL); 

CREATE TABLE Produkty(
    kod INT PRIMARY KEY AUTO_INCREMENT,
    nazwa text NOT NULL,
    cena decimal (7,2),
    producent INT, 
    FOREIGN KEY (Producent) references Producenci(kod) 

);

-- Produkty
-- kod całkowite, klucz podstawowy,  autoinkrementacja
-- nazwa tekst, pole nie może puste
-- cena dwa miejsca po przecinku, przed przecinkiem 5 cyfr
-- producent całkowite, klucz obcy odwołujący się do pola kod w tabeli producenci
 


-- 1. Wyświetl nazwy wszystkich produktów|
SELECT nazwa FROM produkty;

-- 2. Wyświetl nazwy i ceny wszystkich produktów w sklepie 
SELECT nazwa,cena FROM produkty;

-- 3. Wyświetl nazwy produktów o cenie mniejszej lub równiej  $200.
SELECT nazwa 
FROM produkty 
WHERE cena <= 200; 
-- 4. Wyświetl wszystkie produkty o cenie pomiędzy $60 i $120.
SELECT cena, nazwa 
FROM produkty 
WHERE cena BETWEEN 60 AND 120;
-- 5. Wyświetl nazwy produktów i ceny w centach (tzn. pomnóż ceny przez 100) 
SELECT nazwa, cena*100
FROM produkty;
-- 6. Wyświetl średnią cenę wszystkich produktów 
SELECT AVG(cena) 
FROM produkty;

-- 7. Wyświetl średną ceną wszystkich produktów producenta o kodzie 2 
SELECT AVG(cena) 
FROM produkty 
WHERE kod = 2;
 

-- 8. Ile jest produktów o cenie większej lub równiej $180.

SELECT count(*) as ilos 
FROM produkty 
    WHERE cena >= 180;

-- 9. Wyświetl nazwy i ceny wszystkich produktów o cenie większej lub równej  $180, i posortuj je najpierw według ceny (rosnąco), a następnie według nazwy (malejąco) 
SELECT nazwa,cena 
from produkty
where cena >=180
order by cena ASC,nazwa DESC;

-- 10. Wyświetl wszystkie dane z z tabeli produkty oraz wszystkie dane z tabeli producenci 
SELECT * 
FROM produkty
    INNER JOIN producenci ON produkty.producent = producenci.kod;
-- 11. Wyświetl nazwę produktu, cenę i nazwę producenta dla wszystkich produktów 
SELECT produkty.nazwa, cena, producenci.nazwa
FROM produkty
INNER JOIN producenci ON produkty.producent = producenci.kod;
-- 12. Wyświetl średnią cenę produktów każdego producenta, pokazując tylko kod producenta

SELECT AVG(cena), producent
FROM produkty
GROUP BY producent;

-- 13. Wyświetl średnią cenę produktów każdego producenta, pokazując nazwę producenta 

SELECT AVG(cena), producenci.nazwa
FROM produkty
INNER JOIN producenci ON produkty.producent = producenci.kod
GROUP BY nazwa;
-- 14. Wyświetl nazwę każdego producenta, którego produkty mają średnią cenę większą lub równą $150
SELECT producenci.nazwa, AVG(cena)
FROM producenci
    INNER JOIN produkty ON produkty.producent = producenci.kod
GROUP BY producent
HAVING AVG(cena) >= 150;

-- 15. Wyświetl nazwę i cenę najtańszego produktu  (LIMIT lub podzapytanie)
SELECT nazwa, cena
FROM produkty
ORDER BY cena 
LIMIT 1;

SELECT nazwa,cena
from produkty
where cena = (SELECT MAX(cena) FROM produkty);

-- 16.Wyświetl nazwę każdego producenta razem z nazwą i ceną jego najdroższego produktu 
select produkty.nazwa, produkty.cena, producenci.nazwa
from producenci
inner join produkty on producenci.kod = produkty.producent
where produkty.cena =(
    select max(cena)
    from produkty
    where produkty.producent = producenci.kod
);


SELECT produkty.nazwa,produkty.cena,producenci.nazwa
FROM producenci
    INNER JOIN produkty ON producenci.kod = produkty.producent
WHERE cena = (
    SELECT MAX(cena) 
    FROM produkty p
    WHERE p.producent = producenci.kod  
    
);


-- 17. Dodaj nowy produkt:  Loudspeakers, $70, producent 2.
INSERT INTO produkty(nazwa, cena, producent)
VALUES ('Loudspeakers',70,2 );


-- 18. Zmień nazwę produktu o kodzie 8 na "Laser Printer".
UPDATE produkty
SET nazwa = "Laser Printer"
WHERE kod = 8;

-- 19. Wykonaj 10% przecenę każdego produktu 
UPDATE produkty
SET cena = 0.9*cena;
-- 20. Wykonaj 10% przecenę każdego produktu o cenie większej lub równiej $120.

UPDATE produkty
SET cena = 0.9*cena
WHERE cena >= 120;
