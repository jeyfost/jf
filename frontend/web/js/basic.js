$(document).ready(function () {
    $('#w1 li').mouseover(function() {
       this.css('color', '#0c9a8c');
    })

    $('#w1 li').mouseout(function() {
        $(this).css('color', '#404040');
    })
})