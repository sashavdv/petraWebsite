var calendars = {};
var eventArray = [];

function loadCalender(){
    console.log('loadcalender()');
    console.log(eventArray);
    calendars.clndr = $('.cal1').clndr({
        events:eventArray,
        clickEvents: {
            click: function(target) {
                console.log(target.events);
                if (target.events.length > 0) {
                    for (var i = 0; i < target.events.length; i++) {
                        //alert(target.events[i].hasOwnProperty('event_time'));
                        //make a div with class selected event, add span id=event-time span id=event-title, p id= event-description button with moreinfo
                        $('.details').append('<div class="selected-event" id="' + target.events[i].id + '">' +
                            '<span class="event-time">' + target.events[i].event_time + '</span>\n' +
                            '<span class="event-title">' + target.events[i].title + '</span>\n' +
                            '<p class="event-description">' + target.events[i].description_nl + '</p>\n' +
                            '<button type="submit" value="' + target.events[i].id + '" name="event-button" ">Meer informatie</button>' +
                            '</div>');
                        //alert(target.events[i].title);
                    }
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

    loadCalender();
}