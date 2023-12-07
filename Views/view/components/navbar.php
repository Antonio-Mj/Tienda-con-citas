<head>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.10/index.global.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary" id="container-icon-navbar">
  <div class="container-fluid" id="navbarNavar">
  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><h1>NS</h1></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" id="itemsNav">
        <li class="nav-item">
          <a class="btn btn-dark" style="color:white;" aria-current="page" href="index.php"><h5>INICIO</h5></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="modal fade col-md-12" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inicie sesion por favor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="Model/login.php">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">Recuerda no comprartir tu infomacion</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
          </div>
          <div class="col-md-12" style="display: flex; justify-content:end">
          <button type="submit" class="btn btn-primary" >Iniciar sesion</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>