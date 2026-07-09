<?php
session_start();
require_once 'configdb.php';

header('Content-Type: application/json');

// Security check: ensure the user is a logged-in admin
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized access.']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
    exit;
}

$lead_id = (int)$_POST['id'];

$stmt = $conn->prepare("DELETE FROM form_leads WHERE id = ?");
$stmt->bind_param("i", $lead_id);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Database error: Could not delete the record.']);
}

$stmt->close();
$conn->close();
?>