<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("db_connect.php");
include ("recoge.php");

$campo = recoge("campo");
$orden = recoge("orden");

if ($campo == "" || $orden == "") {
    header("Location: VisualizarOrdenado.php");
    exit();
}

$sql = "SELECT id, firstname, lastname, phone, user_code FROM MyGuests ORDER BY $campo $orden";
$result = mysqli_query($conn, $sql);

if ($result == false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
elseif (mysqli_num_rows($result) > 0) {

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  echo "<h2>Listado ordenado por " . $campo . " (" . $orden . ")</h2>";

  foreach ($rows as $row) {
    echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - Phone: " . $row["phone"] . " - User Code: " . $row["user_code"] . "<br>";
  }

} else {
  echo "0 results";
}

mysqli_close($conn);
?>

<?php include("./footer.html"); ?>