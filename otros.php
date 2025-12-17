<?php include("sesion.php"); ?>

<?php
include("config.php");
?>

<h1>Que tipo de consulta quieres realizar</h1>

   <form action="comprobarformulario.php" method="post">

    <br>
    <input type="radio" name="valor" value="insertar" /> <label>Insertar un dato a través de un formulario</label><br>
    <input type="radio" name="valor" value="visualizarLastname" /> <label>Visualizar los datos de aquellos que tengan el lastname con un valor pasado a través de un formulario</label><br>
    <input type="radio" name="valor" value="visualizarOrdenado" /> <label>Vsualizar todos los datos ordenados ascendente o descendentemente con un valor pasado a través de un formulario</label><br>
    <input type="radio" name="valor" value="borrar" /> <label>Borrar un usuario cuyo id será pasado por formulario</label><br>
    <input type="radio" name="valor" value="actualizar" /> <label>Actualizar el lastname de un usuario cuyo id ha sido pasado por formulario</label><br>


    <p><input type="submit" value="Enviar"></p>




<?php include("./footer.html"); ?>
