DROP TABLE IF EXISTS category;
CREATE TABLE category
    (
        category_id     int(10) not null auto_increment,
        name            varchar(20),
        description     varchar(140),
        primary key (category_id)
    );


INSERT INTO category VALUES (NULL, 'Appetizer', "Hors d'oeuvre and other fine dishes, served before or during your meal");
INSERT INTO category VALUES (NULL, 'Main Course', "Our entrees feature that classic comfort foods");
INSERT INTO category VALUES (NULL, 'Dessert', "Conclude your meal with a delicious confection");
INSERT INTO category VALUES (NULL, 'Beverage', "Warm and cold beverages");


