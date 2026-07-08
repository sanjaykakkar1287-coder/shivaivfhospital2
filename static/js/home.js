document.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.why-card');
        const detailWrapper = document.querySelector('.detail-content-wrapper');
        const detailTitle = document.querySelector('.why-us .detail-title');
        const detailDesc = document.querySelector('.why-us .detail-desc');
        const detailBadge = document.getElementById('detailBadge');
        const glowLayer = document.querySelector('.detail-glow-layer');

        let currentCardIndex = 0;
        let autoCycleInterval;

        function activateCard(index) {
            const targetCard = cards[index];
            if (!targetCard || targetCard.classList.contains('active')) return;

            cards.forEach(c => c.classList.remove('active'));
            targetCard.classList.add('active');

            const title = targetCard.getAttribute('data-title');
            const desc = targetCard.getAttribute('data-desc');
            const metric = targetCard.getAttribute('data-metric');

            detailWrapper.classList.add('fade-out');

            const cardRect = targetCard.getBoundingClientRect();
            glowLayer.style.transform = `translate(-${cardRect.left * 0.05}px, ${cardRect.top * 0.05}px)`;

            setTimeout(() => {
                detailTitle.textContent = title;
                detailDesc.textContent = desc;
                detailBadge.textContent = metric;

                detailWrapper.classList.remove('fade-out');
            }, 250);

            currentCardIndex = index;
        }

        function startCycle() {
            clearInterval(autoCycleInterval);
            autoCycleInterval = setInterval(() => {
                let nextIndex = (currentCardIndex + 1) % cards.length;
                activateCard(nextIndex);
            }, 3000);
        }

        cards.forEach((card, index) => {
            card.addEventListener('mouseenter', function(e) {
                activateCard(index);
                startCycle();
            });
        });

        startCycle();
    });


    // --------------------------slider-------------------------- //
    $(document).ready(function() {
        function initFacilitySlider() {
            const slides = document.querySelectorAll(".facility-panel-slide");
            const dots = document.querySelectorAll(".loop-indicators .dot");

            if (slides.length === 0 || dots.length === 0) return;

            let currentActiveIndex = 0;
            const loopIntervalDuration = 3000;
            let masterTimerInstance;

            function executeSlideTransition(targetIndex) {
                slides.forEach(slide => slide.classList.remove("active"));
                dots.forEach(dot => dot.classList.remove("active"));

                currentActiveIndex = ((targetIndex % slides.length) + slides.length) % slides.length;

                slides[currentActiveIndex].classList.add("active");
                dots[currentActiveIndex].classList.add("active");
            }

            function initiateAutoRotation() {
                clearInterval(masterTimerInstance);
                masterTimerInstance = setInterval(() => {
                    const nextIndex = (currentActiveIndex + 1) % slides.length;
                    executeSlideTransition(nextIndex);
                }, loopIntervalDuration);
            }

            function resetRotationTimeline() {
                clearInterval(masterTimerInstance);
                initiateAutoRotation();
            }

            dots.forEach((dot, index) => {
                dot.addEventListener("click", () => {
                    if (index === currentActiveIndex) return;
                    executeSlideTransition(index);
                    resetRotationTimeline();
                });
            });

            initiateAutoRotation();
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initFacilitySlider);
        } else {
            initFacilitySlider();
        }
    });

    

const floatingCards = document.querySelectorAll('.floating-card');

floatingCards.forEach(card => {
    const contents = card.querySelectorAll('.card-content');
    let current = 0;
    
    setInterval(() => {
        contents[current].classList.remove('active');
        current++;
        if (current >= contents.length) { current = 0; }
        contents[current].classList.add('active');
    }, 3000);
});
//---------------------------second part---------------------------//
$(document).ready(function(){

    let flipped = false;

    setInterval(function(){

        if(!flipped){

            $('.speciality-card')
            .addClass('flip');

            flipped = true;

        }else{

            $('.speciality-card')
            .removeClass('flip');

            flipped = false;
        }

    },3000);

});

//---------------------------third part: IVF Steps Interactive Logic---------------------------//

$(document).ready(function(){
    let currentStepIndex = 0;
    let autoPlayInterval;
    const steps = $('.ivf-step');
    
    // Get initial active step and populate details on page load
    const activeStep = $('.ivf-step.active');
    if (activeStep.length) {
        currentStepIndex = steps.index(activeStep);
        updateDetailCard(activeStep);
    }
    
    // Start auto-play
    startAutoPlay();
    
    // Click handler for IVF steps
    $('.ivf-step').click(function(e){
        e.preventDefault();
        
        // Update current index
        currentStepIndex = steps.index(this);
        
        // Remove active class from all steps
        steps.removeClass('active');
        
        // Add active class to clicked step
        $(this).addClass('active');
        
        // Update detail card with data from clicked step
        updateDetailCard($(this));
        
        // Restart auto-play timer
        clearInterval(autoPlayInterval);
        startAutoPlay();
    });
    
    // Keyboard navigation support (optional but improves accessibility)
    $('.ivf-step').on('keypress', function(e){
        if(e.which === 13 || e.which === 32) { // Enter or Space key
            e.preventDefault();
            $(this).click();
        }
    });
    
    // Function to start auto-play loop
    function startAutoPlay() {
        autoPlayInterval = setInterval(function(){
            // Move to next step
            currentStepIndex++;
            
            // Loop back to first step if at the end
            if(currentStepIndex >= steps.length) {
                currentStepIndex = 0;
            }
            
            // Get the next step and click it
            const nextStep = steps.eq(currentStepIndex);
            
            // Update active state
            steps.removeClass('active');
            nextStep.addClass('active');
            
            // Update detail card
            updateDetailCard(nextStep);
        }, 3000); // Change every 3 seconds
    }
    
    // Function to update detail card content
    function updateDetailCard(stepElement) {
        const title = stepElement.data('title');
        const desc = stepElement.data('desc');
        const duration = stepElement.data('duration');
        
        // Update with fade effect
        $('.ivf-journey .detail-title').fadeOut(150, function(){
            $(this).text(title).fadeIn(150);
        });
        
        $('.ivf-journey .detail-desc').fadeOut(150, function(){
            $(this).text(desc).fadeIn(150);
        });
        
        $('.ivf-journey .detail-time').fadeOut(150, function(){
            $(this).text(duration).fadeIn(150);
        });
    }
});

