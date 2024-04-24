<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="extra.css">
</head>
<body>
    <form method="post">
        <h2>Bienvenido</h2>
        <p>Completa el formulario</p>
        <p></p>
        <div class="input-wrapped">
            <input type="text" name="name" placeholder="Nombre">
        </div>
        <div class="input-wrapped">
            <input type="email" name="email" placeholder="Correo electronico">
        </div>
        <div class="input-wrapped">
            <input type="text" name="direction" placeholder="Direccion">
        </div>
        <div class="input-wrapped">
            <input type="tel" name="phone" placeholder="Telefono">
        </div>
        <div class="input-wrapped">
            <input type="text" name="occupation" placeholder="Ocupacion">
        </div>
        <div class="input-wrapped">
            <input type="date" name="date" placeholder="Fecha nacimiento">
        </div>
        <div class="input-list">
            <label for="nacionalidad">Nacionalidad</label>
            <select name="nacionalidad[]" multiple>
                <option value="Mexicana">Mexicana</option>
                <option value="Peruana">Peruana</option>
                <option value="Italiana">Italiana</option>
                <option value="Chilena">Chilena</option>
            </select>
        </div>
        <button type="button" class="agregarOpcion">Agregar Opción</button>
        <div class="nuevaOpcionContainer" style="display: none;">
            <label for="nuevaOpcion1"><br></label>
            <input type="text" id="nuevaOpcion1" name="nuevaOpcion1">
        </div>
        <p></p>
        <div class="input-list">
            <label for="lenguajesP">Lenguajes de programacion</label>
            <select name="lenguajesP[]" multiple>
                <option value="PHP">PHP</option>
                <option value="Python">Python</option>
                <option value="C/C++">C/C++</option>
                <option value="JavaScript">JavaScript</option>
            </select>
        </div>
        <button type="button" class="agregarOpcion">Agregar Opción</button>
        <div class="nuevaOpcionContainer" style="display: none;">
            <label for="nuevaOpcion2"><br></label>
            <input type="text" id="nuevaOpcion2" name="nuevaOpcion2">
        </div>
        <p></p>
        <div class="input-list">
            <label for="idiomas">Idiomas</label>
            <select name="idiomas[]" multiple>
                <option value="Español">Español</option>
                <option value="Ingles">Ingles</option>
                <option value="Italiano">Italiano</option>
                <option value="Ruso">Ruso</option>
            </select>
        </div>
        <button type="button" class="agregarOpcion">Agregar Opción</button>
        <div class="nuevaOpcionContainer" style="display: none;">
            <label for="nuevaOpcion3"><br></label>
            <input type="text" id="nuevaOpcion3" name="nuevaOpcion3">
        </div>
        <p></p>
        <div class="input-text">
            <label for="perfil">Perfil</label>
            <textarea name="perfil" placeholder="Perfil"></textarea>
        </div>
        <div class="input-text">
            <label for="aptitudes">Aptitudes</label>
            <textarea name="aptitudes" placeholder="Aptitudes"></textarea>
        </div>
        <input class="btn" type="submit" name="registro" value="Enviar">
    </form>
    <?php
        include("cvact.php");
    ?>
    <script>
        var botonesAgregarOpcion = document.querySelectorAll(".agregarOpcion");
        botonesAgregarOpcion.forEach(function(boton) {
            boton.addEventListener("click", function() {
                var nuevaOpcionContainer = this.nextElementSibling;
                nuevaOpcionContainer.style.display = (nuevaOpcionContainer.style.display === "none") ? "block" : "none";
            });
        });
    </script>
</body>
</html>