--
-- PostgreSQL database dump
--

-- Dumped from database version 10.6 (Ubuntu 10.6-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.6 (Ubuntu 10.6-0ubuntu0.18.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
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


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: alumnos; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.alumnos (
    nua character varying(100) NOT NULL,
    cveesp character varying(4),
    email character varying(100),
    semestre integer
);


ALTER TABLE public.alumnos OWNER TO admin;

--
-- Name: dia; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.dia (
    id_dia integer NOT NULL,
    dia character varying(20)
);


ALTER TABLE public.dia OWNER TO admin;

--
-- Name: dia_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE public.dia_id_dia_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.dia_id_dia_seq OWNER TO admin;

--
-- Name: dia_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE public.dia_id_dia_seq OWNED BY public.dia.id_dia;


--
-- Name: especialidad; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.especialidad (
    cveesp character varying(4) NOT NULL,
    descripcion character varying(100)
);


ALTER TABLE public.especialidad OWNER TO admin;

--
-- Name: eventos; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.eventos (
    id_evento integer NOT NULL,
    nombre character varying(100),
    descripcion character varying(100),
    email character varying(100)
);


ALTER TABLE public.eventos OWNER TO admin;

--
-- Name: eventos_id_evento_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE public.eventos_id_evento_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.eventos_id_evento_seq OWNER TO admin;

--
-- Name: eventos_id_evento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE public.eventos_id_evento_seq OWNED BY public.eventos.id_evento;


--
-- Name: grupos; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.grupos (
    cvemat character varying(10) NOT NULL,
    nogpo character varying(4) NOT NULL,
    cvemae character varying(4),
    salon character varying(4)
);


ALTER TABLE public.grupos OWNER TO admin;

--
-- Name: horario; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.horario (
    id_dia integer NOT NULL,
    cvemat character varying(10) NOT NULL,
    horainica time without time zone,
    horatermina time without time zone
);


ALTER TABLE public.horario OWNER TO admin;

--
-- Name: inscripciontaller; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.inscripciontaller (
    cvetaller character varying(4) NOT NULL,
    nua character varying(100) NOT NULL
);


ALTER TABLE public.inscripciontaller OWNER TO admin;

--
-- Name: kardex; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.kardex (
    cvemat character varying(10) NOT NULL,
    nua character varying(100) NOT NULL,
    oportunidad integer NOT NULL,
    calificacion numeric
);


ALTER TABLE public.kardex OWNER TO admin;

--
-- Name: listas; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.listas (
    cvemat character varying(10) NOT NULL,
    nogpo character varying(4) NOT NULL,
    nua character varying(100) NOT NULL,
    parcial1 numeric,
    parcial2 numeric,
    parcial3 numeric
);


ALTER TABLE public.listas OWNER TO admin;

--
-- Name: maestros; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.maestros (
    cvemae character varying(10) NOT NULL,
    noempleado integer,
    email character varying(100),
    rfc character varying(13)
);


ALTER TABLE public.maestros OWNER TO admin;

--
-- Name: materias; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.materias (
    cvemat character varying(10) NOT NULL,
    nombre character varying(100),
    creditos integer,
    horasprofesor integer,
    horasautonomo integer,
    semestre integer
);


ALTER TABLE public.materias OWNER TO admin;

--
-- Name: migrations; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO admin;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO admin;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: oportunidad; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.oportunidad (
    oportunidad integer NOT NULL,
    descripcion character varying(100)
);


ALTER TABLE public.oportunidad OWNER TO admin;

--
-- Name: oportunidad_oportunidad_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE public.oportunidad_oportunidad_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.oportunidad_oportunidad_seq OWNER TO admin;

--
-- Name: oportunidad_oportunidad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE public.oportunidad_oportunidad_seq OWNED BY public.oportunidad.oportunidad;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO admin;

--
-- Name: permisos; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.permisos (
    id_permiso integer NOT NULL,
    permiso character varying(100)
);


ALTER TABLE public.permisos OWNER TO admin;

--
-- Name: permisos_id_permiso_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE public.permisos_id_permiso_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.permisos_id_permiso_seq OWNER TO admin;

--
-- Name: permisos_id_permiso_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE public.permisos_id_permiso_seq OWNED BY public.permisos.id_permiso;


--
-- Name: reticula; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.reticula (
    cveesp character varying(4) NOT NULL,
    cvemat character varying(10) NOT NULL
);


ALTER TABLE public.reticula OWNER TO admin;

--
-- Name: rol; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.rol (
    id_rol integer NOT NULL,
    rol character varying(100)
);


ALTER TABLE public.rol OWNER TO admin;

--
-- Name: rol_id_rol_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE public.rol_id_rol_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rol_id_rol_seq OWNER TO admin;

--
-- Name: rol_id_rol_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE public.rol_id_rol_seq OWNED BY public.rol.id_rol;


--
-- Name: rol_permiso; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.rol_permiso (
    id_rol integer,
    id_permiso integer
);


ALTER TABLE public.rol_permiso OWNER TO admin;

--
-- Name: talleres; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.talleres (
    cvetaller character varying(4) NOT NULL,
    nombre character varying(100),
    instructor character varying(100),
    horario character varying(100),
    lugar character varying(100),
    cupo integer,
    requisitos text
);


ALTER TABLE public.talleres OWNER TO admin;

--
-- Name: users; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO admin;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO admin;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.usuarios (
    email character varying(100) NOT NULL,
    contrasenia character varying(100),
    direccion character varying(100),
    telefono character varying(100),
    sexo character varying(100),
    nombre character varying(100),
    curp character varying(100)
);


ALTER TABLE public.usuarios OWNER TO admin;

--
-- Name: usuarios_rol; Type: TABLE; Schema: public; Owner: admin
--

CREATE TABLE public.usuarios_rol (
    email character varying(100) NOT NULL,
    id_rol integer NOT NULL
);


ALTER TABLE public.usuarios_rol OWNER TO admin;

--
-- Name: dia id_dia; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.dia ALTER COLUMN id_dia SET DEFAULT nextval('public.dia_id_dia_seq'::regclass);


--
-- Name: eventos id_evento; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.eventos ALTER COLUMN id_evento SET DEFAULT nextval('public.eventos_id_evento_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: oportunidad oportunidad; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.oportunidad ALTER COLUMN oportunidad SET DEFAULT nextval('public.oportunidad_oportunidad_seq'::regclass);


--
-- Name: permisos id_permiso; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.permisos ALTER COLUMN id_permiso SET DEFAULT nextval('public.permisos_id_permiso_seq'::regclass);


--
-- Name: rol id_rol; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.rol ALTER COLUMN id_rol SET DEFAULT nextval('public.rol_id_rol_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: alumnos; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.alumnos (nua, cveesp, email, semestre) FROM stdin;
1235	ING	efrain@gmail.com	\N
\.


--
-- Data for Name: dia; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.dia (id_dia, dia) FROM stdin;
\.


--
-- Data for Name: especialidad; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.especialidad (cveesp, descripcion) FROM stdin;
Art	Artes
HCS	Humanidades y Ciencias Sociales 
EA	Economico-Administrativo
ING	Ingenierias
SNES	Ciencias Naturales, Exactas y de la Salud
Nun	Ninguna
\.


--
-- Data for Name: eventos; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.eventos (id_evento, nombre, descripcion, email) FROM stdin;
\.


--
-- Data for Name: grupos; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.grupos (cvemat, nogpo, cvemae, salon) FROM stdin;
Alg 1	2	osc	2
Ing 1	2	osc	2
\.


--
-- Data for Name: horario; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.horario (id_dia, cvemat, horainica, horatermina) FROM stdin;
\.


--
-- Data for Name: inscripciontaller; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.inscripciontaller (cvetaller, nua) FROM stdin;
\.


--
-- Data for Name: kardex; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.kardex (cvemat, nua, oportunidad, calificacion) FROM stdin;
\.


--
-- Data for Name: listas; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.listas (cvemat, nogpo, nua, parcial1, parcial2, parcial3) FROM stdin;
\.


--
-- Data for Name: maestros; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.maestros (cvemae, noempleado, email, rfc) FROM stdin;
osc	1	oscar@gmail.com	oihfskndc
\.


--
-- Data for Name: materias; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.materias (cvemat, nombre, creditos, horasprofesor, horasautonomo, semestre) FROM stdin;
Alg 1	Algebra 1	5	40	20	1
Ing 1	Ingles 1	5	20	15	1
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2019_02_11_170916_create_rol_permiso_table	0
4	2019_02_11_170916_create_usuarios_rol_table	0
5	2019_02_11_170916_create_talleres_table	0
6	2019_02_11_170916_create_permisos_table	0
7	2019_02_11_170916_create_inscripciontaller_table	0
8	2019_02_11_170916_create_reticula_table	0
9	2019_02_11_170916_create_oportunidad_table	0
10	2019_02_11_170916_create_rol_table	0
11	2019_02_11_170916_create_usuarios_table	0
12	2019_02_11_170916_create_kardex_table	0
13	2019_02_11_170916_create_especialidad_table	0
14	2019_02_11_170916_create_alumnos_table	0
15	2019_02_11_170916_create_maestros_table	0
16	2019_02_11_170916_create_materias_table	0
17	2019_02_11_170916_create_password_resets_table	0
18	2019_02_11_170916_create_grupos_table	0
19	2019_02_11_170916_create_users_table	0
20	2019_02_11_170918_add_foreign_keys_to_rol_permiso_table	0
21	2019_02_11_170918_add_foreign_keys_to_usuarios_rol_table	0
22	2019_02_11_170918_add_foreign_keys_to_inscripciontaller_table	0
23	2019_02_11_170918_add_foreign_keys_to_reticula_table	0
24	2019_02_11_170918_add_foreign_keys_to_kardex_table	0
25	2019_02_11_170918_add_foreign_keys_to_alumnos_table	0
26	2019_02_11_170918_add_foreign_keys_to_maestros_table	0
27	2019_02_11_170918_add_foreign_keys_to_grupos_table	0
28	2019_02_11_173453_create_rol_permiso_table	0
29	2019_02_11_173453_create_usuarios_rol_table	0
30	2019_02_11_173453_create_talleres_table	0
31	2019_02_11_173453_create_permisos_table	0
32	2019_02_11_173453_create_inscripciontaller_table	0
33	2019_02_11_173453_create_alumnos_table	0
34	2019_02_11_173453_create_reticula_table	0
35	2019_02_11_173453_create_oportunidad_table	0
36	2019_02_11_173453_create_rol_table	0
37	2019_02_11_173453_create_usuarios_table	0
38	2019_02_11_173453_create_kardex_table	0
39	2019_02_11_173453_create_especialidad_table	0
40	2019_02_11_173453_create_maestros_table	0
41	2019_02_11_173453_create_materias_table	0
42	2019_02_11_173453_create_password_resets_table	0
43	2019_02_11_173453_create_users_table	0
44	2019_02_11_173453_create_grupos_table	0
45	2019_02_11_173453_create_listas_table	0
46	2019_02_11_173455_add_foreign_keys_to_rol_permiso_table	0
47	2019_02_11_173455_add_foreign_keys_to_usuarios_rol_table	0
48	2019_02_11_173455_add_foreign_keys_to_inscripciontaller_table	0
49	2019_02_11_173455_add_foreign_keys_to_alumnos_table	0
50	2019_02_11_173455_add_foreign_keys_to_reticula_table	0
51	2019_02_11_173455_add_foreign_keys_to_kardex_table	0
52	2019_02_11_173455_add_foreign_keys_to_maestros_table	0
53	2019_02_11_173455_add_foreign_keys_to_grupos_table	0
54	2019_02_11_173455_add_foreign_keys_to_listas_table	0
\.


--
-- Data for Name: oportunidad; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.oportunidad (oportunidad, descripcion) FROM stdin;
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: permisos; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.permisos (id_permiso, permiso) FROM stdin;
1	Especialidades
2	Grupos
3	Kardex
4	Listas
5	Maestros
6	Oportunidad
7	Permisos
8	Reticula
9	Rol
10	Rol_permiso
11	Usuarios
12	Usuarios_rol
13	Perfil
14	Alumnos
15	Materias
\.


--
-- Data for Name: reticula; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.reticula (cveesp, cvemat) FROM stdin;
\.


--
-- Data for Name: rol; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.rol (id_rol, rol) FROM stdin;
1	Administrador
3	Alumno
2	Docente
\.


--
-- Data for Name: rol_permiso; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.rol_permiso (id_rol, id_permiso) FROM stdin;
1	5
1	7
1	9
1	10
1	11
1	12
1	13
3	14
\.


--
-- Data for Name: talleres; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.talleres (cvetaller, nombre, instructor, horario, lugar, cupo, requisitos) FROM stdin;
Fut	Futball Soccer	Gisela	12:00 - 13:00	Plan Guanajuato	20	Actitud, Compromiso
basq	Basquetball	Gisela	12:00 - 13:00	Plan Guanajuato	15	Actitud, Compromiso
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.users (id, name, email, password, remember_token, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.usuarios (email, contrasenia, direccion, telefono, sexo, nombre, curp) FROM stdin;
nombre56@gmail.com	1234	Aldama 116	4191165031	H	Miguel Angel Velazquez Ayala	wwd
hola@gmail.com	526352	New York	946321963	M	hola	TUFKJHVGJHIKJ
hola2@gmail.com	526352	New York	946321963	H	hola2	TUFKJHVGJHIKJ
14030609@itcelaya.edu.mx	1234	Aldama 116	4191165031	H	Miguel Angel Velazquez Ayala	VEAM960101HQTLYG04
oscar@gmail.com	1234	Aldama 116	4191165031	H	oscar	VEAO970403HGTL025
efrain@gmail.com	1234	Aldama 116	4191165031	H	Efrain	VEAE960101HQTLYG04
\.


--
-- Data for Name: usuarios_rol; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY public.usuarios_rol (email, id_rol) FROM stdin;
14030609@itcelaya.edu.mx	1
oscar@gmail.com	2
efrain@gmail.com	3
nombre56@gmail.com	2
hola@gmail.com	1
hola2@gmail.com	1
\.


--
-- Name: dia_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('public.dia_id_dia_seq', 1, false);


--
-- Name: eventos_id_evento_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('public.eventos_id_evento_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('public.migrations_id_seq', 54, true);


--
-- Name: oportunidad_oportunidad_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('public.oportunidad_oportunidad_seq', 1, false);


--
-- Name: permisos_id_permiso_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('public.permisos_id_permiso_seq', 1, false);


--
-- Name: rol_id_rol_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('public.rol_id_rol_seq', 1, false);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('public.users_id_seq', 1, false);


--
-- Name: alumnos alumnos_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.alumnos
    ADD CONSTRAINT alumnos_pkey PRIMARY KEY (nua);


--
-- Name: dia dia_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.dia
    ADD CONSTRAINT dia_pkey PRIMARY KEY (id_dia);


--
-- Name: especialidad especialidad_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.especialidad
    ADD CONSTRAINT especialidad_pkey PRIMARY KEY (cveesp);


--
-- Name: eventos eventos_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.eventos
    ADD CONSTRAINT eventos_pkey PRIMARY KEY (id_evento);


--
-- Name: grupos grupos_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.grupos
    ADD CONSTRAINT grupos_pkey PRIMARY KEY (cvemat, nogpo);


--
-- Name: horario horario_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.horario
    ADD CONSTRAINT horario_pkey PRIMARY KEY (id_dia, cvemat);


--
-- Name: inscripciontaller inscripciontaller_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.inscripciontaller
    ADD CONSTRAINT inscripciontaller_pkey PRIMARY KEY (cvetaller, nua);


--
-- Name: kardex kardex_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.kardex
    ADD CONSTRAINT kardex_pkey PRIMARY KEY (cvemat, nua, oportunidad);


--
-- Name: listas listas_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.listas
    ADD CONSTRAINT listas_pkey PRIMARY KEY (cvemat, nogpo, nua);


--
-- Name: maestros maestros_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.maestros
    ADD CONSTRAINT maestros_pkey PRIMARY KEY (cvemae);


--
-- Name: materias materias_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.materias
    ADD CONSTRAINT materias_pkey PRIMARY KEY (cvemat);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: oportunidad oportunidad_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.oportunidad
    ADD CONSTRAINT oportunidad_pkey PRIMARY KEY (oportunidad);


--
-- Name: permisos permisos_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.permisos
    ADD CONSTRAINT permisos_pkey PRIMARY KEY (id_permiso);


--
-- Name: reticula reticula_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.reticula
    ADD CONSTRAINT reticula_pkey PRIMARY KEY (cveesp, cvemat);


--
-- Name: rol rol_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.rol
    ADD CONSTRAINT rol_pkey PRIMARY KEY (id_rol);


--
-- Name: talleres talleres_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.talleres
    ADD CONSTRAINT talleres_pkey PRIMARY KEY (cvetaller);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (email);


--
-- Name: usuarios_rol usuarios_rol_pkey; Type: CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.usuarios_rol
    ADD CONSTRAINT usuarios_rol_pkey PRIMARY KEY (email, id_rol);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: admin
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- Name: alumnos alumnos_cveesp_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.alumnos
    ADD CONSTRAINT alumnos_cveesp_fkey FOREIGN KEY (cveesp) REFERENCES public.especialidad(cveesp) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: alumnos alumnos_email_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.alumnos
    ADD CONSTRAINT alumnos_email_fkey FOREIGN KEY (email) REFERENCES public.usuarios(email) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: eventos eventos_email_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.eventos
    ADD CONSTRAINT eventos_email_fkey FOREIGN KEY (email) REFERENCES public.usuarios(email) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: grupos grupos_cvemae_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.grupos
    ADD CONSTRAINT grupos_cvemae_fkey FOREIGN KEY (cvemae) REFERENCES public.maestros(cvemae) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: grupos grupos_cvemat_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.grupos
    ADD CONSTRAINT grupos_cvemat_fkey FOREIGN KEY (cvemat) REFERENCES public.materias(cvemat) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: horario horario_cvemat_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.horario
    ADD CONSTRAINT horario_cvemat_fkey FOREIGN KEY (cvemat) REFERENCES public.materias(cvemat) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: horario horario_id_dia_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.horario
    ADD CONSTRAINT horario_id_dia_fkey FOREIGN KEY (id_dia) REFERENCES public.dia(id_dia) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: inscripciontaller inscripciontaller_cvetaller_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.inscripciontaller
    ADD CONSTRAINT inscripciontaller_cvetaller_fkey FOREIGN KEY (cvetaller) REFERENCES public.talleres(cvetaller) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: inscripciontaller inscripciontaller_nua_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.inscripciontaller
    ADD CONSTRAINT inscripciontaller_nua_fkey FOREIGN KEY (nua) REFERENCES public.alumnos(nua) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: kardex kardex_cvemat_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.kardex
    ADD CONSTRAINT kardex_cvemat_fkey FOREIGN KEY (cvemat) REFERENCES public.materias(cvemat) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: kardex kardex_nua_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.kardex
    ADD CONSTRAINT kardex_nua_fkey FOREIGN KEY (nua) REFERENCES public.alumnos(nua) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: kardex kardex_oportunidad_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.kardex
    ADD CONSTRAINT kardex_oportunidad_fkey FOREIGN KEY (oportunidad) REFERENCES public.oportunidad(oportunidad) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: listas listas_cvemat_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.listas
    ADD CONSTRAINT listas_cvemat_fkey FOREIGN KEY (cvemat, nogpo) REFERENCES public.grupos(cvemat, nogpo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: listas listas_nua_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.listas
    ADD CONSTRAINT listas_nua_fkey FOREIGN KEY (nua) REFERENCES public.alumnos(nua) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: maestros maestros_email_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.maestros
    ADD CONSTRAINT maestros_email_fkey FOREIGN KEY (email) REFERENCES public.usuarios(email) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: reticula reticula_cveesp_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.reticula
    ADD CONSTRAINT reticula_cveesp_fkey FOREIGN KEY (cveesp) REFERENCES public.especialidad(cveesp) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: reticula reticula_cvemat_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.reticula
    ADD CONSTRAINT reticula_cvemat_fkey FOREIGN KEY (cvemat) REFERENCES public.materias(cvemat) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: rol_permiso rol_permiso_id_permiso_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.rol_permiso
    ADD CONSTRAINT rol_permiso_id_permiso_fkey FOREIGN KEY (id_permiso) REFERENCES public.permisos(id_permiso) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: rol_permiso rol_permiso_id_rol_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.rol_permiso
    ADD CONSTRAINT rol_permiso_id_rol_fkey FOREIGN KEY (id_rol) REFERENCES public.rol(id_rol) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: usuarios_rol usuarios_rol_email_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.usuarios_rol
    ADD CONSTRAINT usuarios_rol_email_fkey FOREIGN KEY (email) REFERENCES public.usuarios(email) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: usuarios_rol usuarios_rol_id_rol_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY public.usuarios_rol
    ADD CONSTRAINT usuarios_rol_id_rol_fkey FOREIGN KEY (id_rol) REFERENCES public.rol(id_rol) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

