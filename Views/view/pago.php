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
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="select-option" name ="tipo">
        <option selected value="Type_m">Seleccione un metodo de pago</option>
        <option value="EFE">Efectivo</option>
        <option value="PAY">Paypal</option>
        <option value="TAR">Tarjeta de credito/debito</option>
    </select>
            <input type="hidden" value="<?php echo $name ?>" name="nombre"></input>
            <input type="hidden" value="<?php echo $email ?>" name="email"></input>
            <input type="hidden" value="<?php echo $telef ?>" name="telefono"></input>
            <input type="hidden" value="<?php echo $edad ?>" name="edad"></input>
            <input type="hidden" value="<?php echo $fecha ?>"name="fecha"> </li>
            <input type="hidden" value= "500" name="costo"></li>
            <div class="col-md-12" style="margin:0 auto; margin-top:30px; margin-bottom: 100px;" id="metodo"></div>
            <div class="col-md-5" style=" margin-top:30px; margin-bottom: 100px;" id="enviar"><button class="btn btn-success" type="submit">Enviar</button></div>
    </form>
    </div>
   
    
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
    const metodo = document.getElementById('select-option');
    const  __container_metod =document.getElementById('metodo')
    metodo.addEventListener('change',function(){
        __container_metod.innerHTML = '';
        if(metodo.value == "PAY"){
            var item =document.createElement('div')
            item.innerHTML= `
            <h1>Pagar con PayPal</h1>
            <p>Para realizar el pago por medio del paypal solo debes seguir estos pasos:</p>
            1.- Ingresa a tu cuenta de PayPal, si no la tienes creada puedes hacerlo en este link <a
            href="https://www.paypal.com/signup?locale.x=es_XC&countrycode=MX">
            https://www.paypal.com/signup?locale.x=es_XC&countrycode=MX
            </a><br/>
            2.- Una vez que hayas ingresado a tu cuenta busca la opción de depositar y haz clic.<br/>
            3.- En la ventana emergente que se abrirá, selecciona la cantidad que deseas pagar (en
            caso contrario puedes elegir cualquier monto) y luego presiona el botón "Continuar".<br/>
            4.- Ahora es importante que ingreses los detalles de tu compra, como nombre completo, dirección
            y correo electrónico para poder procesar correctamente tu transacción.<br/>
            5.- Finalmente, confirma todos los datos ingresados y presiona el botón "Comprar".<br/>
            Esperamos que todo salga bien!
            6.- Depositas el costo a esta cuenta ********************`
            __container_metod.appendChild(item);
            }
            else if (metodo.value == 'TAR') {
                var item =document.createElement('div')
                item.innerHTML=`
                <h1>Pagar con Tarjeta de Credito o Debito</h1>
                1.- Ingresa a tu banco correspondiente al método de pago.<br/>
                2.- Busca la sección de compras en línea y sigue las instrucciones del banco.<br/>
                3.- Luego de completar los campos solicitados, procede a realizar la operación de compra.<br/>
                4.- Luego de completar los campos solicitados, haz clic en "Realizar Pago".<br/>
                5.- Si recibes un mensaje indicando que el pago fue exitoso, procede a finalizar su compra.<br/>
                6.- Si te muestra un mensaje indicando que has sido redireccionado a una página web externa,
                es normal ya que estás utilizando nuestro sitio web para realizar el pago.<br/>
                7.- Confirmá los detalles de tu tarjeta de crédito o débito y haz clic en "A
                ceptar" o "Confirmar".<br/>
                8.- Revisa cuidadosamente los términos y condiciones antes de finalizar el pago.<br/>
                9.- Haz clic en "Finalizar Compra" o "Terminar Compra", dependiendo de lo que indique
                tu banco.<br/>
                10.- Te será mostrado un mensaje de confirmación, donde podrás verificar que la operación
                fue exitosa.<br/>
                11.- Por último, recibirás un email de confirmacion con los detalles de tu compra.<br/>
                ¡Gracias por su preferencia!
                `
                __container_metod.appendChild(item);
            }
            else if (metodo.value == 'EFE') {     
                var item =document.createElement('div')
                item.innerHTML=`        
                <h1>Pagar con Efectivo</h1>
                1.- Llena el formulario de contacto con tus datos personales y envíalo.<br/>
                2.- El personal nos comunicará contigo para coordinar la cita.<br/>
                3.- La fecha y hora de la cita se enviaran vía correo electronico.<br/>
                4.- Realiza el pago en efectivo en el lugar establecido.<br/>
                5.- Conserva el ticket de la cita para demostrar que has realizado el pago.<br/>
                6.- El personal nos informará sobre el estado de tu pago.<br/>
                7.- Si todo sale bien, recibirás un correo electrónico con los detalles de tu compra.<br/>
                ¡Gracias por su preferencia!
                `
                __container_metod.appendChild(item);
            }
    })


</script>