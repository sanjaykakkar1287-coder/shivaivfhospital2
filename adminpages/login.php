<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Shiva Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../static/css/staticcss/login.css">
    <link rel="icon" type="image/x-icon" href="../static/images/header/logo.jpeg">
</head>
<body>

<section class="login-screen">
    <div class="login-glow-bg"></div>
    <div class="login-card-wrapper">
        <div class="login-logo">
            <img src="../static/images/header/logo.jpeg" alt="Shiva Hospital Logo">
        </div>
        <h2 class="login-title">Administrator Login</h2>
        <p class="login-subtitle">Enter your credentials to access the dashboard.</p>

        <form id="adminLoginForm" class="login-form">
            <div class="form-group">
                <label for="email">Email Address</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" id="email" name="email" placeholder="username or email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>
            </div>

            <div id="login-error-message" class="error-banner" style="display: none;"></div>

            <button type="submit" class="btn-login">
                <span class="btn-text">Login Securely</span>
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../static/adminjs/login.js"></script>



</body>
</html>