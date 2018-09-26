CREATE DATABASE db-first;
CREATE TABLE books(
book_Id INT NOT NULL AUTO_INCREMENT,
title VARCHAR(50),
author1 VARCHAR(50),
author2 VARCHAR(50),
PRIMARY KEY (book_Id))
CHARACTER SET utf8;
INSERT INTO books VALUES(1, 'Золотые сказки', 'Александ Сергеевич Пушкин', ''),
(NULL, 'ASP.NET MVC 4', 'Джесс Чедвик', 'Тодд Снайдер'),
(NULL, 'LINQ. Язык интегрированных запросов', 'Адам Фримен', 'Джозеф С. Раттц'),
(NULL, 'Руслан и Людмила', 'Александ Сергеевич Пушкин', ''),
(NULL, 'Кавказский пленник', 'Александ Сергеевич Пушкин', ''),
(NULL, 'Борис Годунов', 'Александ Сергеевич Пушкин', ''),
(NULL, 'Пир во время чумы', 'Александ Сергеевич Пушкин', ''),
(NULL, 'Гробовщик', 'Александ Сергеевич Пушкин', ''),
(NULL, 'Сказки Старого Вильнюса', 'Макс Фрай', ''),
(NULL, 'Капитанская дочка', 'Александ Сергеевич Пушкин', ''),
(NULL, 'Реверс', 'Сергей Лукьяненко', 'Александр Громов');
CREATE TABLE authors (
author_Id INT NOT NULL AUTO_INCREMENT,
name)
SELECT author1 OR author2 COUNT(*) FROM books WHERE GROUP BY author1 HAVING COUNT(*)<7;