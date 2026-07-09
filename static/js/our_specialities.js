
    function initSpecialities() {
    /* ==========================================================================
       PART 1: SECTION 1 (GYNECOLOGY) MATRIX ENGINE
       ========================================================================== */
    let matrixRows = $('.sh-matrix-row');
    let matrixIndex = 0;
    let matrixTimer;

    function runMatrixSync(idx) {
        matrixRows.removeClass('active');
        matrixRows.eq(idx).addClass('active');
        $('.sh-matrix-live-details').fadeOut(150, function() {
            let row = matrixRows.eq(idx);
            $('#gyneTitle').text(row.data('title'));
            $('#gyneDesc').text(row.data('desc'));
            let pts = row.data('points').split('|');
            let listHtml = '';
            pts.forEach(p => { listHtml += `<li>${p}</li>`; });
            $('#gynePoints').html(listHtml);
            $(this).fadeIn(150);
        });
    }

    function initMatrixLoop() {
        clearInterval(matrixTimer);
        matrixTimer = setInterval(() => {
            matrixIndex = (matrixIndex + 1) % matrixRows.length;
            runMatrixSync(matrixIndex);
        }, 3500);
    }

    matrixRows.hover(
        function() { 
            clearInterval(matrixTimer); 
            matrixIndex = $(this).index(); 
            runMatrixSync(matrixIndex); 
        }, 
        function() { 
            initMatrixLoop(); 
        }
    );
    
    // Fire up the Gynecology loop
    initMatrixLoop();


    /* ==========================================================================
       PART 2: SECTION 3 (ORTHOPEDICS) AUTO-RUN CANVAS ENGINE
       ========================================================================== */
    let orthoBtns = $('.sh-ortho-tab-btn');
    let orthoIndex = 0;
    let orthoTimer;
    const store = $('#orthoWarehouse');
    const totalOrthoTabs = orthoBtns.length;

    function runOrthoSync(idx) {
        orthoBtns.removeClass('active');
        orthoBtns.eq(idx).addClass('active');
        
        $('#orthoCanvas').fadeOut(180, function() {
            $('#canvasIndex').text(`0${idx + 1} / 0${totalOrthoTabs}`);
            $('#canvasTitle').text(store.data(`title-${idx}`));
            $('#canvasDesc').text(store.data(`desc-${idx}`));
            
            let pts = store.data(`points-${idx}`).split('|');
            let listHtml = '';
            pts.forEach(p => { listHtml += `<li>${p}</li>`; });
            $('#canvasList').html(listHtml);
            $(this).fadeIn(180);
        });
    }

    function initOrthoLoop() {
        clearInterval(orthoTimer);
        orthoTimer = setInterval(() => {
            orthoIndex = (orthoIndex + 1) % totalOrthoTabs;
            runOrthoSync(orthoIndex);
        }, 4000); // Cycles every 4 seconds
    }

    // Manual click handling
    orthoBtns.on('click', function() {
        clearInterval(orthoTimer);
        orthoIndex = $(this).data('id');
        runOrthoSync(orthoIndex);
        initOrthoLoop(); // Restart countdown on click intervention
    });

    // Pause on hovering the workspace canvas so users can read comfortably
    $('#orthoCanvas, .sh-ortho-tabs-bar').hover(
        function() { 
            clearInterval(orthoTimer); 
        }, 
        function() { 
            initOrthoLoop(); 
        }
    );

    // Fire up the Orthopedics loop
    initOrthoLoop();
    }