jQuery(window).on("scroll", function () {
    if (jQuery(window).scrollTop() > 50) {
        jQuery("header.main-header").addClass("page-scroll");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        jQuery("header.page-scroll").removeClass("page-scroll");
    }
});

// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();
//
//         document.querySelector(this.getAttribute('href')).scrollIntoView({
//             block: 'center',
//             behavior: 'smooth',
//         });
//     });
// });

jQuery(function ($) {
    var links = $('.wp-social-link a');
    var len = links.length;

    for (var i = 0; i < len; i++) {
        links[i].target = "_blank";
    }
});

