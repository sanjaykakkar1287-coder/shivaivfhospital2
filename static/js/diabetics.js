function initDiabetesLoop() {
    let timelineRows = $('.db-track-list .db-track-row');
    let currentIndex = 0;
    let autoRotateTrack;

    function selectTrackItem(index){
        let rowItem = timelineRows.eq(index);
        timelineRows.removeClass('active');
        rowItem.addClass('active');

        $('.db-monitor-details').fadeOut(150, function() {
            $('#dbConditionTitle').text(rowItem.data('title'));
            $('#dbConditionDesc').text(rowItem.data('desc'));
    
            let checkPoints = rowItem.data('points').split('|');
            let builtListHtml = '';
            checkPoints.forEach(function(itemText){
                builtListHtml += '<li><i class="fa-solid fa-check"></i> ' + itemText + '</li>';
            });
            $('#dbConditionList').html(builtListHtml);
            $(this).fadeIn(150);
        });
    }

    function initiateAutoRotation(){
        clearInterval(autoRotateTrack);
        autoRotateTrack = setInterval(function(){
            currentIndex = (currentIndex + 1) % timelineRows.length;
            selectTrackItem(currentIndex);
        }, 3500);
    }

    selectTrackItem(0);
    initiateAutoRotation();

    timelineRows.hover(function(){
        clearInterval(autoRotateTrack);
        let selectedIndex = $(this).index();
        if (currentIndex !== selectedIndex) { 
            currentIndex = selectedIndex; 
            selectTrackItem(currentIndex); 
        }
    }, function(){ 
        initiateAutoRotation(); 
    });
}