<div class="calendar"></div>

<script src="{{ asset('js/clndr.js') }}"></script>

<script type="text/javascript">
    var calendars = {};

    $(document).ready(function () {
        console.log('Page loaded');

        var eventArray = [];

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
</script>