-- 1. Utwórz tabelę countries z polami: country_id, country_name i  region_id. Tabela powinna być utworzona tylko wtedy, gdy nie istnieje.
CREATE TABLE countries(
    country_id INT,
    country_name text,
    region_id INT
);
-- 2. Utwórz tabelę dump_countries będącą kopią tabeli countries (struktura i dane)
CREATE TABLE dump_countries as
SELECT * FROM countries;

-- 3. Z tabeli dump_countries usuń pole region_id
ALTER TABLE dump_countries
DROP region_id;
-- 4. Pole country_id powinno być kluczem podstawowym z autoinkrementacją
ALTER TABLE countries
MODIFY country_id int primary key auto_increment;
-- 5. Zmień nazwę pola country_id na id_country

ALTER TABLE countries
CHANGE country_id  id_country INT;

-- 6. Pole country_name nie powinno być puste - dodaj odpowiedni warunek
ALTER TABLE countries
MODIFY country_name TEXT NOT NULL;
-- 7. Zmodyfikuj tabelę countries tak, aby tylko wybrane cztery kraje (wymyśl jakie) będą mogły byc wpisane do tej tabeli
ALTER TABLE countries
ADD constraint chk_countries CHECK (country_name IN ('Poland', 'Germany', 'USA'));
-- 8. Usuń tabelę dump_countries
DROP TABLE dump_countries;
-- 9. Utwórz tabelę jobs zawierajacą pola id_job, job_title, min_salary, max_salary, dodaj regułę, która sprawi, że max_salary nie przekroczy limitu 25000
CREATE TABLE jobs(
    id_job INT,
    job_title varchar(20),
    min_salary INT,
    max_salary INT CHECK (max_salary <= 25000)
);
-- 10. Do tabeli jobs dodaj warunek pilnujący, aby wartości w polu job_title się nie powtarzały
ALTER TABLE jobs
MODIFY job_title varchar(20) UNIQUE;
-- 11. Do tabeli jobs dodaj wartość domyślną na polu min_salary 8000 oraz wartość domyślną NULL na polu max_salary

ALTER TABLE jobs
MODIFY min_salary INT DEFAULT 8000;

ALTER TABLE jobs
ALTER max_salary SET DEFAULT NULL;

-- 12. Utwórz tabelę job_history z polami: employee_id, start_date, end_date, job_id  oraz department_id . Określ klucz podstawowy (zakładamy, że pracownik nie pracuje jednocześnie na więcej niż jednym stanowisku) 
CREATE TABLE job_history(
    employee_id INT,
    start_date DATE,
    end_date DATE,
    job_id INT,
    department_id INT,
    PRIMARY KEY (employee_id, start_date)
);
-- 13 zmodyfikuj tabelę job_history przesuwając pole job_id na początek tabeli
ALTER TABLE job_history
MODIFY job_id int FIRST;

-- -- 14. Do tabeli job_history dodaj klucz obcy na polu job_id
ALTER TABLE jobs 
MODIFY id_job INT PRIMARY KEY;
ALTER TABLE job_history
ADD FOREIGN KEY (job_id) REFERENCES jobs(id_job);

ALTER TABLE job_history
ADD CONSTRAINT ch_start_date
CHECK(start_date LIKE DATE_FORMAT(start_date,'%Y-%m-%D'));