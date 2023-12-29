<?php
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $telef = $_POST['telefono'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
if ($name != "" && $email != ""  && $telef != "" && $edad != "" && $fecha != "") {
    ?>
    <div class="col-md-5" style="margin: 0 auto;">
    <div class="alert alert-primary" role="alert" style="color:black;"><h2>Bienvenido <?php echo $name ?></h2></div>
        <div class="alert"> Por favor verifique los datos</div>
        <ul class="list-group">
            <li class="list-group-item">Nombre: <?php echo $name  ?></li>
            <li class="list-group-item">Correo electronico: <?php echo $email ?></li>
            <li class="list-group-item">Telefono: <?php echo $telef ?></li>
            <li class="list-group-item">Edad: <?php echo $edad ?></li>
            <li class="list-group-item">fecha: <?php echo $fecha ?></li>
            <li class="list-group-item">Costo de la reservación: <b>$500 </b></li>
        </ul>
    </div>
    <div class="col-md-5" style="margin:0 auto; margin-top:50px;">
    <form action="Model/citas.php" method="post">
    <div id="paypal-button-container"></div>
    <div class="col-md-5" style=" margin-top:30px; margin-bottom: 100px;" id="enviar"><button style="display: none;" class="btn btn-success" type="submit" id="send-info">Enviar</button></div>  
            <input type="hidden" value =" "name ="tipo" id="tipoP">
            <input type="hidden" value="<?php echo $name ?>" name="nombre"></input>
            <input type="hidden" value="<?php echo $email ?>" name="email"></input>
            <input type="hidden" value="<?php echo $telef ?>" name="telefono"></input>
            <input type="hidden" value="<?php echo $edad ?>" name="edad"></input>
            <input type="hidden" value="<?php echo $fecha ?>"name="fecha"> </li>
            <input type="hidden" value= "500" name="costo"></li>
            <input type="hidden" name="detallesID" id="detallesID">
            <input type="hidden" name="detallesEm" id="detallesEm">
            <input type="hidden" name="detallesNo" id="detallesNo">
            <input type="hidden" name="detallesAp" id="detallesAp">
            <input type="hidden" name="detallesSt" id="detallesSt">
            <input type="hidden" name="detallesMo" id="detallesMo">
            <input type="hidden" name="detallesPa" id="detallesPa">
            <input type="hidden" name="detallesFe" id="detallesFe">
            <div class="col-md-12" style="margin:0 auto; margin-top:30px; margin-bottom: 100px;" id="metodo"> </div>
            
    </form>
    </div>
 


    <script src=""></script>

    
    <?php
}else{
?>

<script>
    alert("LLENA TODOS LOS DATOS")
    window.history.back();
</script>
<?php
}


?>

<script>
    pago = document.getElementById('tipoP');
    paypal.Buttons(
        {
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount:{
                            value: 500
                        }
                    }]
                });
            },

            onApprove: function(data, actions){
                actions.order.capture().then(function(detalles){
                    // alert("PAGADO CORRECTAMENTE")
                    pago.value = 'PAY'
                    itemD = document.getElementById('detallesID')  
                    itemE = document.getElementById('detallesEm')
                    itemN = document.getElementById('detallesNo')
                    itemA = document.getElementById('detallesAp')
                    itemS = document.getElementById('detallesSt')
                    itemM = document.getElementById('detallesMo')
                    itemP = document.getElementById('detallesPa')
                    itemF = document.getElementById('detallesFe')
                    itemE.value =detalles['payer']['email_address']
                    itemD.value = detalles['id'];  
                    itemN.value = detalles['payer']['name']['given_name'];
                    itemA.value = detalles['payer']['name']['surname'];
                    itemS.value = detalles['status'];
                    itemM.value = detalles['purchase_units']['0']['amount']['currency_code'];
                    itemP.value = detalles['purchase_units']['0']['amount']['value'];
                    fecha = detalles['create_time'];
                    fecha = fecha.slice(0, 10)
                    itemF.value = fecha
                    if (itemF.value != '') {
                        submit = document.getElementById('send-info');
                        submit.click();
                    }       
                });
            },

            onCancel:function (data){
                alert("Pago cancelado")
                pago.value = ''
                console.log(data);
            }
        }
    ).render('#paypal-button-container')
    
    </script>
