window.onscroll = function() {
    nav();
}

function registerForEvent(){
    var eventTitle = $('#title').text();
    $.get("petra.test/contact", eventTitle);
}
nav = function(){

};

function readMore(){
    var isVisible = $( ".hide.about" ).is( ":visible" );
    $(".hide.about").toggle(500);
    if(isVisible) {
        $(".ui.button").text("Lees meer");
    } else {
        $(".ui.button").text("Lees minder");
    }
}
