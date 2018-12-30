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
    $(".hide.about").toggle(500);
    var isVisible = $( ".hide.about" ).is( ":visible" );
    console.log(isVisible);
    if(isVisible) {
        $(".ui.button").text("Lees minder");
    } else {
        $(".ui.button").text("Lees meer");
    }
}
