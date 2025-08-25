<?php
// Database connection
include 'config.php';

// Get POST data
$name     = $_POST['name'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$website  = $_POST['website'];
$message  = $_POST['message'];

// Insert into DB
$sql = "INSERT INTO tbl_enquiry (name, email, phone, website, message) 
        VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $phone, $website, $message);

if ($stmt->execute()) {
echo "<script>alert('Your message has been submitted successfully.'); window.location.href='contact.php';</script>";
} else {
    echo "<script>alert('Error submitting form. Please try again.'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
