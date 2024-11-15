-- 5. utwórz skrypt, który:

-- doda do tabeli oceny pole idOceny,
-- określi klucz podstawowy na tym polu, pole typu całkowitego, autonumerowane.
-- doda do tabeli przedmioty indeks na polu nazwaPrzedmiotu
-- doda do tabeli uczniowie indeks na polach nazwisko i imie
-- Wykonaj skrypt dowolną techniką.

ALTER TABLE Oceny
ADD COLUMN idOceny int PRIMARY KEY AUTO_INCREMENT;
CREATE INDEX idx_nazwaPrzedmiotu on przedmioty (nazwaPrzedmiotu);
CREATE INDEX idx_imieNazwisko on uczniowie (nazwisko,imie);


-- Z poziomu wiersza poleceń wyeksportuj z tabeli uczniowie imiona, nazwiska i idKlasy do pliku uczniowie.csv, dane oddziel znakiem tabulatora. Na zrzucie pokaż też początek zawartości pliku uczniowie.csv (otwórz w notatniku lub podobnym programie)
