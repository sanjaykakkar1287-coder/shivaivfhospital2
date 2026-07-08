

    <section class="assessment-section">
        <div class="assessment-bg-glow glow-1"></div>
        <div class="assessment-bg-glow glow-2"></div>

        <div class="container assessment-container">
            
            <!-- =========================================
                 SECTION 1 - INTRO SCREEN
            ========================================= -->
            <div id="intro-screen" class="glass-card screen active-screen">
                <span class="section-tag">Women's Health Assessment</span>
                
                <div class="intro-slider">
                    <h1 id="slider-title" class="gradient-text">Concerned About Irregular Periods?</h1>
                    <p id="slider-desc">Understand possible causes and discover whether professional evaluation may be beneficial.</p>
                </div>

                <div class="assessment-stats">
                    <div class="stat-item"><i class="fa-solid fa-list-check"></i> 10 Questions</div>
                    <div class="stat-item"><i class="fa-regular fa-clock"></i> 2 Minutes</div>
                    <div class="stat-item"><i class="fa-solid fa-file-medical"></i> Personalized Report</div>
                </div>

                <button id="btn-start" class="btn-primary btn-large">Begin Personalized Assessment <i class="fa-solid fa-arrow-right"></i></button>
            </div>

            <!-- =========================================
                 SECTION 2 - BASIC INFORMATION
            ========================================= -->
            <div id="basic-info-screen" class="glass-card screen" style="display: none;">
                <h2 class="screen-title">Let's Get Started</h2>
                <p class="screen-subtitle">Please provide your basic information to personalize your report.</p>

                <form id="basic-info-form" class="assessment-form">
                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" id="user-name" required placeholder="Enter your full name">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Mobile Number *</label>
                            <input type="tel" id="user-mobile" required pattern="[0-9]{10}" maxlength="10" placeholder="10-digit mobile number">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" id="user-email" placeholder="Optional">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Age Group *</label>
                        <div class="age-options">
                            <label class="age-radio"><input type="radio" name="age_group" value="Under 18" required> <span>Under 18</span></label>
                            <label class="age-radio"><input type="radio" name="age_group" value="18-25"> <span>18-25</span></label>
                            <label class="age-radio"><input type="radio" name="age_group" value="26-35"> <span>26-35</span></label>
                            <label class="age-radio"><input type="radio" name="age_group" value="36-45"> <span>36-45</span></label>
                            <label class="age-radio"><input type="radio" name="age_group" value="45+"> <span>45+</span></label>
                        </div>
                    </div>

                    <button type="submit" class="btn-primary btn-large">Continue <i class="fa-solid fa-arrow-right"></i></button>
                </form>
            </div>

            <!-- =========================================
                 SECTION 3 - HEALTH QUESTIONS
            ========================================= -->
            <div id="question-screen" class="glass-card screen" style="display: none;">
                <div class="progress-wrapper">
                    <div class="progress-bar-container">
                        <div id="progress-bar" class="progress-fill"></div>
                    </div>
                    <div id="question-counter" class="question-counter">Question 1 of 10</div>
                </div>

                <div class="question-container">
                    <h2 id="question-text" class="question-title">Loading question...</h2>
                    
                    <div class="answer-options">
                        <button class="btn-answer" data-answer="yes">Yes</button>
                        <button class="btn-answer" data-answer="no">No</button>
                    </div>
                </div>
            </div>

            <!-- =========================================
                 SECTION 4 - RESULT SCREEN
            ========================================= -->
            <div id="result-screen" class="glass-card screen" style="display: none;">
                <div class="result-header">
                    <h2 class="screen-title">Hello <span id="res-name" class="gradient-text"></span></h2>
                    <p class="screen-subtitle">Your Women's Health Assessment Report is ready.</p>
                </div>

                <div class="risk-badge-container">
                    <div id="risk-badge" class="risk-badge">
                        <span class="risk-label">Overall Risk Level</span>
                        <strong id="risk-level-text">Low</strong>
                    </div>
                </div>

                <div class="result-analysis">
                    <h3>Possible Areas Requiring Attention</h3>
                    <ul id="concerns-list" class="concerns-list">
                        <!-- Generated via JS -->
                    </ul>
                </div>

                <div class="result-recommendations">
                    <h3>Recommended Next Steps</h3>
                    <div id="steps-grid" class="steps-grid">
                        <!-- Generated via JS -->
                    </div>
                </div>

                <div class="result-cta-card">
                    <h3>Would you like a detailed women's health report?</h3>
                    <ul class="cta-benefits">
                        <li><i class="fa-solid fa-check"></i> Personalized Summary</li>
                        <li><i class="fa-solid fa-check"></i> Recommended Tests</li>
                        <li><i class="fa-solid fa-check"></i> Women's Health Guidance</li>
                    </ul>
                    <div class="cta-buttons">
                        <a href="#" class="btn-outline">Get Detailed Report</a>
                        <a href="contact.php" class="btn-primary">Book Consultation</a>
                    </div>
                </div>

                <div class="disclaimer">
                    <i class="fa-solid fa-circle-info"></i> <strong>Disclaimer:</strong> This assessment is intended for educational purposes only and does not replace professional medical advice, diagnosis, or treatment.
                </div>
            </div>

        </div>
    </section>

   

   