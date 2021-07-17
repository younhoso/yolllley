$(function () {
    var currentMenu;
    var addactive = function(ele1) {
        ele1.addClass('is-active');
        currentMenu = ele1
    };

    var unactive = function(ele) {
        ele.removeClass('is-active');
    };

    var hander = function(e) {
        if (currentMenu) {
            unactive(currentMenu);
        }
        if ($(e.target).hasClass('m\:txt-md')) {
            addactive($(e.target).closest('.js-hander').find('.mobile-nav'));
        }
    };

	$('.js-hander').on('click', '.btn', hander);
	$('.items .item').on('click',function(){
        $(this).toggleClass('is-active');
        $(this).siblings().removeClass('is-active');
    });
});