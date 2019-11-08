$(document).ready(function() {
    $('.circle-for-click-open').click(function(e) {
        e.preventDefault();

        $('.second-one').hide();
        $('.first-one').show();
        $(this).parents('.first-one').hide();
        $(this).parents('.first-one').next('.second-one').show();
    });

    $('.circle-for-click-close').click(function(e) {
        e.preventDefault();
        $('.first-one').show();
        $('.second-one').hide();
    });

    $('.circle-for-click-close').click(function() {
        $(this).toggleClass('shown');
    });
});