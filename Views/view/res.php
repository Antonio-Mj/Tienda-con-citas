<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.10/index.global.min.js"></script>
<div class="container-title" style="margin-top:5%;margin-left:10%;"><h1>Bienvenido</h1></div>
<div class="container-title" style="margin-top:1%;margin-left:10%;"><h5>Favor de llenar todos los campos</h5></div>
<div class="container-res" style="display:flex;margin-top:1%;">
   
    <div id='calendar'></div>
    <div class="res-form">
    <form>
          <div class="mb-3">
            <input type="hidden" id="inputfecha">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Edad</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
            <div class="fecha" style="margin-top: 1%;">
            <label for="fecha" class="form-label">Fecha:</label>
            <div class="alert alert-danger" role="alert" id="alert-fecha">Elije una fecha para continuar!</div>
            <label for="exampleInputPassword1" class="form-label" id="fecha"></label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Enviar datos</button>
    </form>
    </div>
</div>
<script>
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
          alert("Elija otra fecha, esa esta ocupada")
          // Aquí puedes mostrar un mensaje o realizar alguna acción si la fecha está ocupada
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

  </script>