SELECT adres_sklepu, AVG(cena) as srednia_cena FROM sklep_informacje INNER JOIN sklep_magazyn ON sklep_informacje.id_sklepu = sklep_magazyn.id_sklepu INNER JOIN zabawka_informacje ON sklep_magazyn.id_zabawki = zabawka_informacje.id_zabawki GROUP BY adres_sklepu;

SELECT adres_sklepu, zabawka, stan_magazynu
FROM sklep_informacje
    INNER JOIN sklep_magazyn ON sklep_informacje.id_sklepu = sklep_magazyn.id_sklepu
    INNER JOIN zabawka_informacje ON sklep_magazyn.id_zabawki = zabawka_informacje.id_zabawki;