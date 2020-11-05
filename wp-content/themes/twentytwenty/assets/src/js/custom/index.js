jQuery(window).on("scroll", function () {
    if (jQuery(window).scrollTop() > 50) {
        jQuery("header.main-header").addClass("page-scroll");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        jQuery("header.main-header").removeClass("page-scroll");
    }
});