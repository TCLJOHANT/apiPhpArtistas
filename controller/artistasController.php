<?php
header("Access-Control-Allow-Origin: *"); // Permitir el acceso desde cualquier origen
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); // Permitir los métodos de solicitud específicos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Permitir los encabezados personalizados
header("Access-Control-Allow-Credentials: true"); // Permitir que las cookies se incluyan en las solicitudes
require_once '../model/Artista.php';

function obtenerDatosFront(){
    $input_data = file_get_contents("php://input");
    $data = json_decode($input_data, true);
    $dataForm = (object)[
        'id' => $data['id'],
        'nombre' => $data['nombre'],
        'genero' => $data['genero'],
        'descripcion' => $data['descripcion']
    ];
    return $dataForm;
}
$artista=new Artista();
switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $datosArtistas=$artista->obtenerArtistas();
        echo (json_encode($datosArtistas));
    break;
    case 'POST':
         $datosArtista = $artista->crearArtista(obtenerDatosFront());
    break;
    case 'PUT':
         $datosArtista = $artista->actualizarArtista(obtenerDatosFront());
    break;
    case 'DELETE':
        $artista->eliminarArtista($_GET['id']);   
    break;
    default:
        echo 'Método de solicitud no válido';
    break;
}