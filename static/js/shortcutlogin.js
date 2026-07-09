$(document).on("keydown", function (e) {
    if (e.ctrlKey && (e.key === "y" || e.key === "Y")) {
        e.preventDefault();
        window.open("./adminpages/login.php", "_blank");
    }
});