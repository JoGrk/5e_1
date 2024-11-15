CREATE DATABASE if not exists 5e_1_vod;
use 5e_1_vod;
CREATE TABLE if not exists klienci(
    pesel char(11),
    imie varchar(25),
    nazwisko varchar(25)
);
LOAD DATA INFILE 'C:\\xampp\\htdocs\\5e_1\\tizbd\\05_widoki\\klienci.txt'
INTO TABLE klienci 
FIELDS TERMINATED BY '\t'
IGNORE 1 LINES;
5.
create index inx_wypozyczenia on wypozyczenia(Data_wyp);
create index inx_filmy on filmy(Tytul);

6.
SELECT tytul, kraj_produkcji, gatunek FROM filmy
INTO OUTFILE 'C:\\xampp\\htdocs\\5e_1\\tizbd\\05_widoki\\filmy.csv'
FIELDS TERMINATED BY ';';


7. 
CREATE VIEW FilmyWypozyczenia AS 
SELECT filmy.id_filmu, tytul, kraj_produkcji, data_wyp
FROM filmy 
INNER JOIN wypozyczenia ON filmy.ID_filmu = wypozyczenia.ID_filmu;

8.
SELECT tytul FROM filmy
WHERE id_filmu NOT IN (SELECT id_filmu FROM FilmyWypozyczenia);