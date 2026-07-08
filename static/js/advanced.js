 
        $(document).ready(function() {

            // Card flip logic
            let flipped = false;
            setInterval(function() {
                if (!flipped) {
                    $('.diag-card').addClass('flip');
                    flipped = true;
                } else {
                    $('.diag-card').removeClass('flip');
                    flipped = false;
                }
            }, 3000);
        });