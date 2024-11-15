-- 3. Z poziomu wiersza poleceń zaimportuj dane do tabeli oceny
LOAD DATA INFILE 'C:\\xampp\\htdocs\\5e_1\\tizbd\\04_widoki\\03_szkola\\oceny.txt'
INTO TABLE oceny
FIELDS TERMINATED BY ';'
IGNORE 1 LINES; 

-- 4.  zaimportuj tabelę uczniowie oraz przedmioty  z poziomu phpMyAdmin 

-- 5. utwórz skrypt, który:

-- doda do tabeli oceny pole idOceny,
-- określi klucz podstawowy na tym polu, pole typu całkowitego, autonumerowane.
-- doda do tabeli przedmioty indeks na polu nazwaPrzedmiotu
-- doda do tabeli uczniowie indeks na polach nazwisko i imie
-- Wykonaj skrypt dowolną techniką.

-- 6.  Z poziomu wiersza poleceń wyeksportuj z tabeli uczniowie imiona, nazwiska i idKlasy do pliku uczniowie.csv, dane oddziel znakiem tabulatora. Na zrzucie pokaż też początek zawartości pliku uczniowie.csv (otwórz w notatniku lub podobnym programie)
SELECT imie, nazwisko, idKlasy 
from uczniowie 
into outfile 'C:\\xampp\\htdocs\\5e_1\\tizbd\\04_widoki\\03_szkola\\uczniowie.csv'
FIELDS TERMINATED by '\t';

-- 7. Utwórz widok OcenyUczniowie z polami idUcznia, imie, nazwisko, idKlasy, ocena
CREATE VIEW OcenyUczniowie AS
SELECT oceny.idUcznia, imie, nazwisko, idKlasy, ocena FROM oceny
    INNER JOIN uczniowie ON uczniowie.idUcznia = oceny.idUcznia;
-- 8. Korzystając z widoku wyświetl nazwisko, imię, klasę oraz średnią ocen osoby, która osiągnęła najwyższą średnią ocen w całej szkole

-- 9. usuń indeks z tabeli przedmioty

-- 10. Utwórz widok przedmiotySrednie obliczający średnią ocenę dla każdego idPrzedmiotu

-- 11. Korzystając z widoku przedmiotySrednie i tabeli przedmioty wyświetl nazwy dwóch przedmiotów, które mają najwyższe średnie