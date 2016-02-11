function changeNewsEntry(action, id, img, text) {
    if(!document.getElementById(id).getAttribute('name')) {
        if(action == '1') {
            document.getElementById(id).style.width = '95%';
            document.getElementById(id).style.backgroundColor = '#0c9a8c';
            document.getElementById(text).style.color = '#fff';

            var img1 = new Image();
            var img2 = new Image();

            img1.src = 'img/pencil_white.png';
            img2.src = '../img/pencil_white.png';

            img1.onload = function(){document.getElementById(img).src = img1.src;}
            img2.onload = function(){document.getElementById(img).src = img2.src;}
        }

        if(action == 0) {
            document.getElementById(id).style.width = '99%';
            document.getElementById(id).style.backgroundColor = '#d0d0b5';
            document.getElementById(text).style.color = '#404040';

            var img1 = new Image();
            var img2 = new Image();

            img1.src = 'img/pencil_black.png';
            img2.src = '../img/pencil_black.png';

            img1.onload = function(){document.getElementById(img).src = img1.src;}
            img2.onload = function(){document.getElementById(img).src = img2.src;}
        }
    }
}