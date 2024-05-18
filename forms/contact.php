<?php
// Verifica si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesa los datos del formulario de contacto
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Aquí podrías enviar el correo electrónico o realizar otras operaciones necesarias
    // Por simplicidad, este ejemplo solo devuelve los datos recibidos
    $responseData = array(
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message
    );

    // Devuelve una respuesta en formato JSON
    header('Content-Type: application/json');
    echo json_encode($responseData);
} else {
    // Si la solicitud no es POST, devuelve un error
    http_response_code(405); // Método no permitido
    echo json_encode(array('error' => 'Método no permitido'));
}
?>
