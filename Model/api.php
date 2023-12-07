<?php
require ('../Controller/bd_conexion.php');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['getFechas'])) {
    $request = $conn->prepare("SELECT date FROM `citas`");
    if (!$request->execute()) {
        $response = ['error' =>'Error en la consulta'];
        http_response_code(400);
    }else{
        $response = $request->fetchAll(PDO::FETCH_ASSOC);
        http_response_code(200);
    }
    echo json_encode ($response);
}else{
    $response= ['error' => 'NO OBTIENE LAS FECHAS'];
}

if (isset($data['getDates'])) {
    if (!$conn) {
        $response = ['error' => 'Error en la conexión a la base de datos'];
        http_response_code(500);
    } else {
        $request = $conn->prepare("SELECT * FROM `citas`");
        if (!$request->execute()) {
            $response = ['error' => 'Error en la consulta'];
            http_response_code(400);
        } else {
            $response = $request->fetchAll(PDO::FETCH_ASSOC);
            http_response_code(200);
        }
    }
    echo json_encode($response);
}


?>