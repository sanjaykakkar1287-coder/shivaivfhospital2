<?php
session_start();
require_once 'configdb.php';
include 'forgotpassword.php';
// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$admin_username = htmlspecialchars($_SESSION['admin_username'] ?? 'Admin');

// Fetch total leads
$total_leads_result = $conn->query("SELECT COUNT(id) as total FROM form_leads");
$total_leads = $total_leads_result->fetch_assoc()['total'] ?? 0;

// Fetch today's leads (assuming a 'created_at' column exists)
$today_leads_result = $conn->query("SELECT COUNT(id) as today FROM form_leads WHERE DATE(created_at) = CURDATE()");
$today_leads = $today_leads_result->fetch_assoc()['today'] ?? 0;

// Fetch all leads for the table
$leads_query = "SELECT id, name, email, mobile, message, created_at FROM form_leads ORDER BY created_at DESC";
$all_leads_result = $conn->query($leads_query);

// Note: The queries above assume your `form_leads` table has a `created_at` column with a TIMESTAMP.
// If not, you can add it with: ALTER TABLE form_leads ADD created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Shiva Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../static/css/staticcss/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../static/images/header/logo.jpeg">
</head>
<body>

<div class="dashboard-wrapper">
    <!-- =================================
         SIDEBAR NAVIGATION
    ================================== -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="../static/images/header/logo.jpeg" alt="Logo" class="sidebar-logo">
            <h3 class="sidebar-title">Shiva Hospital</h3>
        </div>
        <nav class="sidebar-nav">
            <a href="#" class="nav-link active" >
                <i class="fa-solid fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
             <a href=""  type="button" class="btn btn-primary nav-link changepass" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-key changepass"></i>
                <span>Change Password</span>
            </a>
            <!-- Button trigger modal -->

            <a href="logout.php" class="nav-link nav-link-logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </nav>
    </aside>

    <!-- =================================
         MAIN CONTENT AREA
    ================================== -->
    <main class="main-content">
        <!-- Header -->
        <header class="main-header">
            <h1 class="header-title">Form Leads Dashboard</h1>
            <p class="header-subtitle">Welcome, <?php echo $admin_username; ?>! Review all contact form submissions here.</p>
        </header>

        <!-- Stats Cards -->
        <section class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #f0fdf4;">
                    <i class="fa-solid fa-file-signature" style="color: #22c55e;"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-value"><?php echo $today_leads; ?></span>
                    <span class="stat-label">Today's Leads</span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #eef2ff;">
                    <i class="fa-solid fa-layer-group" style="color: #4f46e5;"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-value"><?php echo $total_leads; ?></span>
                    <span class="stat-label">Total Leads</span>
                </div>
            </div>
        </section>

        <!-- Leads Table -->
        <div class="table-container">
            <table class="leads-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Message</th>
                        <th>Received On</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($lead = $all_leads_result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $lead['id']; ?></td>
                        <td><?php echo htmlspecialchars($lead['name']); ?></td>
                        <td><?php echo htmlspecialchars($lead['email']); ?></td>
                        <td><?php echo htmlspecialchars($lead['mobile']); ?></td>
                        <td class="message-cell" title="Double click to view message"><?php echo htmlspecialchars($lead['message']); ?></td>
                        <td><?php echo date("d M Y, h:i A", strtotime($lead['created_at'])); ?></td>
                        <td class="actions-cell">
                            <a href="#" class="btn-delete" data-id="<?php echo $lead['id']; ?>" title="Delete Lead">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../static/adminjs/delete_lead.js"></script>
<script src="../static/adminjs/msg.js"></script>


</body>
</html>