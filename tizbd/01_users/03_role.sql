
CREATE DATABASE crm_1;

USE crm_1;

CREATE TABLE customers(
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL, 
    last_name VARCHAR(255) NOT NULL, 
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(255)
);

INSERT INTO customers(first_name,last_name,phone,email) VALUES('John','Doe','(408)-987-7654','john.doe@mysqltutorial.org'), ('Lily','Bush','(408)-987-7985','lily.bush@mysqltutorial.org');



--1 Utwórz użytkowników: dev1 z hasłem 1234 oraz read1, write1 bez hasła  (dev2, read2, write2)
CREATE USER dev1 IDENTIFIED BY '1234';
CREATE USER read1;
CREATE USER write1;
--1 Zmodyfikuj ustawienia kont:
-- A. hasło dla użytkownika dev powinno wygasnąć za miesiąc
ALTER USER dev1 
PASSWORD EXPIRE INTERVAL 30 DAY;
-- B. zablokuj konto read
ALTER USER read1
ACCOUNT LOCK;
-- C. ustaw hasło dla konta write
ALTER USER write1 IDENTIFIED BY '1234';
-- D. użytkownik write powinien mieć prawo tylko do 100 operacji UPDATE na godzinę
ALTER USER write1 
WITH MAX_UPDATES_PER_HOUR 100;
-- E. odblokuj konto read
ALTER USER read1
ACCOUNT UNLOCK;

-- 3.Określ uprawnienia:

-- A. Nadaj wszystkie prawa dla użytkownika dev dla wszystkich tabel w bazie crm

GRANT ALL ON crm_1.* TO dev1; 

-- B. Daj prawo użytkownikowi write do modyfikowania struktury tabel w bazie crm

GRANT ALTER ON crm_1.* TO write1;

-- C. daj prawo użytkownikowi read do przeglądania oraz usuwania danych w tabeli customers w bazie crm
GRANT SELECT, DELETE ON crm_1.customers TO read1;


-- 4. Odbierz użytkownikowi read prawo do przeglądania danych w tabeli customers
REVOKE SELECT ON crm_1.customers FROM read1;


-- 5. Zmień nazwę użytkownika dev na admin
RENAME USER dev1 TO admin1; 


-- 6. Ustaw hasło użytkownikowi read '1234' (użyj set password)
SET PASSWORD FOR 'read1'= PASSWORD('1234');

-- 7. Sprawdź uprawnienia:

-- A. użytkownika admin
SHOW GRANTS FOR admin1;
-- B. użytkownika write
SHOW GRANTS FOR write1;
-- 8. Utwórz role write_customers oraz read_customers

CREATE ROLE write_customers, read_customers;

-- 9. Nadaj uprawnienia rolom:

-- A. write_customers prawa do wstawiania oraz modyfikowania wybranych rekordów
GRANT insert, update, select ON crm_1.customers TO write_customers;
-- B. read_customers z prawem do przeglądania tabeli customers
GRANT SELECT ON crm_1.customers to read_customers;

-- 10. Przypisz role użytkownikom:

-- write_customers dla write
-- read_customers dla read

GRANT write_customers to write1;
GRANT read_customers to read1;

jarmula smierdzi hehehehehehehehe
-- 11. Sprawdź uprawnienia:

-- użytkownika write
show GRANTS for write1;
-- użytkownika read (czy ma prawo do usuwania danych?)

show GRANTS for read1;
-- roli write_customers;
show GRANTS for write_customers;
-- roli read_customers
show GRANTS for read_customers; 
-- 12. Zaloguj się jako read i sprawdź uprawnienia.

-- czy użytkownik read ma prawo do przeglądania danych?
-- jeśli jest taka potrzeba użyj SET ROLE aby "włączyć" rolę
-- czy użytkownik read ma prawo do usunięcia klienta o id 1
DELETE FROM customers WHERE id = 1;

-- 12. Z poziomu root ustaw jako domyślną rolę write_customers dla użytkownika write  (SET DEFAULT ROLE)
SET DEFAULT ROLE write_customers
FOR write1;

-- 13. Zaloguj się jako write i sprawdź, czy możesz zmienić nazwisko klienta o id=2 na Tree 

-- 14. Usuń

-- A. rolę write_customers
DROP ROLE write_customers;
-- B. Usuń użytkownika read
DROP ROLE write_customers;