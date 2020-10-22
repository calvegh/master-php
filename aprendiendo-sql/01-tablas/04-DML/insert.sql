# INSERTAR NUEVOS REGISTROS #

INSERT INTO usuarios VALUES(
    3,'Carlos','Vega Hernández','calvegh@gmail.com','123','01-10-2020'
);
INSERT INTO usuarios VALUES(
    4,'Paco','Vega Hernández','Paco@gmail.com','123','01-10-2020'
);
INSERT INTO usuarios VALUES(
    5,'Martinez','Vega Hernández','Martinez@gmail.com','123','01-10-2020'
);
INSERT INTO usuarios VALUES(
    6,'Antonio','Vega Hernández','jose@gmail.com','123','01-10-2020'
);

# INSERTAR FILAS SOLO EN CIERTAS COLUMNAS #

INSERT INTO usuarios(email,password) VALUES ('admin@admin.com','123das');