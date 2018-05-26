<?php
$aAgendaData = App\Agenda::orderBy('date')->get();
?>
<table id="calendar">
    <thead>
    <tr>
        <th colspan="3" id="month"></th>
    </tr>
    <tr>
        <th><button id="previous">&lt;</button></th>
        <th id="week"></th>
        <th><button id="next" >&gt;</button></th>
    </tr>
    </thead>
    <tbody id="days">
    </tbody>
</table>
<style>
    #calendar{
        display: block;
        width: 330px;
        margin:  50px auto;
    }
    #calendar *{
        font-family: Segoe UI,Frutiger,Frutiger Linotype,Dejavu Sans,Helvetica Neue,Arial,sans-serif;
        font-weight: normal;
    }
    #calendar thead th{
        text-align: center;
    }
    #calendar tr{
        height: 50px;
        background-color: white;
    }
    #calendar thead tr:first-child{
        font-size: 22px;
    }
    #calendar thead tr:last-child{
        height: 40px;
        font-size: 18px;
    }
    #calendar td, #calendar th{
        width: 110px;
    }
    #calendar button{
        display: block;
        width: 110px;
        background-color: white;
        border: none;
    }
    #calendar thead{
        border-bottom: 1px solid black;
    }
    #calendar tr td:first-child{
        text-indent: 20px;
    }
    #calendar tr.current-date{
        background-color: lightblue;
    }
    #calendar tr.event{
        background-color: darkseagreen;
    }
</style>
<script type="text/javascript">
    var months = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'October', 'November', 'December'];
    var days = ['Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za', 'Zo'];
    var agendaDays = <?php echo $aAgendaData; ?>;

    var currentDate = new Date();

    var year = currentDate.getFullYear();
    var month = currentDate.getMonth();
    var day = currentDate.getDate();

    var monday = getMondayOfCurrentWeek(currentDate);
    var sunday = getSundayOfCurrentWeek(currentDate);


    function daysInMonth (month, year) {
        return new Date(year, month, 0).getDate();
    }

    function nextWeek(d, m, y) {
        var nextWeekDay = (d + 7) % daysInMonth(m, y);
        var nextWeekMonth;
        var nextWeekYear;
        if (nextWeekDay < d){
            nextWeekMonth = (m + 1) % 11;
        } else nextWeekMonth = m;
        if (nextWeekMonth < m){
            nextWeekYear = y + 1;
        } else nextWeekYear = y;
        return new Date(nextWeekYear, nextWeekMonth, nextWeekDay);
    }

    var table = document.getElementById('days');
    for (var queryDay in days.reverse()){
        var row = table.insertRow(0);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = days[queryDay] + ' ' + (monday.getDate() + (6 - queryDay));
        if ((monday.getDate() + (6 - queryDay)) == currentDate.getDate()){
            row.classList.add('current-date');
        }
    }

    document.getElementById('month').innerHTML = months[currentDate.getMonth()];
    document.getElementById('week').innerText = monday.getDate() + " tot " + sunday.getDate();

    console.log("This Monday: " + monday);
    console.log("Today: " + currentDate);
    console.log("This Sunday: " + sunday);
    console.log(agendaDays);

    document.getElementById('next').addEventListener('click', function () {
        monday = getMondayOfCurrentWeek(nextWeek(day, month, year));
        sunday = getSundayOfCurrentWeek(nextWeek(day, month, year));
        console.log(monday);
        console.log(sunday);
        day = monday.getDate();
        month = monday.getMonth();
        year = monday.getFullYear();
    })

    function getMondayOfCurrentWeek(d)
    {
        var day = d.getDay();
        return new Date(d.getFullYear(), d.getMonth(), d.getDate() + (day == 0?-6:1)-day );
    }

    function getSundayOfCurrentWeek(d)
    {
        var day = d.getDay();
        return new Date(d.getFullYear(), d.getMonth(), d.getDate() + (day == 0?0:7)-day );
    }
</script>