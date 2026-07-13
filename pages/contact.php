<!-- ===================================================
     SECTION 1: HERO / HEADER SECTION
     =================================================== -->
<section class="sh-contact-hero">
    <div class="sh-ambient-glow sh-glow-top"></div>
    <div class="sh-ambient-glow sh-glow-bottom"></div>

    <div class="sh-contact-container">
        <span class="sh-contact-badge">Get In Touch</span>
        <h1 class="sh-contact-main-heading">
            We Are Here To <span class="sh-contact-highlight">Help You</span>
        </h1>
        <p class="sh-contact-lead-desc">
            Have a question about our specialties, want to book an appointment, or planning a hospital visit? Reach out to our dedicated team. We are available 24/7 for your emergency medical needs.
        </p>
    </div>
</section>

<!-- ===================================================
     SECTION 2: CORE DETAILS & PATIENT INQUIRY FORM
     =================================================== -->
<section class="sh-contact-body-layout">
    <div class="sh-contact-container">
        <div class="sh-contact-split-grid">
            
            <!-- LEFT COLUMN: Contact Cards -->
            <div class="sh-contact-info-stack">
                
                <!-- Card 1: Emergency -->
                <div class="sh-info-mini-card sh-emergency-alert-card">
                    <div class="sh-info-icon"><i class="fa-solid fa-phone-volume"></i></div>
                    <div class="sh-info-text">
                        <h4>24/7 Emergency & Ambulance</h4>
                        <a href="tel:+917060302733" class="sh-phone-link">+91 7060302733</a>
                        <p>Call for immediate critical care dispatch.</p>
                    </div>
                </div>

                <!-- Card 2: General & Appointments -->
                <div class="sh-info-mini-card">
                    <div class="sh-info-icon"><i class="fa-solid fa-hospital"></i></div>
                    <div class="sh-info-text">
                        <h4>General Inquiries & OPD</h4>
                        <p class="sh-detail-row"><strong>Phone:</strong> +91 7060302733</p>
                        <p class="sh-detail-row"><strong>Email:</strong> info@shivahospital.com</p>
                    </div>
                </div>

                <!-- Card 3: Address & Hours -->
                <div class="sh-info-mini-card">
                    <div class="sh-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="sh-info-text">
                        <h4>Hospital Location & Hours</h4>
                        <p class="sh-detail-row">Shiva Hospital, Near Railway Station, G.T. Road, Karnal, Haryana</p>
                        <p class="sh-detail-row"><strong>OPD:</strong> Mon - Sat: 9:00 AM - 8:00 PM</p>
                        <p class="sh-detail-row"><strong>ER Unit:</strong> Open 24/7</p>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: Interactive Form -->
            <div class="sh-contact-form-holder">
                <div class="sh-form-header">
                    <h3>Send Us a Message</h3>
                    <p>Fill out the form below, and our hospital helpdesk will get back to you shortly.</p>
                </div>

                <form id="shHospitalContactForm" class="sh-modern-form" onsubmit="return false;">
                    <div class="sh-form-row-twin">
                        <div class="sh-form-group">
                            <label for="patientName">Full Name *</label>
                            <input type="text" id="patientName" required placeholder="e.g. John Doe">
                        </div>
                        <div class="sh-form-group">
                            <label for="patientPhone">Phone Number *</label>
                            <input type="tel" id="patientPhone" required placeholder="e.g. +91 98765 43210">
                        </div>
                    </div>

                    <div class="sh-form-row-twin">
                        <div class="sh-form-group">
                            <label for="patientEmail">Email Address</label>
                            <input type="email" id="patientEmail" placeholder="e.g. john@example.com">
                        </div>
                        <div class="sh-form-group">
                            <label for="medicalDepartment">Select Department *</label>
                            <select id="medicalDepartment" required>
                                <option value="" disabled selected>Choose a specialty...</option>
                                <option value="general">General Inquiry</option>
                                <option value="gynecology">Gynecology & Women's Health</option>
                                <option value="maternity">Maternity & Obstetrics</option>
                                <option value="orthopedics">Orthopedics & Spine</option>
                                <option value="diabetology">Diabetology & Endocrinology</option>
                            </select>
                        </div>
                    </div>

                    <div class="sh-form-group">
                        <label for="patientMessage">Your Message / Medical Concern *</label>
                        <textarea id="patientMessage" rows="5" required placeholder="How can our medical team help you today?"></textarea>
                    </div>

                    <button type="submit" class="sh-form-submit-btn">
                        <span>Send Message</span> <i class="fa-solid fa-paper-plane"></i>
                    </button>
                    
                    <div class="sh-form-success-alert" id="formSuccessMessage">
                        <i class="fa-solid fa-circle-check"></i> Thank you! Your message has been sent successfully. We will contact you soon.
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- ===================================================
     SECTION 3: ACCORDION FAQs SECTION
     =================================================== -->
<section class="sh-contact-faq-section">
    <div class="sh-contact-container">
        <div class="sh-faq-section-header">
            <span class="sh-contact-badge">FAQ</span>
            <h2>Frequently Asked <span class="sh-contact-highlight">Questions</span></h2>
            <p>Quick answers to common questions regarding appointments, insurance, and emergency services.</p>
        </div>

        <div class="sh-faq-accordion-container">
            <!-- FAQ Item 1 -->
            <div class="sh-faq-item">
                <button class="sh-faq-trigger">
                    <span>How do I book a priority appointment with a specialist?</span>
                    <i class="fa-solid fa-plus"></i>
                </button>
                <div class="sh-faq-panel">
                    <p>You can call our main reception desks directly at +91 7060302733 or fill out the online contact form on this page by selecting your desired medical department. Our team will verify and confirm your slot.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="sh-faq-item">
                <button class="sh-faq-trigger">
                    <span>Does Shiva Hospital offer cashless insurance facilities?</span>
                    <i class="fa-solid fa-plus"></i>
                </button>
                <div class="sh-faq-panel">
                    <p>Yes, we are empanelled with leading TPA and corporate health insurance providers. Please bring your insurance card and identity proof to our corporate desk in the main admission lobby for quick pre-authorization.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="sh-faq-item">
                <button class="sh-faq-trigger">
                    <span>Is there an ambulance service available for emergency trauma picks?</span>
                    <i class="fa-solid fa-plus"></i>
                </button>
                <div class="sh-faq-panel">
                    <p>Absolutely. Our advanced cardiac life-support ambulances are ready 24/7 with fully loaded life-support electronics. Call our dedicated emergency response hotline at <strong>+91 7060302733</strong> for immediate dispatch tracking.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================================================
     SECTION 4: EMERGENCY REDIRECTION ACTION BLOCK
     =================================================== -->
<section class="sh-contact-er-banner">
    <div class="sh-contact-container">
        <div class="sh-er-banner-box">
            <div class="sh-er-banner-content">
                <h3>Facing a Critical Medical Emergency?</h3>
                <p>Need immediate medical care? Our healthcare team is here to assist you. Please visit the hospital or call us directly for urgent cases</p>
            </div>
            <a href="tel:+917060302733" class="sh-er-banner-call-btn">
                <i class="fa-solid fa-phone-flip"></i> Call  Now
            </a>
        </div>
    </div>
</section>

<!-- ===================================================
     INTERACTIVE COMPONENT JAVASCRIPT
     =================================================== -->
<script>
 fnq()
</script>
