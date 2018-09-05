var calendars = {};
var eventArray = [];

$(document).ready(function () {
    console.log('Page loaded');
    GetEventsCall().done(loadCalender);

function loadCalender(){
    console.log('loadcalender()');
    console.log(eventArray);
    calendars.clndr = $('.cal1').clndr({
        events:eventArray,
        clickEvents: {
            click: function(target){
                console.log(target.events);
                if(target.events.length > 0 ){
                    $("#exampleModal").modal("show");

                document.getElementById("title").innerHTML = target.events[0].title;
                document.getElementById("description").innerHTML = target.events[0].description_nl;
                document.getElementById("price").innerHTML = target.events[0].price;
               }

            },

            nextMonth: function () {
                console.log('Next Month');
            },
            previousMonth: function () {
                console.log('Previous Month');
            }
        },
        showAdjacentMonths: true,
        adjacentDaysChangeMonth: false
    });

}
function addEvents(events) {
    eventArray = events;
    console.log(eventArray);
}
function GetEventsCall(){
    return $.ajax({
        url: 'json_events',
        datatype: 'jsonp',
        success: function (data) {
            eventArray = data['data'];
            //addEvents(data['data']);
        }
    });
}
});

