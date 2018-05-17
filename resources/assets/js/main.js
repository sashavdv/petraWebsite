    var url = window.location.href;
    var navList = document.getElementById('side-bar');
    var links = navList.querySelectorAll("a");
    for (var i = 0; i < links.length; i++) {
        if (url.startsWith(links[i].href))
            links[i].className += ("active");
    }