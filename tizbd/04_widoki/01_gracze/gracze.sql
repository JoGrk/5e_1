-- 2 Przygotuj widok Gracze2018  ilu graczy dołączyło do gry w 2018 z poszczególnych krajów.

CREATE VIEW Gracze2018 AS
SELECT kraj, COUNT(*) AS ilosc 
FROM gracze
WHERE data_dolaczenia LIKE '2018%'
GROUP BY kraj;


-- 3. Korzystając z widoku Gracze2018 podaj 5 krajów, z których najwięcej graczy dołączyło do gry w 2018 roku. Dla każdego z tych krajów podaj liczbę graczy, którzy dołączyli w 2018 roku.
SELECT kraj
FROM Gracze2018
ORDER BY ilosc desc 
LIMIT  5;
-- 4. Utwórz widok klasyJednostki, który zawiera pola: id_jednostki, nazwa, sila, strzal.
CREATE VIEW klasyJednostki AS 
SELECT id_jednostki, jednostki.nazwa, sila, strzal
FROM jednostki
INNER JOIN klasy ON jednostki.nazwa = klasy.nazwa;

-- 5. Korzystając z widoku klasyJednostki  podaj sumę wartości pola strzał (strzal) dla każdej klasy jednostek, które mają „elf” jako część nazwy.

-- 6. Przygotuj widok Artylerzysci zawierający numery graczy, którzy mają jednostki o nazwie artylerzysta

-- 7. Podaj numery graczy, którzy nie mają artylerzystów (jednostek o nazwie artylerzysta). Numery podaj w porządku rosnącym (numery graczy, których nie ma w wyniku zwracanym przez Artylerzysci) (?)