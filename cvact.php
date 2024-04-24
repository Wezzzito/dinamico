<?php
include("base.php");
if(isset($_POST["registro"])){
    if(
        strlen($_POST['name']) >= 1 && 
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['date']) >= 1 &&
        strlen($_POST['occupation']) >= 1 &&
        strlen($_POST['perfil']) >= 1 &&
        strlen($_POST['aptitudes']) >= 1 )
        {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $direction = trim($_POST['direction']);
            $phone = trim($_POST['phone']);
            $ocupacion = trim($_POST['occupation']);
            $fecha = isset($_POST['date']) ? trim($_POST['date']) : '';
            $nacionalidad = isset($_POST['nacionalidad']) ? $_POST['nacionalidad'] : [];
            $lenguajesP = isset($_POST['lenguajesP']) ? $_POST['lenguajesP'] : [];
            $idiomas = isset($_POST['idiomas']) ? $_POST['idiomas'] : [];
            $perfil = trim($_POST['perfil']);
            $aptitudes = trim($_POST['aptitudes']);
            $nuevaOpcion1 = isset($_POST['nuevaOpcion1']) ? trim($_POST['nuevaOpcion1']) : '';
            $nuevaOpcion2 = isset($_POST['nuevaOpcion2']) ? trim($_POST['nuevaOpcion2']) : '';
            $nuevaOpcion3 = isset($_POST['nuevaOpcion3']) ? trim($_POST['nuevaOpcion3']) : '';
            if (!empty($nuevaOpcion1)) {
                $nacionalidad[] = $nuevaOpcion1;
            }
            if (!empty($nuevaOpcion2)) {
                $lenguajesP[] = $nuevaOpcion2;
            }
            if (!empty($nuevaOpcion3)) {
                $idiomas[] = $nuevaOpcion3;
            }
            $consulta = "INSERT INTO formba(nombre,email,direccion,telefono,ocupacion,fecha,nacionalidad,lenguajesP,idiomas,perfil,aptitudes)
                VALUES('$name','$email','$direction','$phone','$ocupacion','$fecha', '" . implode(",", $nacionalidad) . "', '" . implode(",", $lenguajesP) . "','" . implode(",", $idiomas) . "','$perfil','$aptitudes')";
            $resultado = mysqli_query($conct,$consulta);
            if ($resultado){
                ?>
                <h3 class="success">Tu registro fue subido</h3>
                <?php
                
            }else{
                ?>
                <h3 class="error">Hay un problema con tu registro</h3>
                <?php
            }
        }else{
            ?>
            <h3 class="error">Completa todos los campos</h3>
            <?php
        }
}
?>