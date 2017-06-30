Completed:

In psql or pgAdmin (as your local admin user):

  CREATE USER icecream WITH PASSWORD 'nomnomnom';

  CREATE DATABASE icecreamdev_dev OWNER icecream;


As the 'icecream' user in PSequel or pgAdmin:

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

    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Regular Ice Cream Flavors'), 'Chocolate', 'Loved by kids of all ages!', 2.00);

    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Regular Ice Cream Flavors'), 'Vanilla', 'Elegant and understated', 2.00);

    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Regular Ice Cream Flavors'), 'Strawberry', 'A taste of summer...anytime!', 2.00);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Seasonal Ice Cream Flavors'), 'Salted Caramel', 'Buttery, creamy, smooth, and salty', 3.00);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Seasonal Ice Cream Flavors'), 'Mandarin Orange Sherbert', 'Fresh and fruity, with bits of pulp', 3);
        
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Serving Options'), 'Waffle Cone', 'Made fresh by hand in our store each day', 2.00);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Serving Options'), 'Cup', 'Plenty of room for toppings!', 0.00);

    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Toppings'), 'Hot Fudge', 'Rich, dark, and just sweet enough', 2.75);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Toppings'), 'Marshmallows', 'Hand-made the old-fashioned way', 1.50);
    
    INSERT INTO menu_items (item_type_id, name, description, price) VALUES ((SELECT id FROM item_types WHERE name='Toppings'), 'Rainbow Sprinkles', 'Like a million tiny little smiles', 0.75);


