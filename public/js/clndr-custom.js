var calendars = {};

function loadCalender(events, lang) {
    if (lang != 'nl') {
        lang = 'en';
    }

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
                updateCalenderContentHeight();
            },

            click: function(target) {
                /* Check if there is an event on the clicked date */
                if (target.events.length > 0) {
                    /* Get Clicked Date and set The Display Months */
                    var clickedDate = new Date(target.events[0].date);
                    var months = {
                        en: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        nl: ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"],
                    };

                    /* Remove all elements and add the Date bar */
                    $('#clndr-day-details').children().remove();
                    /* Display The Date */
                    $('#clndr-day-details').append($('<span id="day">').text(clickedDate.getDate() + ' ' + months[lang][clickedDate.getMonth()] + ' ' + clickedDate.getFullYear()));

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
                            buttonText = 'More information';
                        }

                        /* Set a class based on the type of event */
                        var classString = '';

                        if (target.events[i].type) {
                            classString = ' event-type ' + target.events[i].type;
                        }

                        var btn = $('<button class="ui bottom attached button event-button-' + target.events[i].type + '" name="event-button" value="' + target.events[i].id + '">');
                        btn.text(buttonText);

                        /* Create The Event Content */

                        $('#clndr-day-details').append(
                              $('<div class="ui card event-card" style="max-width: 100%; min-width: 100%;">').append(
                                  $('<div class="content">').append(
                                      $('<div class="header">').append(
                                          $('<span>').text(target.events[i].title)
                                      ).append(
                                          $('<span>').text('€' + target.events[i].price)
                                      )
                                  ).append(
                                      $('<div class="meta">').append(
                                          $('<span>').text(target.events[i].date + ' ' + target.events[i].event_time)
                                      ).append(
                                          $('<span>').text(target.events[i].type)
                                      )
                                  ).append(
                                      $('<div class="description">').append(
                                          $('<p>').text(description)
                                      )
                                  )
                              ).append(btn)
                        );
                    }
                    addButtonEvents();
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