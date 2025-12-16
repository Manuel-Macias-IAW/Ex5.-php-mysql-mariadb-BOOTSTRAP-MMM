<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("db_connect.php");
?>

<h1>Actualizar Apellido de Usuario</h1>

<form action="actualizarID.php" method="post">

    <label>ID del usuario a modificar:</label>
    <br>
    <input type="number" name="id" required>
    <br>

    <label>Lastname:</label>
    <br>
    <input type="text" name="lastname" required>
    <br>

    <p><input type="submit" value="Enviar"></p>

</form>

<?php include("./footer.html"); ?>