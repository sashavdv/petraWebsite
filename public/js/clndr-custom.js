var calendars = {};
var eventArray = [];

$(document).ready(function () {
    console.log('Page loaded');

    calendars.clndr = $('.cal1').clndr({
        events: eventArray,
        clickEvents: {
            click: function(target){
                console.log(target.date._i);
                alert('er is geklikt op de datum ' + target.date._i );
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
});

function addEvents(events) {
    eventArray = events;
}