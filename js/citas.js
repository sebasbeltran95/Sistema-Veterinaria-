$(document).ready(function() {
    // página cargada, inicializamos el calendario...
    $('#calendar').fullCalendar({
        height : 450,
        width  : 250,
        lang: 'es',
        events : [
        {
            title  : 'Nico',
            start  : '2016-02-01'
        },
        {
            title  : 'Orion',
            start  : '2016-02-20',
            end    : '2016-02-21'
        },
        {
            title  : 'Nico',
            start  : '2016-02-20',
            end    : '2016-02-21',
            allDay : false // will make the time show
        },
        {
            title  : 'Tomas',
            start  : '2016-02-20',
            end    : '2016-02-21',
            allDay : false // will make the time show
        },
        {
            title  : 'Nico',
            start  : '2016-02-20',
            end    : '2016-02-21',
            allDay : false // will make the time show
        },
        {
            title  : 'Nico',
            start  : '2016-02-22',
            end    : '2016-02-23',
            allDay : false // will make the time show
        },
        {
            title  : 'Nico',
            start  : '2016-02-28',
            end    : '2016-02-29',
            allDay : false // will make the time show
        },
        {
            title  : 'Nico',
            start  : '2016-02-15',
            end    : '2016-02-16',
            allDay : false // will make the time show
        }
    ]
    })
});
