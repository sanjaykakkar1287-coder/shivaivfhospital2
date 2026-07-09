<?php
require_once 'configdb.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $mobile  = trim($_POST['mobile'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if(empty($name) || empty($email) || empty($mobile) || empty($message)){
        echo "All fields are required.";
        exit;
    }

    // Save to database / send email here

    $stmt = $conn->prepare("
    INSERT INTO form_leads
    (name, email, mobile, message)
    VALUES (?, ?, ?, ?)
");

$stmt->bind_param("ssss", $name, $email, $mobile, $message);

if ($stmt->execute()) {
    echo "success";
} else {
   echo "Database error";
}

$stmt->close();
$conn->close();

}
?>