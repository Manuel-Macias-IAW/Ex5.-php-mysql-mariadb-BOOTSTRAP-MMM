<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("db_connect.php");
include ("recoge.php");


$firstname=recoge("firstname");
$lastname=recoge("lastname");
$email=recoge("email");
$codeuser=recoge("codeuser");
$phone=recoge("phone");

if ($firstname == "" || $lastname == "" || $email == "" || $codeuser == "" || $phone == "") {
    header("Location: insertar.php");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: insertar.php");
}

if (!preg_match("/^u[0-9]{5}$/", $codeuser)) {
    header("Location: insertar.php");
}

if (strlen($phone) > 15) {
    header("Location: insertar.php");
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code)
VALUES ('$firstname', '$lastname', '$email', '$phone', '$codeuser')";

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
else {
    echo "New record created successfully";
}

// Close connection
mysqli_close($conn);
?>

<?php include("./footer.html"); ?>
