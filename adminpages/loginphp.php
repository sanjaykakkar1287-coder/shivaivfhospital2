<?php
session_start();
require_once "configdb.php";

$login = trim($_POST['email']); // Is field me username ya email dono aa sakte hain
$password = $_POST['password'];

$stmt = $conn->prepare("
    SELECT id, username, email, password
    FROM admin_users
    WHERE username = ? OR email = ?
    LIMIT 1
");

$stmt->bind_param("ss", $login, $login);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {

        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_username'] = $user['username'];
        $_SESSION['admin_email'] = $user['email'];
        $_SESSION['admin_logged_in'] = true;

        echo "success";

    } else {
        echo "Invalid Password.";
    }

} else {
    echo "Username or Email not found.";
}

$stmt->close();
$conn->close();