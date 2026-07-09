<!-- ===================================================
     DIAGNOSTICS V4: TECH HERO SECTION
     =================================================== -->
<section class="dg-tech-hero">
    <div class="dg-hero-radial"></div>
    <div class="dg-container">
        <div class="dg-hero-split">
            <div class="dg-hero-narrative">
                <span class="dg-system-badge">Diagnostics Center</span>
                <h1 class="dg-main-heading">Precision in Diagnosis,<br> <span class="dg-text-blue">Excellence in Care</span></h1>
                <p class="dg-lead-desc">Equipped with industry-defining imaging and automated pathology systems, Shiva Hospital delivers fast, accurate, and reliable results to ensure the most effective treatment plans.</p> 
            </div>
            
            <!-- Structural Feature Highlights Track -->
            <div class="dg-hero-metrics-track">
                <div class="dg-metric-pill">
                    <div class="dg-pill-icon"><i class="fa-solid fa-microscope"></i></div>
                    <span>Robotic Lab Assays</span>
                </div>
                <div class="dg-metric-pill">
                    <div class="dg-pill-icon"><i class="fa-solid fa-bolt"></i></div>
                    <span>Rapid Report Turns</span>
                </div>
                <div class="dg-metric-pill">
                    <div class="dg-pill-icon"><i class="fa-solid fa-放射線"></i></div>
                    <span>Low Dose Imaging</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================================================
     DIAGNOSTICS V4: 3D FLIP-DECK GRID
     =================================================== -->
<section class="dg-capabilities-block">
    <div class="dg-container">
        <div class="dg-section-header">
            <h2>Our Diagnostic <span class="dg-text-blue">Capabilities</span></h2>
            <p>Comprehensive testing and molecular imaging handled entirely under one roof.</p>
        </div>
        
        <div class="dg-flip-deck-grid">
            <?php
            $services = [
                ["icon" => "fa-solid fa-magnet", "title" => "3T MRI & CT Scan", "desc" => "High-resolution imaging for detailed micro-anomaly identification.", "back_desc" => "Our 3T MRI provides exceptional clarity for neurological, musculoskeletal, and soft tissue imaging."],
                ["icon" => "fa-solid fa-microscope", "title" => "Automated Pathology", "desc" => "NABL-certified robotic laboratory for rapid and pristine medical metrics.", "back_desc" => "Fully automated sample processing minimizes human error and ensures fast, reliable results for all tests."],
                ["icon" => "fa-solid fa-wave-square", "title" => "Advanced Ultrasound", "desc" => "State-of-the-art 3D/4D sonography for obstetrics and cardiology.", "back_desc" => "We offer detailed fetal well-being scans, Doppler studies, and comprehensive cardiac evaluations."],
                ["icon" => "fa-solid fa-x-ray", "title" => "Digital X-Ray", "desc" => "High-speed digital radiography with minimal radiation exposure.", "back_desc" => "Instant, crystal-clear images aid in quick diagnosis for fractures, infections, and other conditions."],
                ["icon" => "fa-solid fa-heart-circle-bolt", "title" => "Cardiac Diagnostics", "desc" => "Assessments including Echocardiography, TMT, and Holter Monitoring.", "back_desc" => "A complete suite of non-invasive tests to evaluate heart function and detect cardiac abnormalities."],
                ["icon" => "fa-solid fa-stethoscope", "title" => "Endoscopy Suite", "desc" => "Minimally invasive procedures for gastrointestinal health.", "back_desc" => "High-definition endoscopic and colonoscopic examinations for accurate diagnosis of digestive tract issues."]
            ];

            foreach ($services as $service) {
            ?>
                <div class="dg-flip-card-wrapper">
                    <div class="dg-card-flipper">
                        <!-- FRONT FACE -->
                        <div class="dg-face-panel dg-face-front">
                            <div class="dg-card-icon-frame"><i class="<?php echo $service['icon']; ?>"></i></div>
                            <h3><?php echo $service['title']; ?></h3>
                            <p><?php echo $service['desc']; ?></p>
                            <span class="dg-action-hint">View Details <i class="fa-solid fa-arrow-turn-up"></i></span>
                        </div>
                        <!-- BACK FACE -->
                        <div class="dg-face-panel dg-face-back">
                            <div class="dg-card-icon-frame back-icon"><i class="<?php echo $service['icon']; ?>"></i></div>
                            <h3><?php echo $service['title']; ?></h3>
                            <p><?php echo $service['back_desc']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ===================================================
     DIAGNOSTICS V4: QUALITY INFRASTRUCTURE
     =================================================== -->
<section class="dg-infrastructure-matrix">
    <div class="dg-container">
        <div class="dg-infra-row-split">
            <!-- Text Analytics Grid -->
            <div class="dg-infra-text">
                <span class="dg-system-badge">Technology & Speed</span>
                <h2>Zero Compromise on <span class="dg-text-blue">Quality</span></h2>
                <p class="dg-infra-lead">At Shiva Hospital, diagnostic accuracy is the foundation of patient recovery. We utilize artificial intelligence and fully automated workflows to process samples and scans instantly.</p>
                
                <div class="dg-checklist-cloud">
                    <div class="dg-check-node"><i class="fa-solid fa-circle-check"></i> 24/7 Operational Laboratory & Imaging</div>
                    <div class="dg-check-node"><i class="fa-solid fa-circle-check"></i> Zero-Error Robotic Assays</div>
                    <div class="dg-check-node"><i class="fa-solid fa-circle-check"></i> Rapid Turnaround Time for Critical Care</div>
                    <div class="dg-check-node"><i class="fa-solid fa-circle-check"></i> Certified by National & International Boards</div>
                </div>
            </div>
            
            <!-- Graphic Frame -->
            <div class="dg-infra-media">
                <div class="dg-media-mask-box">
                    <img src="./static/images/homeimages/techspeed.jpg" alt="Advanced Laboratory Automation Processing Core">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================================================
     DIAGNOSTICS V4: FLOATING DISPATCH CTA
     =================================================== -->
<section class="dg-dispatch-cta">
    <div class="dg-container">
        <div class="dg-cta-glass-dashboard">
            <div class="dg-cta-text-bundle">
                <h2>Need a Diagnostic Test?</h2>
                <p>Schedule your appointment or visit our center for immediate diagnostic imaging and lab tests.</p>
            </div>
            <a href="contact.php" class="dg-cta-trigger-btn">
                <span>Book a Test Now</span> <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
<script>
    initAdvancedPage(); 
</script>