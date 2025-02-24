-- 0. Dzēšam datu bāzi, ja tā jau eksistē
DROP DATABASE IF EXISTS fruits;

-- 1. Izveidojam jaunu datu bāzi
CREATE DATABASE fruits;

-- 2. Izvēlamies šo datu bāzi
USE fruits;

-- 3. Izveidojam 'fruits' tabulu
CREATE TABLE fruits (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40)
);

--  Pārbaudām, vai dati ir ievadīti pareizi
SELECT * FROM fruits;