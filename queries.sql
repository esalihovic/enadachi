-- list all available books
SELECT
    B.title as title,
    B.author as author,
    B.available as status 
FROM
    Book B
WHERE
    B.available = TRUE

-- list all books that were searched for a student
SELECT
    S.name as Student_name,
    B.title as title,
    B.author as author
FROM 
    Student S,
    Book B,
    Checks_availability_of CAO,
    Student S JOIN Book B
WHERE


-- list all the students that have searched for a specific book
SELECT
    B.title as Booktitle,
    S.name as name,
FROM 
    Student S,
    Book B,
    Checks_availability_of CAO,
    Student S JOIN Book B
WHERE
    