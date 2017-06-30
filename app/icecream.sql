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
-- Name: item_types; Type: TABLE; Schema: public; Owner: vanilla
--

CREATE TABLE item_types (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);


ALTER TABLE item_types OWNER TO vanilla;

--
-- Name: item_types_id_seq; Type: SEQUENCE; Schema: public; Owner: vanilla
--

CREATE SEQUENCE item_types_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE item_types_id_seq OWNER TO vanilla;

--
-- Name: item_types_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: vanilla
--

ALTER SEQUENCE item_types_id_seq OWNED BY item_types.id;


--
-- Name: menu_items; Type: TABLE; Schema: public; Owner: vanilla
--

CREATE TABLE menu_items (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    price integer,
    description text,
    item_type_id integer
);


ALTER TABLE menu_items OWNER TO vanilla;

--
-- Name: menu_items_id_seq; Type: SEQUENCE; Schema: public; Owner: vanilla
--

CREATE SEQUENCE menu_items_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE menu_items_id_seq OWNER TO vanilla;

--
-- Name: menu_items_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: vanilla
--

ALTER SEQUENCE menu_items_id_seq OWNED BY menu_items.id;


--
-- Name: item_types id; Type: DEFAULT; Schema: public; Owner: vanilla
--

ALTER TABLE ONLY item_types ALTER COLUMN id SET DEFAULT nextval('item_types_id_seq'::regclass);


--
-- Name: menu_items id; Type: DEFAULT; Schema: public; Owner: vanilla
--

ALTER TABLE ONLY menu_items ALTER COLUMN id SET DEFAULT nextval('menu_items_id_seq'::regclass);


--
-- Data for Name: item_types; Type: TABLE DATA; Schema: public; Owner: vanilla
--

COPY item_types (id, name) FROM stdin;
1	Regular Flavors
2	Seasonal Flavors 
3	Topping
4	Serving Option
\.


--
-- Name: item_types_id_seq; Type: SEQUENCE SET; Schema: public; Owner: vanilla
--

SELECT pg_catalog.setval('item_types_id_seq', 4, true);


--
-- Data for Name: menu_items; Type: TABLE DATA; Schema: public; Owner: vanilla
--

COPY menu_items (id, name, price, description, item_type_id) FROM stdin;
1	Chocolate	3	A delicious blend of the finest choclates into a smorgasbord of creamy goodness. 	1
2	Peppermint 	4	You'll feel like a candy cane slapped in you the face and you loved it. 	2
3	Rainbow Sprinkles 	1	Made fresh from the tears of unicorns. 	3
7	Strawberry 	3	Plucked fresh every day by the finest strawberry eleves we could find 	1
4	Waffle Cone 	2	The most waffely waffle cone you'll ever eat. 	4
8	Chocolate Chip 	3	Chip De Chocoloate'	1
5	L2klbs	4	The perfect combination of sarcasm, sass and just a  touch of despair all on cone. You'll hate yourself with every bite but you'll keep coming back. 	2
10	Chocolate Syrup 	1	A chocolate stream of ooey goodness. 	3
11	Cake Cone	2	Not really made with cake.	4
12	Sugar Cone 	2	Made with real sugar. 	4
9	Marshmallow	1	Freshly scopped snowman poop. 	3
6	Vanilla 	3	We import our vanilla straight from the heavens to your cone. 	1
\.


--
-- Name: menu_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: vanilla
--

SELECT pg_catalog.setval('menu_items_id_seq', 12, true);


--
-- Name: item_types item_types_pkey; Type: CONSTRAINT; Schema: public; Owner: vanilla
--

ALTER TABLE ONLY item_types
    ADD CONSTRAINT item_types_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_pkey; Type: CONSTRAINT; Schema: public; Owner: vanilla
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_item_type_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: vanilla
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_item_type_id_fkey FOREIGN KEY (item_type_id) REFERENCES item_types(id);


--
-- PostgreSQL database dump complete
--

