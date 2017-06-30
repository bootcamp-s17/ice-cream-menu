--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.7
-- Dumped by pg_dump version 9.5.7

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: item_types; Type: TABLE; Schema: public; Owner: icecream
--

CREATE TABLE item_types (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);


ALTER TABLE item_types OWNER TO icecream;

--
-- Name: item_types_id_seq; Type: SEQUENCE; Schema: public; Owner: icecream
--

CREATE SEQUENCE item_types_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE item_types_id_seq OWNER TO icecream;

--
-- Name: item_types_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: icecream
--

ALTER SEQUENCE item_types_id_seq OWNED BY item_types.id;


--
-- Name: menu_items; Type: TABLE; Schema: public; Owner: icecream
--

CREATE TABLE menu_items (
    id integer NOT NULL,
    item_type_id integer,
    name character varying(100) NOT NULL,
    description text NOT NULL,
    price numeric(4,2) NOT NULL
);


ALTER TABLE menu_items OWNER TO icecream;

--
-- Name: menu_items_id_seq; Type: SEQUENCE; Schema: public; Owner: icecream
--

CREATE SEQUENCE menu_items_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE menu_items_id_seq OWNER TO icecream;

--
-- Name: menu_items_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: icecream
--

ALTER SEQUENCE menu_items_id_seq OWNED BY menu_items.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY item_types ALTER COLUMN id SET DEFAULT nextval('item_types_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY menu_items ALTER COLUMN id SET DEFAULT nextval('menu_items_id_seq'::regclass);


--
-- Data for Name: item_types; Type: TABLE DATA; Schema: public; Owner: icecream
--

COPY item_types (id, name) FROM stdin;
5	Regular Ice Cream
6	Seasonal Bad Ass Ice Cream
7	Fantastic Toppings
8	Super Options
\.


--
-- Name: item_types_id_seq; Type: SEQUENCE SET; Schema: public; Owner: icecream
--

SELECT pg_catalog.setval('item_types_id_seq', 8, true);


--
-- Data for Name: menu_items; Type: TABLE DATA; Schema: public; Owner: icecream
--

COPY menu_items (id, item_type_id, name, description, price) FROM stdin;
10	7	Marys Magic Brownie Bits	Small Pieces Of Marys Popular Brownies	5.00
11	7	Pecans	Delicious Pecan Bits	1.00
12	8	Waffle Cone	Served In A Delicious Waffle Cone	1.00
13	8	Shot of Tequila	Served With A Side Of Tequila Because Why Not	4.00
14	8	A Side Of Heisenbergs Blue Sky 	Add Walter Whites Infamous Treat	10.00
7	6	Easter Bunny Poo	Remember how awesome chocolate easter bunnies tasted when you were a kid? No? That's because they were awful. Not Easter Bunny Poo, it's amazing.	10.00
1	5	Chocolate	1 Scoop of Chocolate Ice Cream - Boring	3.00
2	5	Vanilla	1 Scoop of Vanilla Ice Cream - Also Boring	3.00
3	5	Strawberry	1 Scoop of Strawberry Ice Cream - You Guessed It, Boring	3.00
4	6	EggNog	Straight out of Mrs. Clause's kitchen.	4.00
8	6	Mary Janes Favorite Brownie	It has brownies in it. The title has Mary Jane in it. What more do you need to know?	20.00
9	7	Magic Sprinkles	A Favorite With College Students and junkies everywhere.	5.00
\.


--
-- Name: menu_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: icecream
--

SELECT pg_catalog.setval('menu_items_id_seq', 14, true);


--
-- Name: item_types_pkey; Type: CONSTRAINT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY item_types
    ADD CONSTRAINT item_types_pkey PRIMARY KEY (id);


--
-- Name: menu_items_pkey; Type: CONSTRAINT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_pkey PRIMARY KEY (id);


--
-- Name: menu_items_item_type_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_item_type_id_fkey FOREIGN KEY (item_type_id) REFERENCES item_types(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

