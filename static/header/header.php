<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="premium-header">
    <div class="main-nav-wrapper">
        <div class="header-container">
            
            <!-- Sleek Modern Logo -->
            <div class="logo">
                <a href="/">
                    <img src="./static/images/header/logo.jpeg" alt="Shiva Hospital Logo" class="logo-icon">
                </a>
            </div>

            <!-- Hamburger Menu for Mobile with micro-animation -->
            <button class="menu-burger" id="menuBurger" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Navigation Menu -->
            <nav class="nav-container" id="navContainer">
                <ul class="nav-menu">
                    <li class="menu-item"><a href="index.php" class="menu-link <?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>">Home</a></li>
                    <li class="menu-item has-dropdown">
                        <a href="#" class="menu-link <?php echo in_array($currentPage, ['aboutus.php', 'testimonial.php', 'our_team.php']) ? 'active' : ''; ?>">About Us <i class="fas fa-chevron-down drop-icon"></i></a>
                        <ul class="dropdown-menu">
                            <li class="menu-item"><a href="" class="menu-link about-btn <?php echo ($currentPage == 'aboutus.php') ? 'active' : ''; ?>">About Us</a></li>
                            <li class="drop-item"><a href="" class=" testimonials-btn <?php echo ($currentPage == 'testimonial.php') ? 'active' : ''; ?>">Testimonial</a></li>
                            <li class="drop-item"><a href="" class=" ourteam-btn <?php echo ($currentPage == 'our_team.php') ? 'active' : ''; ?>">Our Team</a></li>
                            
                        </ul>
                    
                    
                    <!-- Level 1 Dropdown -->
                    <li class="menu-item has-dropdown">
                        <a href="#" class="menu-link">Our Services <i class="fas fa-chevron-down drop-icon"></i></a>
                        <ul class="dropdown-menu">
                            <li class="drop-item "><a href="" class="diagnostics-btn">Advanced Diagnostics</a></li>
                            
                            <!-- Level 2 Dropdown (Submenu of Submenu) -->
                            <li class="drop-item has-submenu">
                                <a href="#" class="drop-link-nested">Medical Departments <i class="fas fa-chevron-right sub-icon"></i></a>
                                <ul class="submenu-child">
                                    <li><a href="" class="gyne-btn">Gynecology</a></li>
                                    <li><a href="" class=" maternity-btn <?php echo ($currentPage == 'maternity.php') ? 'active' : ''; ?>">Maternity</a></li>
                                    <li><a href="" class="diabetes-btn <?php echo ($currentPage == 'diabetes.php') ? 'active' : ''; ?>">Diabetes</a></li>
                                    <li><a href="" class="ortho-btn">Orthopedics</a></li>
                                </ul>
                            </li>
                            
                            <li class="drop-item"><a href="emergency.php">Emergency Services</a></li>
                        </ul>
                    </li>

                    <li class="menu-item"><a href="our_specialities.php" class="menu-link <?php echo ($currentPage == 'our_specialities.php') ? 'active' : ''; ?>">Our Specialists</a></li>
                    <li class="menu-item"><a href="contact.php" class="menu-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>

            <!-- Animated Mobile Number Emergency Button -->
            <div class="emergency-cta">
                <a href="tel:+18005550199" class="phone-pulse-btn">
                    <span class="pulse-icon"><i class="fas fa-phone-alt"></i></span>
                    <div class="phone-text">
                        <span class="label">24/7 Emergency</span>
                        <span class="number">+917060302733</span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</header>
