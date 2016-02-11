$(window).load(function () {
    mainTextPos();
    newsWidth();
});

$(window).resize(function () {
    mainTextPos();
    newsWidth();
});

function mainTextPos() {
    $('.main-text').offset({top: $('.main-block img').offset().top});

    var tOffset = parseInt($('.main-block img').height() / 2 - $('.main-text').height() / 2 + $('.main-block').offset().top);

    $('.main-text').offset({top: tOffset});
}

function newsWidth() {
    $('.news-block-right').width(parseInt($('.news-block').width() - $('.news-block-left').width() - 1 - 5));
}