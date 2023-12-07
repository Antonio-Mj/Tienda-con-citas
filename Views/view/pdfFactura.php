<?php
ob_start();
// Verificar si se han recibido los datos esperados
if (
    isset($_GET['detallesID'], $_GET['detallesEm'], $_GET['detallesNo'], $_GET['detallesAp'],
    $_GET['detallesSt'], $_GET['detallesMo'], $_GET['detallesPa'], $_GET['detallesFe'], $_GET['tipo'],$_GET['fecha'])
) {
    // Obtener los datos de la URL
    $fecha = $_GET['fecha'];
    $tipo = $_GET['tipo'];
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];
    $detallesIn = $_GET['detallesID'];
    $detallesEm = $_GET['detallesEm'];
    $detallesNo = $_GET['detallesNo'];
    $detallesAp = $_GET['detallesAp'];
    $detallesSt = $_GET['detallesSt'];
    $detallesMo = $_GET['detallesMo'];
    $detallesPa = $_GET['detallesPa'];
    $detallesFe = $_GET['detallesFe'];
    $telefono = $_GET['telefono'];
    $edad = $_GET['edad'];
   
} else {
    echo "Faltan parámetros en la URL.";
}
?>
<?php
ob_start();
?>
<div class="container">
    <h1>NAILS SPAA</h1>

<table class="table table-hover" style="margin-top:2%;">
<h4 style="margin-top:2%;">Direccion: Toluca, Centro Estado de Mexico</h4>
<h4>Factura: Cita spaa</h4>
<h5>Fecha del pago: <?php echo $fecha ?></h5>
<h4>Nombre del titular de pago: <?php echo $detallesNo ." ". $detallesAp?></h4>
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Folio</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Tipo de pago</th>
      <th scope="col">Fecha de la cita</th>
      <th scope="col">Pago exitoso</th>
      <th scope="col">Moneda</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th>echo</th>
      <th>  <?php echo $detallesIn ?></th>
      <td>  Cita a NAIL SPAA con todos los <br>servicios incliudos </td>
      <td> <?php echo $detallesPa ?></td>
      <td> <?php echo $tipo?></td>
      <td> <?php echo $detallesFe ?></td>
      <td> <?php echo $detallesSt?></td>
      <td> <?php echo $detallesMo ?></td>
      <td> <?php echo $detallesEm ?> </td>
    </tr>
  </tbody>
</table>

<div>
    <h4>
        Cita a nombre de: <?php echo $nombre?>
    </h4>
    <h4>
        Email de la cita: <?php echo $email ?>
    </h4>
    <h4>
        Edad: <?php  echo $edad?>
    </h4>
    <h4>
        Telefono: <?php echo $telefono ?>
    </h4>
</div>

<a class="btn btn-dark" href="index.php">Regresar al incio</a>
</div>


<?php
$html = ob_get_clean();
echo $html;


// require_once('library/dompdf/autoload.inc.php');

// use Dompdf\Dompdf;
// $dompdf = new Dompdf();

// $options = $dompdf->getOptions();
// $options->set(array('isRemoteEnabled' => false));
// $dompdf->setOptions($options);

// $dompdf->loadHtml($html);

// $dompdf->setPaper('letter');

// $dompdf->render();

// $dompdf->stream("archivo_.pdf", array("Attachment" => true));
?>