$(document).ready(function() {
        
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2016-12-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
                title: 'All Day Event',
                start: '2016-12-01'
            },
            {
                title: 'Long Event',
                start: '2016-12-07',
                end: '2016-12-10'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2016-12-09T16:00:00'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2016-12-16T16:00:00'
            },
            {
                title: 'Conference',
                start: '2016-12-11',
                end: '2016-12-13'
            },
            {
                title: 'Meeting',
                start: '2016-12-12T10:30:00',
                end: '2016-12-12T12:30:00'
            },
            {
                title: 'Lunch',
                start: '2016-12-12T12:00:00'
            },
            {
                title: 'Meeting',
                start: '2016-12-12T14:30:00'
            },
            {
                title: 'Happy Hour',
                start: '2016-12-12T17:30:00'
            },
            {
                title: 'Dinner',
                start: '2016-12-12T20:00:00'
            },
            {
                title: 'Birthday Party',
                start: '2016-12-13T07:00:00'
            },
            {
                title: 'Click for Google',
                url: 'https://google.com/',
                start: '2016-12-28'
            }
        ]
    });
    
});


document.addEventListener('DOMContentLoaded', function() {
	  var initialTimeZone = 'UTC';
	  var timeZoneSelectorEl = document.getElementById('time-zone-selector');
	  var loadingEl = document.getElementById('loading');
	  var calendarEl = document.getElementById('calendar');

	  var calendar = new FullCalendar.Calendar(calendarEl, {
	    plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
	    timeZone: initialTimeZone,
	    header: {
	      left: 'prev,next today',
	      center: 'title',
	      right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
	    },
	    navLinks: true, // can click day/week names to navigate views
	    editable: true,
	    selectable: true,
	    eventLimit: true, // allow "more" link when too many events
	    events: 'https://fullcalendar.io/demo-events.json',

	    loading: function(bool) {
	      if (bool) {
	        loadingEl.style.display = 'inline'; // show
	      } else {
	        loadingEl.style.display = 'none'; // hide
	      }
	    },

	    eventTimeFormat: { hour: 'numeric', minute: '2-digit', timeZoneName: 'short' }
	  });

	  calendar.render();

	  // load the list of available timezones, build the <select> options
	  // it's highly encouraged to use your own AJAX lib instead of using FullCalendar's internal util
	  FullCalendar.requestJson('GET', 'https://fullcalendar.io/demo-timezones.json', {}, function(timeZones) {
	    timeZones.forEach(function(timeZone) {
	      var optionEl;

	      if (timeZone !== 'UTC') { // UTC is already in the list
	        optionEl = document.createElement('option');
	        optionEl.value = timeZone;
	        optionEl.innerText = timeZone;
	        timeZoneSelectorEl.appendChild(optionEl);
	      }
	    });
	  }, function() {
	    // failure
	  });

	  // when the timezone selector changes, dynamically change the calendar option
	  timeZoneSelectorEl.addEventListener('change', function() {
	    calendar.setOption('timeZone', this.value);
	  });

	});