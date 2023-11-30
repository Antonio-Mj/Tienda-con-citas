document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      selectable: true,
      buttonText: {
        today: 'Hoy',
        month: 'Mes',
        week: 'Semana',
        day: 'Día',
        list: 'Lista'
      },
        select: function(info){
        var fechaSeleccionada = info.startStr;
        document.getElementById('inputfecha')
        },
      events: function(fetchInfo, successCallback, failureCallback) {
        var fechasDestacadas = [
          '2023-11-15',
          '2023-11-20',
          '2023-11-25',
        ];
        var eventos = fechasDestacadas.map(function(fecha) {
          return {
            title: 'OCUPADO',
            start: fecha,
            backgroundColor: 'red',
            borderColor: 'red'
          };
        });
        successCallback(eventos);
      }
    });
    calendar.render();
  });