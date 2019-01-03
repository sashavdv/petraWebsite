window.onscroll = function() {
    nav();
}

function registerForEvent(){
    var eventTitle = $('#title').text();
    $.get("petra.test/contact", eventTitle);
}
nav = function(){

};

function readMore(lang){
    var isVisible = $( ".hide.about" ).is( ":visible" );
    $(".hide.about").toggle(500);
    if(isVisible) {
        if(lang == 'nl') {
            $(".ui.button").text("Lees meer");
        } else {
            $(".ui.button").text("Read more");
        }
    } else {
        if(lang == 'nl') {
            $(".ui.button").text("Lees minder");
        } else {
            $(".ui.button").text("Read less");
        }
    }
}
