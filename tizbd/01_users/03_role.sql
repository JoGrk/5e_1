
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

--3 Określ uprawnienia:
-- Nadaj wszystkie prawa dla użytkownika dev dla wszystkich tabel w bazie crm
-- Daj prawo użytkownikowi write do modyfikowania struktury tabel w bazie crm
-- daj prawo użytkownikowi read do przeglądania oraz usuwania danych w tabeli customers w bazie crm

--4 Odbierz użytkownikowi read prawo do przeglądania danych w tabeli customers

--5 Zmień nazwę użytkownika dev na admin

--6 Ustaw hasło użytkownikowi read '1234' (użyj set password)

-- 7 Sprawdź uprawnienia:
-- użytkownika admin
-- użytkownika write
-- Utwórz role write_customers oraz read_customers

--8 Nadaj uprawnienia rolom:
-- write_customers prawa do wstawiania oraz modyfikowania i usuwania wybranych rekordów
-- read_customers z prawem do przeglądania tabeli customers

-- 9 Przypisz role użytkownikom:
-- write_customers dla write
-- read_customers dla read

--10  Sprawdź uprawnienia:
-- użytkownika write
-- użytkownika read (czy ma prawo do usuwania danych?)

--11  Zaloguj się i sprawdź uprawnienia. Jeśli jest taka potrzeba użyj SET ROLE i/lub SET DEFAULT ROLE

--12 usuń rolę write_customers

--13 Usuń użytkownika read