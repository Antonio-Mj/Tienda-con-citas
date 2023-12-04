<?php
require ('../Controller/bd_conexion.php');
$name = $_POST['nombre'];
$email = $_POST['email'];
$telef = $_POST['telefono'];
$edad = $_POST['edad'];
$fecha = $_POST['fecha'];
$costo = $_POST['costo'];
$tipo = $_POST['tipo'];

if($name != "" && $email != ""  && $telef != "" && $edad != "" && $fecha != "" && $costo != ""  && $tipo != '') {
    $request = $conn->prepare("INSERT INTO `citas`(`name`, `email`, `phone`, `age`, `date`, `price`, `payment_type`)
                                            VALUES ('$name' , '$email' , '$telef' , '$edad' , '$fecha', '$costo', '$tipo')");
    if (!$request->execute()) {
        ?>
        <script>
            alert("Error al agregar el cliente");
            window.history.back();
        </script>
        <?php
    }else{?>
    <script>
        alert("Se agrego la cita correctamente");
        window.location.href = "../index.php?vista=home"
    </script>
    <?php
    }
}else{
    ?>
<script>
alert("No se puede registrar sin completar todos los campos");
window.history.back();
</script>

<?php
}
?>