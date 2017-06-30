Eyes Cream Ghoulish Dessert Emporium

Setup process:
1) Read through instructions.md
2) Consider Humorous Ice Cream shop names
3)Decide basic layout of page
	a)using bootstrap cards
	b)Work up a quick mockup of placeholders
4) Login to postgres and create database and user
	- create database iceCreamShop owner postgres;
	- create user tracker with password 'track'; (I'm gonna blame pgAdmin troubles on this one)
5) Create Tables
	
	CREATE TABLE menu_items (
	id serial primary key,
	status varchar(50),
	flavor_name varchar(50),
	flavor_description varchar(100),
	price integer);
	
	CREATE TABLE add_ons (
	id serial primary key,
	addon_name varchar(50),
	addon_type varchar(50);

6) Added page to manage flavors
7) wrote functions to insert, update, and remove flavors
8) Included those into the main display menu
9) Added Card to manage toppings/containers
10) Wrote functions to insert, update and remove toppings/containers
11) Added those to the display menu
