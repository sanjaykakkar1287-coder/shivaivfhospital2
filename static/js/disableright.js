$(document).ready(function() {
    // Disable right-click context menu across the entire site
    $(document).on("contextmenu", function(e) {
        e.preventDefault();
    });
});