<!-- creating a table for the menu_items -->
CREATE TABLE menu_items(
    id serial PRIMARY key,
    item_type_id INTEGER REFERENCES item_types(id),
    name varchar(100) NOT null,
    description text NOT NULL
);
<!-- creating the contents of the tables to display in the browser -->
INSERT INTO menu_items (item_type_id, name, description) VALUES (4, 'cone','get the cone, you know it will be better');