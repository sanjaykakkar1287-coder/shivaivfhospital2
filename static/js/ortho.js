function initOrthoTabs() {
    let totalTabs = 5;
    let activeIndex = 0;
    let autoInterval;
    const warehouse = $('#orthoDataWarehouse');

    function syncDisplay(index) {
        $('.ortho-tab-btn').removeClass('active');
        $(`.ortho-tab-btn[data-index="${index}"]`).addClass('active');

        $('#orthoDisplayCard').fadeOut(180, function() {
            $('#orthoCounter').text(`0${index + 1} / 0${totalTabs}`);
            $('#orthoTitle').text(warehouse.data(`title-${index}`));
            $('#orthoDesc').text(warehouse.data(`` + `desc-${index}`));
            
            let points = warehouse.data(`points-${index}`).split('|');
            let pointsHtml = '';
            points.forEach(item => {
                pointsHtml += `<li><i class="fa-solid fa-check"></i> ${item}</li>`;
            });
            $('#orthoPointsList').html(pointsHtml);
            
            $(this).fadeIn(180);
        });
    }

    function runRotation() {
        clearInterval(autoInterval);
        autoInterval = setInterval(() => {
            activeIndex = (activeIndex + 1) % totalTabs;
            syncDisplay(activeIndex);
        }, 4000);
    }

    $('.ortho-tab-btn').on('click', function() {
        clearInterval(autoInterval);
        activeIndex = $(this).data('index');
        syncDisplay(activeIndex);
        runRotation();
    });

    runRotation();
}
