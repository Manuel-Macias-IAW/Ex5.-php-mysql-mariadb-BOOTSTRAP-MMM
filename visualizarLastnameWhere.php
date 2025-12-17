<?php include("sesion.php"); ?>

<?php
include("config.php");
include ("recoge.php");


$lastname = recoge("lastname");


if ($lastname == "") {
    header("Location: visualizarlastname.php");
    exit();
}

$sql = "SELECT id, firstname, lastname, phone, user_code FROM MyGuests WHERE lastname='$lastname'";
$result = mysqli_query($conn, $sql);

if ($result == false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
elseif (mysqli_num_rows($result) > 0) {


  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  echo "<h2>Resultados para el apellido: " . $lastname . "</h2>";

  foreach ($rows as $row) {
    echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - Phone: " . $row["phone"] . " - User Code: " . $row["user_code"] . "<br>";
  }

} else {
  echo "No se encontraron resultados para el apellido: " . $lastname;
}

// Close connection
mysqli_close($conn);
?>

<?php include("./footer.html"); ?>