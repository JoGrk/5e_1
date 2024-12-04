-- author;title;publication_year;ISBN;rating;ratings_no;reviews_no;1_star;2_star;3_star;4_star;5_star;
CREATE TABLE books(
    author varchar(255),
    title varchar(255),
    publication_year int,
    ISBN varchar(15),
    rating dec(3,2),
    ratings_no int,
    reviews_no int,
    1_star int,
    2_star int,
    3_star int,
    4_star int,
    5_star int
);

LOAD DATA INFILE 'C:\\xampp\\htdocs\\5e_1\\tizbd\\05_case\\01_case\\ksiazki.csv'
INTO TABLE books
CHARACTER SET utf8
FIELDS TERMINATED BY ';'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(author,title,publication_year,ISBN,@rating,ratings_no,reviews_no,1_star,2_star,3_star,4_star,5_star)
SET rating = replace(@rating, ',','.');





1. Wyświetl rating, tytul i ocenę książki: jeśli rating jest > 4, to "dobra" , w przeciwnym wypadku "przeciętna", autora
SELECT 
    rating,
    title,
    CASE 
        WHEN rating > 4 THEN "dobra"
        WHEN rating <= 4 THEN "przeciętna"
    END as book_rating,
    author
FROM books;

2.  >4.2 bardzo dobra, pomiędzy 3.8 a 4.2 dobra, poniżej przeciętna
SELECT
    rating,
    title,
    CASE
        WHEN rating > 4.2 THEN "bardzo dobra"
        WHEN rating between 3.8 and 4.2 THEN "dobra"
        ELSE "przecietna"
    END as book_rating2,
    author
FROM books;
IF(warunek, wartość_jeśli_prawda , wartość_jeśli_fałsz)
3. to co w zadaniu 1, ale z wykorzystaniem instrukcji IF
SELECT 
    rating,
    title,
    IF (rating>4, "dobra", "przeciętna")
    as book_rating3,
    author
FROM books;
4. Ile mamy książek dobrych, ale ile mniej dobrych? (granicą niech będzie rating 4)
SELECT 
    count(*),
    IF (rating>4, "dobra", "przeciętna")
    as book_rating3
FROM books
GROUP BY book_rating3;