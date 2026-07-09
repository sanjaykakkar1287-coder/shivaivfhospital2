$(document).on("dblclick", ".message-cell", function () {

    var fullMessage = $(this).text().trim();

    Swal.fire({
        title: "Full Message",
        html: '<div style="text-align:left;white-space:pre-wrap;max-height:400px;overflow-y:auto;">' 
                + fullMessage + 
              '</div>',
        icon: "info",
        width: "700px",
        confirmButtonText: "Close"
    });

});