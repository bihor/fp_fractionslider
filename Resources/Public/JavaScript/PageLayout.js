define(['jquery'], function ($) {

    $('.slider-table tfoot a').click(function (e, element) {
        $(this).toggleClass('open');
        $('#' + $(this).data('identifier')).toggleClass('hidden');
        e.preventDefault();
    });

});