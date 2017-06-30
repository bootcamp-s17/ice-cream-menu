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
-- Name: add_ons; Type: TABLE; Schema: public; Owner: tracker
--

CREATE TABLE add_ons (
    id integer NOT NULL,
    addon_name character varying(50),
    addon_type character varying(50)
);


ALTER TABLE add_ons OWNER TO tracker;

--
-- Name: add_ons_id_seq; Type: SEQUENCE; Schema: public; Owner: tracker
--

CREATE SEQUENCE add_ons_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE add_ons_id_seq OWNER TO tracker;

--
-- Name: add_ons_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tracker
--

ALTER SEQUENCE add_ons_id_seq OWNED BY add_ons.id;


--
-- Name: menu_items; Type: TABLE; Schema: public; Owner: tracker
--

CREATE TABLE menu_items (
    id integer NOT NULL,
    status character varying(50),
    flavor_name character varying(50),
    flavor_description character varying(100),
    price integer
);


ALTER TABLE menu_items OWNER TO tracker;

--
-- Name: menu_items_id_seq; Type: SEQUENCE; Schema: public; Owner: tracker
--

CREATE SEQUENCE menu_items_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE menu_items_id_seq OWNER TO tracker;

--
-- Name: menu_items_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tracker
--

ALTER SEQUENCE menu_items_id_seq OWNED BY menu_items.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: tracker
--

ALTER TABLE ONLY add_ons ALTER COLUMN id SET DEFAULT nextval('add_ons_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: tracker
--

ALTER TABLE ONLY menu_items ALTER COLUMN id SET DEFAULT nextval('menu_items_id_seq'::regclass);


--
-- Data for Name: add_ons; Type: TABLE DATA; Schema: public; Owner: tracker
--

COPY add_ons (id, addon_name, addon_type) FROM stdin;
1	Eye of Newt	Topping
2	Frog Legs	Topping
4	Bat Wing	Topping
5	Collectible Skull	Container
6	Sugar Cone	Container
7	Cobra Venom Drizzle	Topping
8	Ram Horn	Container
\.


--
-- Name: add_ons_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tracker
--

SELECT pg_catalog.setval('add_ons_id_seq', 8, true);


--
-- Data for Name: menu_items; Type: TABLE DATA; Schema: public; Owner: tracker
--

COPY menu_items (id, status, flavor_name, flavor_description, price) FROM stdin;
1	regular	Chupacabra Chip	Made with real goat blood	3
2	regular	Hansel and Pretzel	Get lost in this sweet German Kidfection	4
31	regular	Thumb Raisin	Delicious and sweet. Now with extra thumbs!	3
32	seasonal	Poisoned Apple Crisp	Slow roasted cinnamon apples, laced with strychnine	5
\.


--
-- Name: menu_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tracker
--

SELECT pg_catalog.setval('menu_items_id_seq', 32, true);


--
-- Name: add_ons_pkey; Type: CONSTRAINT; Schema: public; Owner: tracker
--

ALTER TABLE ONLY add_ons
    ADD CONSTRAINT add_ons_pkey PRIMARY KEY (id);


--
-- Name: menu_items_pkey; Type: CONSTRAINT; Schema: public; Owner: tracker
--

ALTER TABLE ONLY menu_items
    ADD CONSTRAINT menu_items_pkey PRIMARY KEY (id);


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

