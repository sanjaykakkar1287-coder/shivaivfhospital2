<?php
session_start();
require_once "configdb.php";

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit("Invalid Request");
}

$login = trim($_POST['login']);

if (empty($login)) {
    exit("Please enter Username or Email.");
}

// Check User
$stmt = $conn->prepare("
    SELECT id, username, email
    FROM admin_users
    WHERE username = ? OR email = ?
    LIMIT 1
");

$stmt->bind_param("ss", $login, $login);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 0) {
    exit("Username or Email not found.");
}

$user = $result->fetch_assoc();

// Generate Secure Token
$token = bin2hex(random_bytes(32));

// Expiry Time (1 Hour)
$expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

// Save Token
$update = $conn->prepare("
    UPDATE admin_users
    SET reset_token = ?, token_expiry = ?
    WHERE id = ?
");

$update->bind_param("ssi", $token, $expiry, $user['id']);

if ($update->execute()) {

    // Step 4 me is token ko email karenge
    echo "success";

} else {

    echo "Unable to generate reset link.";

}

$update->close();
$stmt->close();
$conn->close();