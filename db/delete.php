<?php
include "db.php"; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $contactId = $_GET["id"];

    // Create an SQL query to delete data
    $sql = "DELETE FROM contacts WHERE id = $contactId";

    if (mysqli_query($link, $sql)) {
        header("Location: ../index.php"); // Redirect back to the main page
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>
