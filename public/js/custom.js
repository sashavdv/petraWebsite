window.onscroll = function() {
    nav();
}
function registerForEvent(){
    var eventTitle = $('#title').text();
    console.log("contact/" + encodeURI(eventTitle));
    window.location = "contact/" + encodeURI(eventTitle);
}

nav = function(){

};

function readMore(){
    $(".hide.about").toggle(500);
    $(".ui.button").text("Lees minder");
}
