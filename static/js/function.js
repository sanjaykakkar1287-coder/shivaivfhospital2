function pageRender(btnClass, pageUrl, callback = null, renderClass = ".pagerender" ) {

    $(document).on("click", btnClass, function(e) {

        e.preventDefault();

        let url = $(this).data("url") || pageUrl;

        $(renderClass).html("<div class='text-center'>Loading...</div>");

        $.ajax({
            url: url,
            type: "GET",
            cache: false,
            success: function(response) {

                $(renderClass).html(response);

                // A more reliable way to scroll to the top that works across browsers.
                // It targets the document's scrolling element.
                $(document.documentElement, document.body).animate({ scrollTop: 0 }, 500);

                if ($.isFunction(callback)) {
                    callback();
                }

            },
            error: function(xhr, status, error) {

                $(renderClass).html(
                    "<div class='alert alert-danger'>Page not found!</div>"
                );

                console.error(error);

            }

        });

    });

}