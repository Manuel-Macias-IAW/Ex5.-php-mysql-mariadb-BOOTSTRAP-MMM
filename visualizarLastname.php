<?php include("sesion.php"); ?>

<?php
include("config.php");
?>

<h1>Filtrar por lastname:</h1>

   <form action="visualizarLastnameWhere.php" method="post">

    <br>
    <label>Insertar campo lastname para filtrar:</label>
    <input type="text" name="lastname" required/><br>

    <p><input type="submit" value="Enviar"></p>




<?php include("./footer.html"); ?>
