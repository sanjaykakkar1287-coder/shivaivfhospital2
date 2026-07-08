 $(document).ready(function() {
            /* --- 1. Intro Screen Slider Logic --- */
            const introSlides = [
                { title: "Concerned About Irregular Periods?", desc: "Understand possible causes and discover whether professional evaluation may be beneficial." },
                { title: "Experiencing PCOS Symptoms?", desc: "Learn how hormonal imbalances can affect menstrual cycles, weight, fertility and overall wellbeing." },
                { title: "Planning Pregnancy?", desc: "Receive personalized guidance based on your reproductive health responses." },
                { title: "Heavy Bleeding Or Pelvic Pain?", desc: "Identify common warning signs and understand when to seek gynecological care." },
                { title: "Menopause Symptoms Affecting Daily Life?", desc: "Explore possible explanations and treatment recommendations." }
            ];
            
            let slideIndex = 0;
            const $sliderTitle = $('#slider-title');
            const $sliderDesc = $('#slider-desc');

            let sliderInterval = setInterval(() => {
                slideIndex = (slideIndex + 1) % introSlides.length;
                $('.intro-slider').fadeOut(300, function() {
                    $sliderTitle.text(introSlides[slideIndex].title);
                    $sliderDesc.text(introSlides[slideIndex].desc);
                    $(this).fadeIn(300);
                });
            }, 3000);

            /* --- Navigation Functions --- */
            function switchScreen(hideId, showId) {
                $(hideId).fadeOut(300, function() {
                    $(showId).fadeIn(300);
                });
            }

            $('#btn-start').click(function() {
                clearInterval(sliderInterval);
                switchScreen('#intro-screen', '#basic-info-screen');
            });

            /* --- 2. Basic Info Logic --- */
            let userInfo = {};

            $('#basic-info-form').submit(function(e) {
                e.preventDefault();
                userInfo.name = $('#user-name').val();
                userInfo.mobile = $('#user-mobile').val();
                userInfo.email = $('#user-email').val();
                userInfo.ageGroup = $('input[name="age_group"]:checked').val();
                
                // Send data silently to backend without showing any success message
                $.ajax({
                    url: 'save_assessment.php',
                    type: 'POST',
                    data: {
                        action: 'save_assessment',
                        name: userInfo.name,
                        mobile: userInfo.mobile,
                        email: userInfo.email,
                        age_group: userInfo.ageGroup
                    }
                });

                switchScreen('#basic-info-screen', '#question-screen');
                loadQuestion();
            });

            /* --- 3. Health Questions Logic --- */
            const quizQuestions = [
                "Are your menstrual cycles irregular?",
                "Do you experience severe menstrual pain?",
                "Do you have heavy menstrual bleeding?",
                "Have you noticed excessive facial hair growth?",
                "Have you experienced unexplained weight gain?",
                "Are you trying to conceive for more than 12 months?",
                "Do you experience pelvic pain?",
                "Are you experiencing menopause symptoms?",
                "Do you experience abnormal vaginal discharge?",
                "Have you missed periods frequently?"
            ];

            let currentQIndex = 0;
            let userAnswers = []; // Array of boolean (true=yes, false=no)

            function loadQuestion() {
                // Update Progress
                let progress = ((currentQIndex) / quizQuestions.length) * 100;
                $('#progress-bar').css('width', progress + '%');
                $('#question-counter').text(`Question ${currentQIndex + 1} of ${quizQuestions.length}`);
                
                // Update Text with animation
                $('#question-text').fadeOut(200, function() {
                    $(this).text(quizQuestions[currentQIndex]).fadeIn(200);
                });
            }

            $('.btn-answer').click(function() {
                let answer = $(this).data('answer') === 'yes';
                userAnswers.push(answer);

                currentQIndex++;

                if(currentQIndex < quizQuestions.length) {
                    loadQuestion();
                } else {
                    // Finish Quiz
                    $('#progress-bar').css('width', '100%');
                    setTimeout(() => {
                        calculateResults();
                        switchScreen('#question-screen', '#result-screen');
                    }, 400);
                }
            });

            /* --- 4. Scoring Logic --- */
            function calculateResults() {
                let scores = { pcos: 0, fertility: 0, menstrual: 0, menopause: 0 };
                let totalScore = 0;

                // Mapping logic based on userAnswers array (index 0-9 matching quizQuestions)
                if(userAnswers[0]) { scores.pcos += 2; scores.fertility += 2; } // Irregular
                if(userAnswers[1]) { scores.menstrual += 2; } // Severe pain
                if(userAnswers[2]) { scores.menstrual += 2; } // Heavy bleeding
                if(userAnswers[3]) { scores.pcos += 3; } // Facial hair
                if(userAnswers[4]) { scores.pcos += 2; } // Weight gain
                if(userAnswers[5]) { scores.fertility += 3; } // Trying to conceive
                if(userAnswers[6]) { scores.menstrual += 1; } // Pelvic pain
                if(userAnswers[7]) { scores.menopause += 3; } // Menopause
                if(userAnswers[8]) { totalScore += 1; } // Abnormal discharge (general risk)
                if(userAnswers[9]) { scores.pcos += 2; } // Missed periods

                totalScore += scores.pcos + scores.fertility + scores.menstrual + scores.menopause;

                // Determine Risk Level
                let riskLevel = "Low";
                let riskClass = "risk-low";
                if(totalScore >= 4 && totalScore <= 7) {
                    riskLevel = "Moderate";
                    riskClass = "risk-mod";
                } else if(totalScore >= 8) {
                    riskLevel = "High";
                    riskClass = "risk-high";
                }

                // Populate UI
                $('#res-name').text(userInfo.name);
                $('#risk-level-text').text(riskLevel);
                $('#risk-badge').addClass(riskClass);

                // Populate Concerns
                let $concerns = $('#concerns-list');
                $concerns.empty();
                let hasConcerns = false;

                if(scores.pcos >= 4) { $concerns.append('<li><i class="fa-solid fa-triangle-exclamation"></i> Possible PCOS Indicators</li>'); hasConcerns = true; }
                if(scores.fertility >= 3) { $concerns.append('<li><i class="fa-solid fa-triangle-exclamation"></i> Possible Fertility Concerns</li>'); hasConcerns = true; }
                if(scores.menstrual >= 2) { $concerns.append('<li><i class="fa-solid fa-triangle-exclamation"></i> Menstrual Health Assessment Recommended</li>'); hasConcerns = true; }
                if(scores.menopause >= 3) { $concerns.append('<li><i class="fa-solid fa-triangle-exclamation"></i> Menopause Consultation Recommended</li>'); hasConcerns = true; }
                
                if(!hasConcerns && totalScore < 4) {
                    $concerns.append('<li><i class="fa-solid fa-check-circle" style="color:var(--accent-sage);"></i> No severe indicators detected. Maintain routine checkups.</li>');
                }

                // Populate Next Steps
                let $steps = $('#steps-grid');
                $steps.empty();
                
                let stepsArr = [];
                if(scores.pcos >= 4 || scores.menstrual >= 2) stepsArr.push("Pelvic Ultrasound");
                if(scores.pcos >= 2 || scores.menopause >= 3) stepsArr.push("Hormonal Profile");
                if(hasConcerns) stepsArr.push("Gynecology Consultation");
                if(scores.fertility >= 3) stepsArr.push("Fertility Specialist Review");
                if(stepsArr.length === 0) stepsArr.push("Routine Lifestyle Assessment");

                // Ensure unique steps and max 4 visually
                let uniqueSteps = [...new Set(stepsArr)].slice(0, 4);
                const stepIcons = ["fa-vial", "fa-user-doctor", "fa-heart-pulse", "fa-clipboard-list"];
                
                uniqueSteps.forEach((step, idx) => {
                    $steps.append(`
                        <div class="step-card">
                            <i class="fa-solid ${stepIcons[idx % 4]}"></i>
                            <span>${step}</span>
                        </div>
                    `);
                });
            }
        });