truncate zawody;
truncate puchar;

LOAD DATA LOCAL INFILE 'C:\\xampp\\htdocs\\5e_1\\tizbd\\04_inport\\zawody.txt'
INTO TABLE zawody
FIELDS TERMINATED BY ';'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'C:\\xampp\\htdocs\\5e_1\\tizbd\\04_inport\\puchar.txt'
INTO TABLE puchar
FIELDS TERMINATED BY ';'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(id, miejsce, id_zawodnika, @wynik_I_serii, @wynik_II_serii, @nota,id_zawodow)
SET wynik_I_serii = REPLACE(@wynik_I_serii, ',', '.'),
wynik_II_serii = REPLACE(@wynik_II_serii, ',', '.'),
nota = REPLACE(@nota, ',', '.');

