CREATE TABLE COCHES(
    id SERIAL PRIMARY KEY,
    modelo varchar(100) not null,
    marca varchar(50),
    precio integer not null,
    stock integer not null
);

CREATE TABLE GRUPOS(
    id SERIAL PRIMARY KEY,
    nombre varchar(255) not null,
    ciudad varchar(255)
);

CREATE TABLE VENDEDORES(
    id SERIAL PRIMARY KEY,
    grupo_id integer not null,
    nombre varchar(100) not null,
    apellidos varchar(150,
    cargo varchar(50),
    fecha_alta date,
    sueldo integer,
    comisión float,
    jefe integer,
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES GRUPOS(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES VENDEDORES(id)
);

CREATE TABLE CLIENTES(
    id SERIAL PRIMARY KEY,
    vendedor_id integer not null,
    nombre varchar(100) not null,
    ciudad varchar(100),
    total_gastado float,
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES VENDEDORES(id)
);

CREATE TABLE ENCARGOS(
    id SERIAL PRIMARY KEY,
    cliente_id integer not null,
    coche_id integer not null,
    cantidad integer not null,
    fecha_encargo date,
    CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES CLIENTES(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES COCHE(id)
);