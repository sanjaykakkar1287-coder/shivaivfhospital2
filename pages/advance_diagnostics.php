
   
    <!-- Diagnostics Hero Section -->
    <section class="diag-hero">
        <div class="container">
            <div class="diag-hero-content">
                <span class="section-tag">Diagnostics Center</span>
                <h1 class="gradient-text">Precision in Diagnosis,<br> Excellence in Care</h1>
                <p>Equipped with industry-defining imaging and automated pathology systems, Shiva Hospital delivers fast, accurate, and reliable results to ensure the most effective treatment plans.</p> 
            </div>
        </div>
    </section>

    <!-- Core Diagnostics Services Section -->
    <section class="diag-services">
        <div class="container">
            <div class="section-heading" style="text-align: center; align-items: center; margin-bottom: 50px;">
                <h2>Our <span class="gradient-text">Diagnostic Capabilities</span></h2>
                <p>Comprehensive testing and imaging under one roof.</p>
            </div>
            <div class="diag-slider-container">
                <div class="diag-grid">
                    <?php
                    $services = [
                        ["icon" => "fa-solid fa-magnet", "title" => "3T MRI & CT Scan", "desc" => "High-resolution imaging for detailed micro-anomaly identification.", "back_desc" => "Our 3T MRI provides exceptional clarity for neurological, musculoskeletal, and soft tissue imaging."],
                        ["icon" => "fa-solid fa-microscope", "title" => "Automated Pathology", "desc" => "NABL-certified robotic laboratory for rapid and pristine medical metrics.", "back_desc" => "Fully automated sample processing minimizes human error and ensures fast, reliable results for all tests."],
                        ["icon" => "fa-solid fa-wave-square", "title" => "Advanced Ultrasound", "desc" => "State-of-the-art 3D/4D sonography for obstetrics and cardiology.", "back_desc" => "We offer detailed fetal well-being scans, Doppler studies, and comprehensive cardiac evaluations."],
                        ["icon" => "fa-solid fa-x-ray", "title" => "Digital X-Ray", "desc" => "High-speed digital radiography with minimal radiation exposure.", "back_desc" => "Instant, crystal-clear images aid in quick diagnosis for fractures, infections, and other conditions."],
                        ["icon" => "fa-solid fa-heart-circle-bolt", "title" => "Cardiac Diagnostics", "desc" => "Assessments including Echocardiography, TMT, and Holter Monitoring.", "back_desc" => "A complete suite of non-invasive tests to evaluate heart function and detect cardiac abnormalities."],
                        ["icon" => "fa-solid fa-stethoscope", "title" => "Endoscopy Suite", "desc" => "Minimally invasive procedures for gastrointestinal health.", "back_desc" => "High-definition endoscopic and colonoscopic examinations for accurate diagnosis of digestive tract issues."]
                    ];
                    $all_services = array_merge($services, $services); // Duplicate for infinite loop

                    foreach ($all_services as $service) {
                    ?>
                        <div class="diag-card">
                            <div class="diag-card-inner">
                                <div class="diag-card-face">
                                    <div class="diag-icon"><i class="<?php echo $service['icon']; ?>"></i></div>
                                    <h3><?php echo $service['title']; ?></h3>
                                    <p><?php echo $service['desc']; ?></p>
                                </div>
                                <div class="diag-card-face back">
                                    <div class="diag-icon"><i class="<?php echo $service['icon']; ?>"></i></div>
                                    <h3><?php echo $service['title']; ?></h3>
                                    <p><?php echo $service['back_desc']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology / Why Choose Us Highlights -->
    <section class="diag-tech">
        <div class="container tech-wrapper">
            <div class="tech-content">
                <span class="section-tag">Technology & Speed</span>
                <h2>Zero Compromise on <span class="gradient-text">Quality</span></h2>
                <p>At Shiva Hospital, diagnostic accuracy is the foundation of patient recovery. We utilize artificial intelligence and fully automated workflows to process samples and scans instantly.</p>
                <ul class="tech-features">
                    <li><i class="fa-solid fa-check-circle"></i> 24/7 Operational Laboratory & Imaging</li>
                    <li><i class="fa-solid fa-check-circle"></i> Zero-Error Robotic Assays</li>
                    <li><i class="fa-solid fa-check-circle"></i> Rapid Turnaround Time for Critical Care</li>
                    <li><i class="fa-solid fa-check-circle"></i> Certified by National & International Boards</li>
                </ul>
            </div>
            <!-- Leveraging existing premium image or placeholder -->
            <div class="tech-image">
                <img src="./static/images/homeimages/techspeed.jpg" alt="Advanced Laboratory Systems">
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="diag-cta">
        <div class="container">
            <h2>Need a Diagnostic Test?</h2>
            <p>Schedule your appointment or visit our center for immediate diagnostic imaging and lab tests.</p>
            <a href="contact.php" class="btn-diag-cta">Book a Test Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
