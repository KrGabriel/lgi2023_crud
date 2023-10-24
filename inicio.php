<?php
include_once("config.php");

$resultado = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
    <head>
        <title>Inicio</title>
    </head>

    <body>
        <table width='60%' style="margin: 20px;" >

            <tr>
                <th style="border-left: 1px solid black">Usuario</th> <th style="border-left: 1px solid black">Contrasenia</th> <th style="border-left: 1px solid black">Actualizar</th>
            </tr>
            <?php
            while($usuarios = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td style=';border-top: 1px solid black; border-left: 1px solid black; text-align: center;'>".$usuarios['usuario']."</td>";
                echo "<td style='border-top: 1px solid black; border-left: 1px solid black; text-align: center;'>".$usuarios['contrasenia']."</td>";
                echo "<td style='border-top: 1px solid black; border-left: 1px solid black; text-align: center;'><a href='edit.php?id=$usuarios[id]'>Editar</a></td></tr>";
            }
            ?>
        </table>

        <a href="crear.php" style="margin: 20px;" >Crear nuevo usuario</a><br/><br/>
    </body>
</html>
