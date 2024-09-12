<?php
$baseUrl = "http://localhost/DriverCom/usuario.php";

function consumoApi($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return json_decode($response, true);
}

$page = 1;
$apiUrl = $baseUrl . "?page=" . $page;  // URL de la API
$data = consumoApi($apiUrl);

if (isset($data['error'])) {
    echo '<tr><td colspan="7">' . htmlspecialchars($data['error']) . '</td></tr>';
} else {
    foreach ($data['data'] as $item) {
        $id = htmlspecialchars($item['ID_Usuario']); // ID del alumno
        $nombre = htmlspecialchars($item['Nombre_Usuario']);
        $email = htmlspecialchars($item['Correo_Electronico']);
       // $pass = htmlspecialchars($item['Contrasena']);
        $estado = htmlspecialchars($item['Estado']);
        $fmodi = htmlspecialchars($item['Fecha_Modificacion']);

        echo '<tr>';
        echo '<td>' . $id . '</td>';
        echo '<td>' . $nombre . '</td>';
        echo '<td>' . $email . '</td>';
       // echo '<td>' . $pass . '</td>';
        echo '<td>' . $estado . '</td>';
        echo '<td>' . $fmodi . '</td>';


        echo '<td>
               <a href="equipo-n?id=<?= $id ?>" class="btn btn-primary">Editar</a>
                <a href="usuarios?id=' . $id . '" class="btn btn-danger btnEliminarUsuario" onclick="return confirm(\'¿Estás seguro de que deseas eliminar este registro?\');">Eliminar</a>
              </td>';
              


        echo '</tr>';
    }
}
