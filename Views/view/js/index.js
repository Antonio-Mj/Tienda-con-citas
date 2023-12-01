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
      var eventos = calendar.getEvents(); // Obtener todos los eventos del calendario
      var fechaOcupada = eventos.some(function(evento) {
        return evento.startStr === fechaSeleccionada && evento.title === 'OCUPADO';
      });

      if (!fechaOcupada) {
        document.getElementById('fecha').textContent = fechaSeleccionada
        document.getElementById('inputfecha').value = fechaSeleccionada;
        document.getElementById('alert-fecha').style.display = 'none'
      } else {
        console.log("La fecha está ocupada");
        document.getElementById('fecha').textContent = ''
        document.getElementById('inputfecha').value = ''
        document.getElementById('alert-fecha').style.display = 'block'
        document.getElementById('alert-fecha').textContent = "Elija otra fecha, esa esta ocupada"
      }
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