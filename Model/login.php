<?php
require('../Controller/bd_conexion.php');

if ($_POST['email'] != '' && $_POST['pass'] != '') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $request = $conn->prepare("SELECT * FROM `users` WHERE email = :email AND pass_u = :pass");
    $request->bindParam(':email', $email);
    $request->bindParam(':pass', $pass);
    $request->execute();

    $user = $request->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        session_start();
        $_SESSION['user'] = $user;
        header('location: ../index.php?vista=viewdates');
    } else {
        header('location: ../index.php?msg=No tiene acceso!');
    }
} else {
    header('location: ../index.php?msg=Si tiene cuenta, llene los datos por favor!');
}
?>
