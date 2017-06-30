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
    price integer
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
-- Name: item_types id; Type: DEFAULT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY item_types ALTER COLUMN id SET DEFAULT nextval('item_types_id_seq'::regclass);


--
-- Name: menu_items id; Type: DEFAULT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY menu_items ALTER COLUMN id SET DEFAULT nextval('menu_items_id_seq'::regclass);


--
-- Data for Name: item_types; Type: TABLE DATA; Schema: public; Owner: icecream
--

COPY item_types (id, name) FROM stdin;
1	regular
2	seasonal
3	toppings
4	served
\.


--
-- Name: item_types_id_seq; Type: SEQUENCE SET; Schema: public; Owner: icecream
--

SELECT pg_catalog.setval('item_types_id_seq', 4, true);


--
-- Data for Name: menu_items; Type: TABLE DATA; Schema: public; Owner: icecream
--

COPY menu_items (id, item_type_id, name, description, price) FROM stdin;
1	1	chocolate	ummm its just chocolate ice cream	2
2	2	peppermint	minty fresh	4
7	1	strawberry	Okay, now were getting somewhere	2
8	1	neopolitan	WHOA! weve got a badass over here!	3
6	1	vanilla	you are a boring human	2
5	4	cup	Honestly, who wants to eat ice cream from a cup	0
4	4	cone	get the cone, you know it will be better	1
3	3	sprinkles	come on, who doesnt like sprinkles	1
9	2	pumpkin spice	What soroity are you in?	4
10	3	chocolate sauce	Pretty self explanatory	1
11	3	whipped cream	Again, pretty self explanatory	1
12	1	cookie dough	There is no other flavor!	5
\.


--
-- Name: menu_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: icecream
--

SELECT pg_catalog.setval('menu_items_id_seq', 12, true);


--
-- Name: item_types item_types_pkey; Type: CONSTRAINT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY item_types
    ADD CONSTRAINT item_types_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_pkey; Type: CONSTRAINT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_item_type_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: icecream
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_item_type_id_fkey FOREIGN KEY (item_type_id) REFERENCES item_types(id);


--
-- PostgreSQL database dump complete
--

