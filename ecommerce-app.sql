--
-- PostgreSQL database dump
--

-- Dumped from database version 16.1
-- Dumped by pg_dump version 16.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: assignments_list; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.assignments_list (
    id bigint NOT NULL,
    "Auftrags_Nr" character varying(255) NOT NULL,
    "Angebotsdatum" date,
    "Referenz" character varying(255),
    "Ihre_Kundennummer" character varying(255),
    "Ihre_Ust_ID" character varying(255),
    "POS" integer NOT NULL,
    "Produkt" character varying(255),
    "Beschreibung" character varying(255),
    "Menge" character varying(255),
    "Einheit" character varying(255),
    "Einzelpreis" character varying(255),
    "Rabatt" character varying(255),
    "Gesamtpreis" character varying(255),
    gesamt_netto character varying(255),
    "zzgl_Umsatzsteuer" character varying(255),
    "Gesamtbetrag_brutto" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.assignments_list OWNER TO postgres;

--
-- Name: assignments_list_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.assignments_list_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.assignments_list_id_seq OWNER TO postgres;

--
-- Name: assignments_list_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.assignments_list_id_seq OWNED BY public.assignments_list.id;


--
-- Name: bills_list; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.bills_list (
    id bigint NOT NULL,
    "Rechnungs_Nr" character varying(255) NOT NULL,
    "Rechnungsdatum" date,
    "Referenz" character varying(255),
    "Ihre_Kundennummer" character varying(255),
    "Ihre_Ust_ID" character varying(255),
    "POS" integer NOT NULL,
    "Produkt" character varying(255),
    "Beschreibung" character varying(255),
    "Menge" character varying(255),
    "Einheit" character varying(255),
    "Einzelpreis" character varying(255),
    "Rabatt" character varying(255),
    "Gesamtpreis" character varying(255),
    gesamt_netto character varying(255),
    "zzgl_Umsatzsteuer" character varying(255),
    "Gesamtbetrag_brutto" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.bills_list OWNER TO postgres;

--
-- Name: bills_list_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.bills_list_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.bills_list_id_seq OWNER TO postgres;

--
-- Name: bills_list_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.bills_list_id_seq OWNED BY public.bills_list.id;


--
-- Name: carts; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.carts (
    id bigint NOT NULL,
    product_id integer NOT NULL,
    "productName" character varying(255) NOT NULL,
    "productQuantity" integer NOT NULL,
    "calculatedAmount" numeric(10,2) NOT NULL,
    "userEmail" character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.carts OWNER TO postgres;

--
-- Name: carts_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.carts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.carts_id_seq OWNER TO postgres;

--
-- Name: carts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.carts_id_seq OWNED BY public.carts.id;


--
-- Name: credits_list; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.credits_list (
    id bigint NOT NULL,
    "Gutschrifts_Nr" character varying(255) NOT NULL,
    "Gutschriftsdatum" date,
    "Referenz" character varying(255),
    "Ihre_Kundennummer" character varying(255),
    "Ihre_Ust_ID" character varying(255),
    "POS" integer NOT NULL,
    "Produkt" character varying(255),
    "Beschreibung" character varying(255),
    "Menge" character varying(255),
    "Einheit" character varying(255),
    "Einzelpreis" character varying(255),
    "Rabatt" character varying(255),
    "Gesamtpreis" character varying(255),
    gesamt_netto character varying(255),
    "zzgl_Umsatzsteuer" character varying(255),
    "Gesamtbetrag_brutto" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.credits_list OWNER TO postgres;

--
-- Name: credits_list_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.credits_list_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.credits_list_id_seq OWNER TO postgres;

--
-- Name: credits_list_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.credits_list_id_seq OWNED BY public.credits_list.id;


--
-- Name: delivery_notes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.delivery_notes (
    id bigint NOT NULL,
    "Lieferschein_Nr" character varying(255) NOT NULL,
    "Lieferdatum" date,
    "Referenz" character varying(255),
    "Ihre_Kundennummer" character varying(255),
    "Ihre_Ust_ID" character varying(255),
    "POS" integer NOT NULL,
    "Produkt" character varying(255),
    "Beschreibung" character varying(255),
    "Menge" character varying(255),
    "Einheit" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.delivery_notes OWNER TO postgres;

--
-- Name: delivery_notes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.delivery_notes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.delivery_notes_id_seq OWNER TO postgres;

--
-- Name: delivery_notes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.delivery_notes_id_seq OWNED BY public.delivery_notes.id;


--
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO postgres;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.failed_jobs_id_seq OWNER TO postgres;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.migrations_id_seq OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: offers_list; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.offers_list (
    id bigint NOT NULL,
    "Angebots_Nr" character varying(255) NOT NULL,
    "Angebotsdatum" date,
    "Referenz" character varying(255),
    "Ihre_Kundennummer" character varying(255),
    "POS" integer NOT NULL,
    "Produkt" character varying(255),
    "Beschreibung" character varying(255),
    "Menge" character varying(255),
    "Einheit" character varying(255),
    "Einzelpreis" character varying(255),
    "Rabatt" character varying(255),
    "Gesamtpreis" character varying(255),
    gesamt_netto character varying(255),
    "zzgl_Umsatzsteuer" character varying(255),
    "Gesamtbetrag_brutto" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.offers_list OWNER TO postgres;

--
-- Name: offers_list_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.offers_list_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.offers_list_id_seq OWNER TO postgres;

--
-- Name: offers_list_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.offers_list_id_seq OWNED BY public.offers_list.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO postgres;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.personal_access_tokens_id_seq OWNER TO postgres;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- Name: poolsBuilders_users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."poolsBuilders_users" (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    address character varying(255) NOT NULL,
    zip_code character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    contact character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    vat_no character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    condition character varying(50)
);


ALTER TABLE public."poolsBuilders_users" OWNER TO postgres;

--
-- Name: poolsBuilders_users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."poolsBuilders_users_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public."poolsBuilders_users_id_seq" OWNER TO postgres;

--
-- Name: poolsBuilders_users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."poolsBuilders_users_id_seq" OWNED BY public."poolsBuilders_users".id;


--
-- Name: products; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.products (
    id bigint NOT NULL,
    type character varying(255) NOT NULL,
    "Hersteller" character varying(255),
    "Herst_Nr" character varying(255),
    "Lief_Art_Nr" character varying(255),
    "Hersteller_Artikelnummer" character varying(255),
    "Katalog_Art_Nummer" character varying(255),
    "Kategorie" character varying(255),
    "VE_VPE" character varying(255),
    "Einheit" character varying(255),
    "Rabattcode_1" character varying(255),
    "Rabattcode_2" character varying(255),
    "Rabattcode_3" character varying(255),
    "Preis_zzgl_MwSt" character varying(255),
    "Preis_inkl_MwSt" character varying(255),
    "Einkausfpreis_zzgl_MwSt" character varying(255),
    "Einkaufsrabatt" character varying(255),
    "Artikelname" character varying(255),
    "Beschreibung_kurz" character varying(255),
    "Beschreibung_lang" character varying(255),
    "m3/h" character varying(255),
    "Stichmass" character varying(255),
    "kW" character varying(255),
    "Volt" character varying(255),
    "Kelvin" character varying(255),
    lm character varying(255),
    "Druckstufe_PN" character varying(255),
    "Material" character varying(255),
    "Körnung/h" character varying(255),
    "Durchmesser" character varying(255),
    "Radius" character varying(255),
    "Gewicht" character varying(255),
    "Länge" character varying(255),
    "Breite" character varying(255),
    "Höhe" character varying(255),
    "Bild_1" character varying(255),
    "Bild_2" character varying(255),
    "Bild_3" character varying(255),
    "Bild_4" character varying(255),
    "Anleitung_PDF_1" character varying(255),
    "Anleitung_PDF_2" character varying(255),
    "Anleitung_PDF_3" character varying(255),
    "addedBy" character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.products OWNER TO postgres;

--
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.products_id_seq OWNER TO postgres;

--
-- Name: products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    mobile character varying(255) NOT NULL,
    remember_token character varying(100),
    action character varying(255),
    role character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    address character varying(500),
    "zipCode" character varying(20),
    "vatNo" character varying(100)
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: assignments_list id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.assignments_list ALTER COLUMN id SET DEFAULT nextval('public.assignments_list_id_seq'::regclass);


--
-- Name: bills_list id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.bills_list ALTER COLUMN id SET DEFAULT nextval('public.bills_list_id_seq'::regclass);


--
-- Name: carts id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.carts ALTER COLUMN id SET DEFAULT nextval('public.carts_id_seq'::regclass);


--
-- Name: credits_list id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.credits_list ALTER COLUMN id SET DEFAULT nextval('public.credits_list_id_seq'::regclass);


--
-- Name: delivery_notes id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.delivery_notes ALTER COLUMN id SET DEFAULT nextval('public.delivery_notes_id_seq'::regclass);


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: offers_list id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.offers_list ALTER COLUMN id SET DEFAULT nextval('public.offers_list_id_seq'::regclass);


--
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- Name: poolsBuilders_users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."poolsBuilders_users" ALTER COLUMN id SET DEFAULT nextval('public."poolsBuilders_users_id_seq"'::regclass);


--
-- Name: products id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Name: assignments_list assignments_list_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.assignments_list
    ADD CONSTRAINT assignments_list_pkey PRIMARY KEY (id);


--
-- Name: bills_list bills_list_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.bills_list
    ADD CONSTRAINT bills_list_pkey PRIMARY KEY (id);


--
-- Name: carts carts_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.carts
    ADD CONSTRAINT carts_pkey PRIMARY KEY (id);


--
-- Name: credits_list credits_list_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.credits_list
    ADD CONSTRAINT credits_list_pkey PRIMARY KEY (id);


--
-- Name: delivery_notes delivery_notes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.delivery_notes
    ADD CONSTRAINT delivery_notes_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: offers_list offers_list_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.offers_list
    ADD CONSTRAINT offers_list_pkey PRIMARY KEY (id);


--
-- Name: password_resets password_resets_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.password_resets
    ADD CONSTRAINT password_resets_pkey PRIMARY KEY (email);


--
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- Name: poolsBuilders_users poolsBuilders_users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."poolsBuilders_users"
    ADD CONSTRAINT "poolsBuilders_users_pkey" PRIMARY KEY (id);


--
-- Name: poolsBuilders_users poolsbuilders_users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."poolsBuilders_users"
    ADD CONSTRAINT poolsbuilders_users_email_unique UNIQUE (email);


--
-- Name: products products_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- PostgreSQL database dump complete
--

