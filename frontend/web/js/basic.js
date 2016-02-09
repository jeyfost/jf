$(window).load(function () {
    mainTextPos();
});

$(window).resize(function () {
    mainTextPos();
});

function mainTextPos() {
    $('.main-text').offset({top: $('.main-block img').offset().top});

    var tOffset = parseInt($('.main-block img').height() / 2 - $('.main-text').height() / 2 + $('.main-block').offset().top);

    $('.main-text').offset({top: tOffset});
}