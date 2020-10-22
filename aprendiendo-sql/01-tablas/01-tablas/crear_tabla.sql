
/*
int(n cifras)                   ENTERO
integer (n cifras)              ENTERO
varchar(n caracteres)           STRING / ALFANUMERICO 
char (n caracteres)             STRING / ALFANUMERICO
float(n cifras, n decimales)    DECIMAL / COMA FLOTANTE
date, time, timestamp

// STRING MÁS GRANDE
TEXT 65535 caracteres
MEDIUMTEXT 16 millones
LONGTEXT 4 billones

// ENTERO MÁS GRANDES
MEDIUMINT
BIGINT
/*
CREAR TABLA
*/

CREATE TABLE usuarios(
    id          SERIAL PRIMARY KEY,
    nombre      varchar(100) not null,
    apellidos   varchar(255) default 'Gonzalez',
    email       varchar(100) not null,
    password    varchar(255)
);