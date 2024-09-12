<?php
session_start();
header('Content-Type: application/json'); // Asegúrate de que el contenido es JSON

// La URL de tu API
$url = "http://localhost/DriverCom/usuario.php";

// Obtener datos del formulario
$t1 = isset($_POST['t1']) ? $_POST['t1'] : '';
$t2 = isset($_POST['t2']) ? $_POST['t2'] : '';
$t3 = isset($_POST['t3']) ? $_POST['t3'] : '';
$t5 = isset($_POST['t5']) ? $_POST['t5'] : '';
$t6 = isset($_POST['t6']) ? $_POST['t6'] : '';

// Verificar que todos los datos están presentes
if ($t1 && $t2 && $t3 && $t5 && $t6) {
    // Los datos están completos, proceder con la solicitud
    $data = array(
        't1' => $t1,
        't2' => $t2,
        't3' => $t3,
        't5' => $t5,
        't6' => $t6
    );

    // Inicializa una sesión cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Retorna la transferencia como una cadena de texto
    curl_setopt($ch, CURLOPT_POST, true); // Indica que es una solicitud POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Los datos a enviar en el cuerpo de la solicitud

    // Ejecuta la solicitud cURL y obtiene la respuesta
    $response = curl_exec($ch);

    // Verifica si hubo errores
    if (curl_errno($ch)) {
        echo json_encode(['error' => curl_error($ch)], JSON_UNESCAPED_UNICODE);
    } else {
        // Decodifica la respuesta JSON
        $responseData = json_decode($response, true);
        echo json_encode($responseData, JSON_UNESCAPED_UNICODE);
    }

    // Cierra la sesión cURL
    curl_close($ch);
} else {
    echo json_encode(['error' => 'Datos incompletos.'], JSON_UNESCAPED_UNICODE);
}
?>
