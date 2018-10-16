var calendars = {};

function loadCalender(events, lang) {
    console.log(lang);

    /* Load The Calendar */
    calendars.clndr = $('.cal1').clndr({
        /* Define the events */
        events: events,

        /* Add Click Events */
        clickEvents: {
            onMonthChange: function () {
                /* Set Back and Next Buttun Text */
                $('.clndr-previous-button').html("<");
                $('.clndr-next-button').html(">");
            },

            click: function(target) {
                /* Check if there is an event on the clicked date */
                if (target.events.length > 0) {
                    /* Get Clicked Date and set The Display Months */
                    var clickedDate = new Date(target.events[0].date);
                    var months = {
                        fr: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juilet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
                        nl: ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"],
                    };

                    /* Remove all elements and add the Date bar */
                    $('.details').children().remove();
                    /* Display The Date */
                    $('.details').append($('<span id="day">').text(clickedDate.getDate() + ' ' + months[lang][clickedDate.getMonth()] + ' ' + clickedDate.getFullYear()));

                    for (var i = 0; i < target.events.length; i++) {
                        /* Set the description based on the current language */
                        var description = '';

                        if (lang == 'nl') {
                            description = target.events[i].description_nl;
                        } else {
                            description = target.events[i].description_en;
                        }

                        /* Set the button text based on the current language */
                        var buttonText = '';

                        if (lang == 'nl') {
                            buttonText = 'Meer Informatie';
                        } else {
                            buttonText = 'Plus d\'information';
                        }

                        /* Set a class based on the type of event */
                        var classString = '';

                        if (target.events[i].type) {
                            classString = ' event-type ' + target.events[i].type;
                        }

                        /* Creste The Event Content */
                        $('.details').append(
                            $('<div class="selected-event' + classString + '">').append(
                                $('<span class="event-time">').text(target.events[i].event_time)).append(
                                $('<span class="event-title">').text(target.events[i].title)).append(
                                $('<p class="event-description">').text(description)).append(
                                $('<button type="submit">').text(buttonText))
                        );
                    }
                }
            },
        },

        /* Extra Calendar Options */
        showAdjacentMonths: true,
        adjacentDaysChangeMonth: false
    });

    /* Set Back and Next Buttun Text */
    $('.clndr-previous-button').html("<");
    $('.clndr-next-button').html(">");
}