var calendars = {};
var eventArray = [];

function loadCalender(){
    console.log('loadcalender()');
    console.log(eventArray);
    calendars.clndr = $('.cal1').clndr({
        events:eventArray,
        clickEvents: {
            click: function(target) {
                // console.log(target.events);
                if (target.events.length > 0) {
                    $('.details').children().remove();
                    $('.details').append('<span id="day">' + target.events[0].date + '</span>');
                    // console.log(target.events);
                    var clickedDate = new Date(target.events[0].date);
                    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

                    $('#day').text(clickedDate.getDate() + ' ' + months[clickedDate.getMonth()] + ' ' + clickedDate.getFullYear());
                    for (var i = 0; i < target.events.length; i++) {
                        //alert(target.events[i].hasOwnProperty('event_time'));
                        //make a div with class selected event, add span id=event-time span id=event-title, p id= event-description button with moreinfo

                        var classString = '';

                        if (target.events[i].type) {
                            classString = ' event-type ' + target.events[i].type;
                        }

                        $('.details').append('<div class="selected-event' + classString + '" id="' + target.events[i].id + '">' +
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