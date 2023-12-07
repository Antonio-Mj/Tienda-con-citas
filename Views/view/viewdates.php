<?php
session_start();
?>

<div class="container">
<?php
if(isset($_SESSION['user'])) {

    $userData = $_SESSION['user'];

    echo "<h1>Bienvenido administrador:  " . $userData['name']." ".$userData['lastname']."</h1>";
} else {

    header('location: ../index.php?msg=Debes iniciar sesión para ver esta página');
}
?>
<table class="table" style="margin-top: 5%;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Tipo de pago</th>
      <th scope="col">Años</th>
      <th scope="col">Precio</th>
      <th scope="col"> Fecha de la cita</th>
    </tr>
  </thead>
  <tbody id="father_container">
    <tr>
      <th id="ID"></th>
      <td id="name"></td>
      <td id="email"></td>
      <td id="telefono"></td>
      <td id="type"></td>
      <td id="age"></td>
      <td id="precio"></td>
    </tr>
  </tbody>
</table>


</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const father_nav =document.getElementById('itemsNav')
    father_nav.innerHTML += `
    <button class="btn btn-danger" style="margin-left:10%;" id="exit" onclick="exitS()"> Salir</button>`;
    
    const father__ = document.getElementById('father_container');
    
    fetch("Model/api.php", {
        method: 'POST',
        headers: {
            'Content-type': 'application/json'
        },
        body: JSON.stringify({ getDates: true })
    })
    .then(response => response.json())
    .then(data => {
        data.forEach(element => {
            // Crear una nueva fila (<tr>)
            let trCita = document.createElement('tr');
            
            // Insertar datos en celdas (<td>) dentro de la fila
            trCita.innerHTML = `
                <td>${element.id_user}</td>
                <td>${element.name}</td>
                <td>${element.email}</td>
                <td>${element.phone}</td>
                <td>${element.payment_type}</td>
                <td>${element.age}</td>
                <td>${element.price}</td>
                <td>${element.date}</td>
            `;
            
            father__.appendChild(trCita);
        });
    });
});

    function exitS(){
             fetch("Controller/logout.php") 
            .then(response => {
                window.location.href = 'index.php'; 
            })
            .catch(error => {
                console.error('Error al cerrar sesión:', error);
            });
}

</script>