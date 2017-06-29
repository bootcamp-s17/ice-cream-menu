# Wampa's Ice Cream Cavern

In psql or pgAdmin (as your local admin user):

  CREATE USER wampa WITH PASSWORD 'lukesnack';

  CREATE DATABASE wampa_dev OWNER wampa;

As the 'wampa' user in PSequel or pgAdmin:

  Create the tables you'll need for the menu data:

    CREATE TABLE item_types (
        id serial PRIMARY KEY,
        name varchar(100) NOT NULL
    );

    CREATE TABLE menu_items (
        id serial PRIMARY KEY,
        item_type_id INTEGER REFERENCES item_types,
        name varchar(100) NOT NULL,
        description text NOT NULL,
        price NUMERIC(4,2) NOT NULL
    );

  Seed them with appropriate data:

    INSERT INTO item_types (name) VALUES ('Regular Ice Cream Flavors');

    INSERT INTO item_types (name) VALUES ('Seasonal Ice Cream Flavors');

    INSERT INTO item_types (name) VALUES ('Serving Options');

    INSERT INTO item_types (name) VALUES ('Toppings');

    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Regular Ice Cream Flavors'), 'Imperial Chocolate', 'A flavor enjoyed throughout the galaxy...OR ELSE', 2.00);

    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Regular Ice Cream Flavors'), 'Vanil la Resistance', 'We know you love it', 2.00);

    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Regular Ice Cream Flavors'), 'Strawstraw Berry', 'Cutting to the heart of this off-world classic', 2.00);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Seasonal Ice Cream Flavors'), 'Kessel Run', 'Only here for 12 parsecs!', 3.00);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Seasonal Ice Cream Flavors'), 'Millenium Malcolm', 'Because our other fandom is ''Serenity''', 3);
        
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Serving Options'), 'Jedi', 'A waffle cone imbued with the power of The Force', 2.00);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Serving Options'), 'Sith', 'A dark paper cup made of fear, anger, and hate', 0.00);

    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Toppings'), 'Carbonite Shell', 'Preserve your treat indefinitely', 2.75);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Toppings'), 'Chewie''s Caramel Sauce', 'Nobody knows caramel like a wookiee', 1.50);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Toppings'), 'Starfield Sprinkles', 'Straight from hyperspace', 0.75);