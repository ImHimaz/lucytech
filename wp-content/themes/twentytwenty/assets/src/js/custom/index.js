jQuery(window).on("scroll", function () {
    if (jQuery(window).scrollTop() > 50) {
        jQuery("header.main-header").addClass("page-scroll");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        jQuery("header.page-scroll").removeClass("page-scroll");
    }
});

jQuery(function ($) {
    var links = $('.wp-social-link a');
    var len = links.length;

    for (var i = 0; i < len; i++) {
        links[i].target = "_blank";
    }
});

jQuery(function ($) {
    $('.our-team .wp-social-link-chain').click(function (event) {
        event.preventDefault();
        if ($(this).parent().parent().hasClass('active_popup')) {
            $(this).parent().parent().removeClass('active_popup');
        } else {
            $('.our-team .wp-social-link-chain').parent().parent().removeClass('active_popup');
            $(this).parent().parent().addClass('active_popup');
        }
    });
});

jQuery(document).on('click', 'a[href^="#"]', event => {
    event.preventDefault();
    jQuery('html, body').animate({
        scrollTop: jQuery(jQuery.attr(event.currentTarget, 'href')).offset().top - 125
    }, 100);
});
