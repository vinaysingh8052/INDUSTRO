<?php

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_requests 
        (name, email, phone, service, message)
        VALUES 
        ('$name', '$email', '$phone', '$service', '$message')";

if (mysqli_query($conn, $sql)) {

    header("Location: contact.php?success=1");
    exit();

} else {

    echo "Error: " . mysqli_error($conn);
}

?>