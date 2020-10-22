CREATE TABLE usuarios(
    id          SERIAL PRIMARY KEY,
    nombre      varchar(100) not null,
    apellidos   varchar(100) not null,
    email       varchar(255) not null,
    password    varchar(255) not null,
    fecha       date not null,
    CONSTRAINT uq_email UNIQUE(email)
);

CREATE TABLE categorias(
    id      SERIAL PRIMARY KEY,
    nombre  varchar(100) not null
);

CREATE TABLE entradas(
    id              SERIAL PRIMARY KEY,
    usuario_id      integer not null,
    categoria_id    integer not null,
    titulo          varchar(255) not null,
    descripcion     text,
    fecha           date not null,
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) 
);