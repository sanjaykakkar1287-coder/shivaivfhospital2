
function initAdvancedPage() {

    // 1. Dynamic 3D Tilt-Follow Effect on Flip Cards
    const cards = $('.dg-flip-card-wrapper');
    
    cards.on('mousemove', function(e) {
        const cardInner = $(this).find('.dg-card-flipper');
        
        // Calculate mouse position relative to this specific card coordinates
        const cardOffset = $(this).offset();
        const cardWidth = $(this).outerWidth();
        const cardHeight = $(this).outerHeight();
        
        const mouseX = e.pageX - cardOffset.left;
        const mouseY = e.pageY - cardOffset.top;
        
        // Convert coordinates to tilt angles (-10deg to 10deg max tilt parameters)
        const tiltX = ((cardHeight / 2 - mouseY) / (cardHeight / 2)) * 10;
        const tiltY = ((mouseX - cardWidth / 2) / (cardWidth / 2)) * 10;
        
        // Apply interactive transformation values dynamically
        // Note: If card is hovered and flipped, we preserve the 180deg flip state while adding tilt micro-offsets
        if ($(this).is(':hover')) {
            cardInner.css('transform', `rotateY(180deg) rotateX(${tiltX}deg) rotateZ(${-tiltY * 0.1}deg)`);
        }
    });
    
    // Reset spatial transforms smoothly when mouse departs card boundaries
    cards.on('mouseleave', function() {
        const cardInner = $(this).find('.dg-card-flipper');
        cardInner.css({
            'transform': 'rotateY(0deg) rotateX(0deg) rotateZ(0deg)',
            'transition': 'transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1)'
        });
    });

    // 2. Intersection Observer Trigger for Staggered Checklist Nodes
    let checkNodes = $('.dg-check-node');
    
    // Initial state set programmatically via JS to prevent breaking raw markup environments
    checkNodes.css({
        'opacity': '0',
        'transform': 'translateY(15px)',
        'transition': 'all 0.5s cubic-bezier(0.25, 1, 0.5, 1)'
    });
    
    let observedTriggered = false;
    $(window).on('scroll.infraCheck', function() {
        if ($('.dg-checklist-cloud').length) {
            let elementTriggerPoint = $('.dg-checklist-cloud').offset().top - $(window).height() + 80;
            
            if (!observedTriggered && $(window).scrollTop() > elementTriggerPoint) {
                observedTriggered = true;
                
                // Staggered layout drop down deployment sequence loops
                checkNodes.each(function(index) {
                    setTimeout(() => {
                        $(this).css({
                            'opacity': '1',
                            'transform': 'translateY(0)'
                        });
                    }, index * 150); // 150ms step-delay intervals
                });
                
                $(window).off('scroll.infraCheck'); // Kill tracking process cleanly once fired
            }
        }
    });

    // 3. Smooth Micro-Bounce Action on Hero Metrics Load
    $('.dg-metric-pill').each(function(index) {
        $(this).css({
            'opacity': '0',
            'transform': 'translateX(30px)',
            'transition': 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)'
        });
        
        setTimeout(() => {
            $(this).css({
                'opacity': '1',
                'transform': 'translateX(0)'
            });
        }, 300 + (index * 120));
    });

}
