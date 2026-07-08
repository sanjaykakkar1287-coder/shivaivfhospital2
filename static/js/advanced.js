function initDiagnosticsPage() {

    $(".diag-hero-content").hide().fadeIn(1000);

    $(".diag-card").css({
        position: "relative",
        top: "80px",
        opacity: 0
    });

    $(".tech-content").css({
        opacity: 0,
        transform: "translateX(-80px)"
    });

    $(".tech-image").css({
        opacity: 0,
        transform: "translateX(80px)"
    });

    $(window).off("scroll.diag").on("scroll.diag", function () {

        $(".diag-card").each(function (index) {

            if (!$(this).hasClass("animated") &&
                $(window).scrollTop() + $(window).height() - 100 > $(this).offset().top) {

                $(this)
                    .addClass("animated")
                    .delay(index * 150)
                    .animate({
                        top: "0px",
                        opacity: 1
                    }, 600);

            }

        });

        $(".tech-content, .tech-image").each(function () {

            if (!$(this).hasClass("animated") &&
                $(window).scrollTop() + $(window).height() - 100 > $(this).offset().top) {

                $(this)
                    .addClass("animated")
                    .css({
                        opacity: 1,
                        transform: "translateX(0)",
                        transition: "all .8s ease"
                    });

            }

        });

    });

    // Important: trigger once after AJAX content is inserted
    $(window).trigger("scroll");

}