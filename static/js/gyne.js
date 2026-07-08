$(document).ready(function(){

    let cards = $('.timeline-item');
    let current = 0;
    let autoSlide;

    function updatePanel(index){

        let card = cards.eq(index);

        cards.removeClass('active');
        card.addClass('active');

        // Add smooth cross-fade animation to the content change
        $('.info-box').fadeOut(150, function() {
            $('#conditionTitle').text(card.data('title'));
            $('#conditionDesc').text(card.data('desc'));
    
            let points = card.data('points').split('|');
            let html = '';
    
            points.forEach(function(item){
                html += '<li><i class="fa-solid fa-check"></i> ' + item + '</li>';
            });
    
            $('#conditionList').html(html);
            $(this).fadeIn(150);
        });
    }

    function startSlider(){
        clearInterval(autoSlide);
        autoSlide = setInterval(function(){

            current++;

            if(current >= cards.length){
                current = 0;
            }

            updatePanel(current);

        },3000);

    }

    updatePanel(0);
    startSlider();

    cards.hover(function(){

        clearInterval(autoSlide);
        
        let hoverIndex = $(this).index();
        if (current !== hoverIndex) {
            current = hoverIndex;
            updatePanel(current);
        }
    },function(){

        startSlider();

    });

});
