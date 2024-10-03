SELECT nazwisko, COUNT(*) 
FROM autorzy  
    INNER JOIN ksiazki ON autorzy.id = ksiazki.id_autor
GROUP BY nazwisko; 

SELECT imie, nazwisko
FROM autorzy 
ORDER BY nazwisko;