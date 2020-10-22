<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-9">
        <title>Formularios PHP y HTML</title> 
    </head>
    <body>
        <h1>Formulario</h1>

        <form action="" method="POST" type="multipart/form-data">
        <label for="nombre">Nombre</label>
        <p><input type="text" name="nombre" disabled="disabled"></p>
        <br>

        <label for="apellido">Apellidos</label>
        <p><input type="text" name="apellido" autofocus="autofocus" maxlength="5" minlength="2" pattern = "[A-Z ]+" required = "required"></p>
        <br>

        <label for="boton">Boton</label>
        <p><input type="button" name="boton" value="Aprietame"></p>
        <br>

        <label for="sexo">Sexo</label>
        <p>
            Hombre: <input type="checkbox" name="sexo" value="Hombre" checked="checked">
            Mujer: <input type="checkbox" name="sexo" value="Mujer">
        </p>
        <br>

        <label for="color">Color</label>
        <p><input type="color" name="color"></p>
        <br>

        <label for="fecha">Fecha</label>
        <p><input type="date" name="fecha"></p>
        <br>

        <label for="correo">Email</label>
        <p><input type="email" name="correo"></p>
        <br>

        <label for="pass">Contraseña</label>
        <p><input type="password" name="pass"></p>
        <br>

        <label for="archivo">Archivo</label>
        <p><input type="file" name="archivo" multiple = "multiple"></p>
        <br>

        <label for="numero">Numero</label>
        <p><input type="number" name="numero"></p>
        <br>
        
        <label for="continente">Continentes:</label>
        <p>
            America del Sur: <input type="radio" name="continente" value="America del Sur">
            Europa: <input type="radio" name="continente" value="Europa">
            Asia: <input type="radio" name="continente" value="Asia">
        </p>
        <br>
           
        <label for="web">Pagina</label>
        <p><input type="url" name="web"></p>
        <br>

        <label for="descripcion">Descripcion</label>
        <p><input type="textarea" name="descripcion"></p>
        <br>

        Peliculas:
        <select name="peliculas">
            <option value="spiderman">Spiderman</option>
            <option value="Junga de cristal">Jungla de Cristal</option>
            <option value="batman">Batman</option>
        </select>
        <br>

        <input type="submit" value="Enviar">
        </form>
    </body>
</html>