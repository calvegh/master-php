# RENOMBRAR UNA TABLA #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR COLUMNA #
ALTER TABLE usuarios_renom RENAME COLUMN apellidos TO apellido;

# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE #
ALTER TABLE usuarios_renom ALTER COLUMN apellido TYPE varchar(50) not null;
ALTER TABLE usuarios_renom ALTER COLUMN apellido SET not null;

# AÑADIR COLUMNA #
ALTER TABLE usuarios_renom ADD website varchar(100) null;

# AÑADIR RESTRICCIÓN A COLUMNA #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# BORRAR UNA COLUMNA #
ALTER TABLE usuarios_renom DROP website;