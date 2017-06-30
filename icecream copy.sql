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
-- Name: item_types; Type: TABLE; Schema: public; Owner: eyescream
--

CREATE TABLE item_types (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);


ALTER TABLE item_types OWNER TO eyescream;

--
-- Name: item_types_id_seq; Type: SEQUENCE; Schema: public; Owner: eyescream
--

CREATE SEQUENCE item_types_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE item_types_id_seq OWNER TO eyescream;

--
-- Name: item_types_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: eyescream
--

ALTER SEQUENCE item_types_id_seq OWNED BY item_types.id;


--
-- Name: menu_items; Type: TABLE; Schema: public; Owner: eyescream
--

CREATE TABLE menu_items (
    id integer NOT NULL,
    item_type_id integer,
    name character varying(100) NOT NULL,
    description text NOT NULL,
    price numeric(4,2) NOT NULL
);


ALTER TABLE menu_items OWNER TO eyescream;

--
-- Name: menu_items_id_seq; Type: SEQUENCE; Schema: public; Owner: eyescream
--

CREATE SEQUENCE menu_items_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE menu_items_id_seq OWNER TO eyescream;

--
-- Name: menu_items_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: eyescream
--

ALTER SEQUENCE menu_items_id_seq OWNED BY menu_items.id;


--
-- Name: item_types id; Type: DEFAULT; Schema: public; Owner: eyescream
--

ALTER TABLE ONLY item_types ALTER COLUMN id SET DEFAULT nextval('item_types_id_seq'::regclass);


--
-- Name: menu_items id; Type: DEFAULT; Schema: public; Owner: eyescream
--

ALTER TABLE ONLY menu_items ALTER COLUMN id SET DEFAULT nextval('menu_items_id_seq'::regclass);


--
-- Data for Name: item_types; Type: TABLE DATA; Schema: public; Owner: eyescream
--

COPY item_types (id, name) FROM stdin;
1	Regular Ice Cream Flavors
2	Seasonal Ice Cream Flavors
3	Serving Options
4	Toppings
\.


--
-- Name: item_types_id_seq; Type: SEQUENCE SET; Schema: public; Owner: eyescream
--

SELECT pg_catalog.setval('item_types_id_seq', 4, true);


--
-- Data for Name: menu_items; Type: TABLE DATA; Schema: public; Owner: eyescream
--

COPY menu_items (id, item_type_id, name, description, price) FROM stdin;
1	1	Chocolate	Loved by kids of all ages!	2.00
2	1	Vanilla	Elegant and understated	2.00
3	1	Strawberry	A taste of summer...anytime!	2.00
4	2	Salted Caramel	Buttery, creamy, smooth, and salty	3.00
5	2	Mandarin Orange Sherbert	Fresh and fruity, with bits of pulp	3.00
6	3	Waffle Cone	Made fresh by hand in our store each day	2.00
7	3	Cup	Plenty of room for toppings!	0.00
8	4	Hot Fudge	Rich, dark, and just sweet enough	2.75
9	4	Marshmallows	Hand-made the old-fashioned way	1.50
10	4	Rainbow Sprinkles	Like a million tiny little smiles	0.75
\.


--
-- Name: menu_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: eyescream
--

SELECT pg_catalog.setval('menu_items_id_seq', 10, true);


--
-- Name: item_types item_types_pkey; Type: CONSTRAINT; Schema: public; Owner: eyescream
--

ALTER TABLE ONLY item_types
    ADD CONSTRAINT item_types_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_pkey; Type: CONSTRAINT; Schema: public; Owner: eyescream
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_item_type_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: eyescream
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_item_type_id_fkey FOREIGN KEY (item_type_id) REFERENCES item_types(id);


--
-- PostgreSQL database dump complete
--

