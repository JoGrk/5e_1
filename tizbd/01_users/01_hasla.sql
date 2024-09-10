-- 1. Utwórz użytkowników jeden i dwa (bez hasła).
CREATE USER jeden1
CREATE USER dwa2
--  A. Nadaj uprawnienia wprowadzania, zmiany i usuwania danych w całej bazie komis dla użytkownika jeden
GRANT SELECT, DELETE, INSERT, UPDATE ON 4e_1_komis.* TO 'jeden1'
-- B. nadaj wszystkie uprawnienia do tabeli Auta użytkownikowi dwa
GRANT ALL ON 4e_1_komis.Auta TO dwa2;
-- C. odbierz użytkownikowi jeden prawa usuwania danych 
REVOKE DELETE ON 4e_1_komis.* FROM 'jeden1'
-- D. odbierz wszystkie uprawnienia użytkownikowi dwa do tabeli Auta
REVOKE ALL ON 4e_1_komis.Auta FROM 'dwa2'
-- 2. 
-- A. Zaloguj się jako użytkownik jeden i ustaw hasło 'zaq1@WSX'
SET PASSWORD = PASSWORD("zaq1@WSX");
-- B. Ustaw hasło dla użytkownika dwa na 'zaq1@WSX'
SET PASSWORD = PASSWORD('zaq1@WSX');
-- C. z poziomu konta root zmień hasło dla użytkownika jeden na 'haslo'
mysql -u root
SET PASSWORD for 'jeden1'= PASSWORD('haslo');

ALTER USER 'jeden'@'localhost' identified by 'haslo';