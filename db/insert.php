<?php
include "db.php"; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    // Create an SQL query to insert data
    $sql = "INSERT INTO contacts (name, phone) VALUES ('$name', '$phone')";

    if (mysqli_query($link, $sql)) {
        header("Location: ../index.php"); // Redirect back to the main page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}

mysqli_close($link);
?>
