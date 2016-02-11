function selectNews(id) {
    if(!document.getElementById(id).getAttribute('name')) {
        var divs = document.getElementsByClassName('news-entry');

        for(var i = 0; i < divs.length; i++) {
            if(divs[i].getAttribute('name')) {
                divs[i].removeAttribute('name');
                divs[i].style.width = '99%';
                divs[i].style.backgroundColor = '#d0d0b5';

                var attr = divs[i].getAttribute('id');
                var news_id = attr.substr(4);
                var img = 'img' + news_id;
                var text = 'text' + news_id;

                var img1 = new Image();
                var img2 = new Image();

                img1.src = 'img/pencil_black.png';
                img2.src = '../img/pencil_black.png';

                img1.onload = function(){document.getElementById(img).src = img1.src;}
                img2.onload = function(){document.getElementById(img).src = img2.src;}

                document.getElementById(text).style.color = '#404040';
            }
        }

        document.getElementById(id).setAttribute('name', 'active');
        document.getElementById(id).style.width = '95%';
        document.getElementById(id).style.backgroundColor = '#0c9a8c';
        document.getElementById(text).style.color = '#fff';

        img1 = new Image();
        img2 = new Image();

        img1.src = 'img/pencil_white.png';
        img2.src = '../img/pencil_white.png';

        img1.onload = function(){document.getElementById(img).src = img1.src;}
        img2.onload = function(){document.getElementById(img).src = img2.src;}
    }
}