<head>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.10/index.global.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary" id="container-icon-navbar">
  <div class="container-fluid">
  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><h1>NS</h1></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><h5>INICIO</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?vista=catalogo"><h5>PRODUCTOS</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h5>TIENDA</h5></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="#000000" fill-rule="evenodd" d="M14.665 2.33a.75.75 0 0 1 1.006.335l2.201 4.402c1.353.104 2.202.37 2.75 1.047c.9 1.114.541 2.79-.177 6.143l-.429 2c-.487 2.273-.73 3.409-1.555 4.076c-.825.667-1.987.667-4.311.667h-4.3c-2.324 0-3.486 0-4.31-.667c-.826-.667-1.07-1.803-1.556-4.076l-.429-2c-.718-3.353-1.078-5.029-.177-6.143c.548-.678 1.397-.943 2.75-1.047l2.201-4.402a.75.75 0 0 1 1.342.67l-1.835 3.67C8.319 7 8.846 7 9.422 7h5.156c.576 0 1.103 0 1.586.005l-1.835-3.67a.75.75 0 0 1 .336-1.006ZM7.25 12a.75.75 0 0 1 .75-.75h8a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75ZM10 14.25a.75.75 0 0 0 0 1.5h4a.75.75 0 0 0 0-1.5h-4Z" clip-rule="evenodd"/></svg></a>
        </li>
      </ul> -->
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
        <form method="post" action="../../../Model/login.php">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">Recuerda no comprartir tu infomacion</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" name="pass">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="col-md-12" style="display: flex; justify-content:end">
          <button type="submit" class="btn btn-primary" >Iniciar sesion</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>