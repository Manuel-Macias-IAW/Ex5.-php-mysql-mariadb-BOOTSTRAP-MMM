<?php include("sesion.php"); ?>

<?php
include("config.php");


//Insert data in the table MyGuests
$sql = "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code)
VALUES ('John', 'Doe', 'john@example.com', '600123456', 'u00001')";

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
