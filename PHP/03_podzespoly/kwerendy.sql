INSERT INTO podzespoly (typy_id,nazwa,cena)
values(5,'6600rx',1500);

SELECT nazwa, cena FROM podzespoly;

SELECT MAX(cena),typy_id
FROM podzespoly
group by typy_id;

SELECT nazwa, kategoria
FROM podzespoly
    INNER JOIN typy ON podzespoly.typy_id = typy.id;

    
SELECT nazwa, kategoria, cena, podzespoly.id as podzespoly_id
FROM podzespoly
    INNER JOIN typy ON podzespoly.typy_id = typy.id;

DELETE FROM podzespoly
    WHERE id = 4;