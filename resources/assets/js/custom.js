window.onscroll = function() {
    nav();
}

function registerForEvent(){
    var eventTitle = $('#title').text();
$.get("petra.test/contact", eventTitle);
}
nav = function(){

};