/**
CREATE
 */

INSERT INTO users (name, email) VALUES ('John', "john@email.com");
INSERT INTO users SET name="Jane", email = "jane@somethjoin.com", age=15;

/**
READ
*/
SELECT * FROM users;
SELECT name,id FROM users;
SELECT name AS username, email AS mail FROM users;

SELECT * FROM users WHERE id = 2;
SELECT * FROM `users` WHERE role = "user";
SELECT * FROM `users` WHERE role = "user" AND name = "Marry"
SELECT * FROM `users` WHERE role = "user" OR role = "editor";
SELECT * FROM users WHERE role != "user";
SELECT * FROM users WHERE id > 2;
SELECT * FROM `users` WHERE name LIKE "Ma%";
SELECT * FROM `users` WHERE name LIKE "%a%";

SELECT * FROM users LIMIT 3;
SELECT * FROM users LIMIT 1, 4;

SELECT * FROM `users` ORDER BY name;
SELECT * FROM `users` ORDER BY name DESC;
SELECT * FROM `users` ORDER BY name DESC, email DESC;

SELECT DISTINCT role FROM users;

/**
UPDATE
*/

UPDATE users SET name="Beee" WHERE name="Marry";
UPDATE users SET email = "someemail@mail.com";

/**
DELETE
*/
DELETE FROM users WHERE id=2;