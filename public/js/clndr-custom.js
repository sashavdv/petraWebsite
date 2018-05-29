var calendars = {};
var eventArray = [];

$(document).ready(function () {
    console.log('Page loaded');

    calendars.clndr = $('.calendar').clndr({
        events: eventArray,
        clickEvents: {
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