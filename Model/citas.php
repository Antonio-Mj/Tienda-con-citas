<?php
require ('../Controller/bd_conexion.php');
$name = $_POST['nombre'];
$email = $_POST['email'];
$telef = $_POST['telefono'];
$edad = $_POST['edad'];
$fecha = $_POST['fecha'];
$costo = $_POST['costo'];
$tipo = $_POST['tipo'];

$detallesIn = $_POST['detallesID'];
$detallesEm = $_POST['detallesEm'];
$detallesNo = $_POST['detallesNo'];
$detallesAp = $_POST['detallesAp'];
$detallesSt = $_POST['detallesSt'];
$detallesMo = $_POST['detallesMo'];
$detallesPa = $_POST['detallesPa'];
$detallesFe = $_POST['detallesFe'];

echo $detallesIn."<br>";
echo $detallesEm."<br>";
echo $detallesNo."<br>";
echo $detallesAp."<br>";
echo $detallesSt."<br>";
echo $detallesMo."<br>";
echo $detallesPa."<br>";
echo $detallesFe."<br>";


if($name != "" && $email != ""  && $telef != "" && $edad != "" && $fecha != "" && $costo != ""  && $tipo != '' && $detallesIn != '' && $detallesEm != '' && $detallesNo != '' && $detallesAp != '' && $detallesSt != '' && $detallesMo != '' && $detallesPa != '' && $detallesFe != '') {
    $request = $conn->prepare("INSERT INTO `citas`(`name`, `email`, `phone`, `age`, `date`, `price`, `payment_type`)VALUES ('$name' , '$email' , '$telef' , '$edad' , '$fecha', '$costo', '$tipo')");
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
        window.location.href = "../index.php?vista=pdfFactura&detallesID=<?php echo $detallesIn ?>&detallesEm=<?php echo $detallesEm?>&detallesNo=<?php echo $detallesNo?>&detallesAp=<?php echo $detallesAp?>&detallesSt=<?php echo $detallesSt ?>&detallesMo=<?php echo $detallesMo?>&detallesPa=<?php echo $detallesPa ?>&detallesFe=<?php echo $detallesFe ?>&nombre=<?php echo $name ?>&email=<?php echo $email ?>&telefono=<?php echo $telef?> &edad= <?php echo $edad ?>&fecha=<?php echo $fecha ?>&tipo=<?php echo $tipo ?>"
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