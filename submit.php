<?php
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $first_name = $_POST['name'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $need = $_POST['need'];
    $message = $_POST['message'];

    // Prepare and execute the SQL statement to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO credentials (first_name, last_name, email_address, need, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $need, $message);

    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Data inserted into the database.";
    } else {
        // Error occurred while inserting data
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
