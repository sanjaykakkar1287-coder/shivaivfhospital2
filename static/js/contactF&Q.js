function fnq(){
    
    // 1. FAQ Accordion Smooth Sliding Action
    $('.sh-faq-trigger').on('click', function(){
        let item = $(this).closest('.sh-faq-item');
        let panel = item.find('.sh-faq-panel');
        let icon = $(this).find('i');
        
        // Close other items
        item.siblings().removeClass('open').find('.sh-faq-panel').slideUp(250);
        item.siblings().find('.sh-faq-trigger i').removeClass('fa-minus').addClass('fa-plus');
        
        // Toggle current item
        if(item.hasClass('open')) {
            item.removeClass('open');
            panel.slideUp(250);
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            item.addClass('open');
            panel.slideDown(250);
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // 2. Interactive Contact Form Submission Effects
    $('#shHospitalContactForm').on('submit', function(e){
        e.preventDefault();
        let submitBtn = $(this).find('.sh-form-submit-btn');
        let successAlert = $('#formSuccessMessage');
        
        // Add processing micro-animation
        submitBtn.css('opacity', '0.7').find('span').text('Sending Message...');
        
        setTimeout(function(){
            // Reset button state and clear values
            submitBtn.css('opacity', '1').find('span').text('Send Message');
            $('#shHospitalContactForm')[0].reset();
            
            // Slide down response banner smoothly
            successAlert.slideDown(300).delay(4000).slideUp(300);
        }, 1200);
    });
}
