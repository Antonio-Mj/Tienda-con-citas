<?php
    $name = $_GET['nombre'];
    $email = $_GET['email'];
    $telef = $_GET['telefono'];
    $edad = $_GET['edad'];
    $fecha = $_GET['fecha'];
// if (isset($name)) {
    echo "Nombre: ". $name . "<br>";
    echo "Email: ". $email. "<br>";
    echo "Telefono: ". $telef ."<br>";
    echo "Edad: ". $edad . "<br>";
    echo "Fecha: ". $elsefecha;
// }else{
?>
<script>
    alert("NO HAY DATOS")
    window.history.back();
</script>
<?php
// }


?>