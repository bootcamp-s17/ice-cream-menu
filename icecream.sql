--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.3
-- Dumped by pg_dump version 9.6.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
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
-- Name: item_types; Type: TABLE; Schema: public; Owner: icecream_dev
--

CREATE TABLE item_types (
    id integer NOT NULL,
    item_type_name character varying(50) NOT NULL
);


ALTER TABLE item_types OWNER TO icecream_dev;

--
-- Name: item_types_id_seq; Type: SEQUENCE; Schema: public; Owner: icecream_dev
--

CREATE SEQUENCE item_types_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE item_types_id_seq OWNER TO icecream_dev;

--
-- Name: item_types_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: icecream_dev
--

ALTER SEQUENCE item_types_id_seq OWNED BY item_types.id;


--
-- Name: menu_items; Type: TABLE; Schema: public; Owner: icecream_dev
--

CREATE TABLE menu_items (
    id integer NOT NULL,
    item_type_id integer NOT NULL,
    menu_item_name character varying(50) NOT NULL,
    menu_item_desc character varying(140),
    menu_item_price numeric NOT NULL
);


ALTER TABLE menu_items OWNER TO icecream_dev;

--
-- Name: menu_items_id_seq; Type: SEQUENCE; Schema: public; Owner: icecream_dev
--

CREATE SEQUENCE menu_items_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE menu_items_id_seq OWNER TO icecream_dev;

--
-- Name: menu_items_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: icecream_dev
--

ALTER SEQUENCE menu_items_id_seq OWNED BY menu_items.id;


--
-- Name: item_types id; Type: DEFAULT; Schema: public; Owner: icecream_dev
--

ALTER TABLE ONLY item_types ALTER COLUMN id SET DEFAULT nextval('item_types_id_seq'::regclass);


--
-- Name: menu_items id; Type: DEFAULT; Schema: public; Owner: icecream_dev
--

ALTER TABLE ONLY menu_items ALTER COLUMN id SET DEFAULT nextval('menu_items_id_seq'::regclass);


--
-- Data for Name: item_types; Type: TABLE DATA; Schema: public; Owner: icecream_dev
--

COPY item_types (id, item_type_name) FROM stdin;
1	Regular Ice Cream Flavors
2	Seasonal Ice Cream Flavors
3	Serving Options
4	Toppings
\.


--
-- Name: item_types_id_seq; Type: SEQUENCE SET; Schema: public; Owner: icecream_dev
--

SELECT pg_catalog.setval('item_types_id_seq', 4, true);


--
-- Data for Name: menu_items; Type: TABLE DATA; Schema: public; Owner: icecream_dev
--

COPY menu_items (id, item_type_id, menu_item_name, menu_item_desc, menu_item_price) FROM stdin;
1	1	Imperial Chocolate	A flavor enjoyed throughout the galaxy...OR ELSE	2.00
2	1	Vanil la Resistance	We know you love it	2.00
3	1	Strawstraw Berry	Cutting to the heart of this off-world classic	2.00
4	2	Kessel Run	Only here for 12 parsecs!	3.00
5	2	Millenium Malcolm	Because our other fandom is 'Serenity'	3
6	3	Jedi	A waffle cone imbued with the power of The Force	2.00
7	3	Sith	A dark paper cup made of fear, anger, and hate	0.00
8	4	Carbonite Shell	Preserve your treat indefinitely	2.75
9	4	Chewie's Caramel Sauce	Nobody knows caramel like a wookiee	1.50
10	4	Starfield Sprinkles	Straight from hyperspace	0.75
\.


--
-- Name: menu_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: icecream_dev
--

SELECT pg_catalog.setval('menu_items_id_seq', 10, true);


--
-- Name: item_types item_types_item_type_name_key; Type: CONSTRAINT; Schema: public; Owner: icecream_dev
--

ALTER TABLE ONLY item_types
    ADD CONSTRAINT item_types_item_type_name_key UNIQUE (item_type_name);


--
-- Name: item_types item_types_pkey; Type: CONSTRAINT; Schema: public; Owner: icecream_dev
--

ALTER TABLE ONLY item_types
    ADD CONSTRAINT item_types_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_menu_item_name_key; Type: CONSTRAINT; Schema: public; Owner: icecream_dev
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_menu_item_name_key UNIQUE (menu_item_name);


--
-- Name: menu_items menu_items_pkey; Type: CONSTRAINT; Schema: public; Owner: icecream_dev
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

