<?php
// Verifica si se ha enviado una solicitud POST o GET
if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    // Procesa los datos del formulario de contacto si es una solicitud POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    } else { // Si es una solicitud GET (acceso directo a la página), establece valores predeterminados o vacíos
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $subject = isset($_GET['subject']) ? $_GET['subject'] : '';
        $message = isset($_GET['message']) ? $_GET['message'] : '';
    }

    // Configura el destinatario del correo electrónico
    $to = 'alcaiza3@espe.edu.ec';

    // Construye el cuerpo del correo
    $email_body = "Nombre: $name\n";
    $email_body .= "Correo electrónico: $email\n";
    $email_body .= "Asunto: $subject\n";
    $email_body .= "Mensaje:\n$message";

    // Configura las cabeceras del correo electrónico
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envía el correo electrónico
    if (mail($to, $subject, $email_body, $headers)) {
        // Envío exitoso, devuelve una respuesta en formato JSON
        header('Content-Type: application/json');
        echo json_encode(array('success' => 'Mensaje enviado correctamente'));
    } else {
        // Si hay un error al enviar el correo, devuelve un mensaje de error
        http_response_code(500); // Error interno del servidor
        echo json_encode(array('error' => 'Error al enviar el mensaje'));
    }
} else {
    // Si la solicitud no es POST o GET, devuelve un error
    http_response_code(405); // Método no permitido
    echo json_encode(array('error' => 'Método no permitido'));
}
?>
