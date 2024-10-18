-- 1. Wykonaj kopię logiczną bazy biblioteka w postaci pliku z poleceniami sql (zrzut bazy danych, dump) na dwa sposoby:

-- A. z poziomu wiersza poleceń
mysqldump -u root biblioteka > biblioteka.sql
-- B. korzystając z  phpMyAdmin
 


-- 2.
-- A. Wykonaj z wiersza poleceń (mysqldump) kopię tabeli Komputery z bazy centrum  w postaci pliku z poleceniami sql . Pokaż, jak wygląda taki pliki w notatniku.
mysqldump -u root biblioteka autorzy > autorzy.sql
-- B. Zaloguj się do bazy i za pomocą zapytania SQL usuń tabelę Rezerwacje.
-- C. Odtwórz tabelę z kopii. 
 mysql -u root biblioteka < autorzy.sql

-- 3. 

 

-- A. Wyświetl pomoc dla polecenia mysqldump (jak w linuksie --help ). 
-- B. Pokaż na zrzucie jaka opcja odpowiada za wykonanie kopii wszystkich baz danych 
-- C. Użyj tej opcji do wykonania kopii całości swoich baz
mysqldump -u root --all-databases > databases.sql