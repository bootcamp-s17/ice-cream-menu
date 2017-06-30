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
-- Name: item_types; Type: TABLE; Schema: public; Owner: dreamycreamy
--

CREATE TABLE item_types (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);


ALTER TABLE item_types OWNER TO dreamycreamy;

--
-- Name: item_types_id_seq; Type: SEQUENCE; Schema: public; Owner: dreamycreamy
--

CREATE SEQUENCE item_types_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE item_types_id_seq OWNER TO dreamycreamy;

--
-- Name: item_types_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: dreamycreamy
--

ALTER SEQUENCE item_types_id_seq OWNED BY item_types.id;


--
-- Name: menu_items; Type: TABLE; Schema: public; Owner: dreamycreamy
--

CREATE TABLE menu_items (
    id integer NOT NULL,
    item_type_id integer,
    cream_name character varying(100) NOT NULL,
    description text NOT NULL,
    price numeric(19,2) NOT NULL
);


ALTER TABLE menu_items OWNER TO dreamycreamy;

--
-- Name: menu_items_id_seq; Type: SEQUENCE; Schema: public; Owner: dreamycreamy
--

CREATE SEQUENCE menu_items_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE menu_items_id_seq OWNER TO dreamycreamy;

--
-- Name: menu_items_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: dreamycreamy
--

ALTER SEQUENCE menu_items_id_seq OWNED BY menu_items.id;


--
-- Name: item_types id; Type: DEFAULT; Schema: public; Owner: dreamycreamy
--

ALTER TABLE ONLY item_types ALTER COLUMN id SET DEFAULT nextval('item_types_id_seq'::regclass);


--
-- Name: menu_items id; Type: DEFAULT; Schema: public; Owner: dreamycreamy
--

ALTER TABLE ONLY menu_items ALTER COLUMN id SET DEFAULT nextval('menu_items_id_seq'::regclass);


--
-- Data for Name: item_types; Type: TABLE DATA; Schema: public; Owner: dreamycreamy
--

COPY item_types (id, name) FROM stdin;
6	Flavors
7	Seasonal Flavors
8	Toppings
9	Serving Options
\.


--
-- Name: item_types_id_seq; Type: SEQUENCE SET; Schema: public; Owner: dreamycreamy
--

SELECT pg_catalog.setval('item_types_id_seq', 9, true);


--
-- Data for Name: menu_items; Type: TABLE DATA; Schema: public; Owner: dreamycreamy
--

COPY menu_items (id, item_type_id, cream_name, description, price) FROM stdin;
1	6	Chocolate	A classic flavor that isnt that bad	3.50
2	6	Vanilla	Bland flavor for bland people	3.50
3	6	Strawberry	Healthy flavor, unhealthy product	2.50
4	6	Mint	Its okay, I guess	2.50
5	7	Peppermint	Vanilla ice cream + ground up mints we stole	4.50
7	8	Chocolate Sauce	A good way to screw up your diet even more	0.75
8	8	Whipped Cream	A different type of dream cream	0.75
10	8	Sprinkles	Makes you look like a fun person even if you arent	0.50
11	9	Cone	Perfect for trusting your kid with	0.25
12	9	Cup	For ppl who dont know how to eat ice cream properly	0.75
13	9	Ground	Youre saving money	0.00
6	7	Pumpkin Spice	Goes well with uggs and North Face	4.50
\.


--
-- Name: menu_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: dreamycreamy
--

SELECT pg_catalog.setval('menu_items_id_seq', 13, true);


--
-- Name: item_types item_types_pkey; Type: CONSTRAINT; Schema: public; Owner: dreamycreamy
--

ALTER TABLE ONLY item_types
    ADD CONSTRAINT item_types_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_pkey; Type: CONSTRAINT; Schema: public; Owner: dreamycreamy
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_item_type_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: dreamycreamy
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_item_type_id_fkey FOREIGN KEY (item_type_id) REFERENCES item_types(id);


--
-- PostgreSQL database dump complete
--

