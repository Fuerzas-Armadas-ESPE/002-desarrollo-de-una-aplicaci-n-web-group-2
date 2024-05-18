<?php

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "feK_DD1wUDISDaoc9",
      });
   })();
</script>


// Verifica si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Procesa los datos del formulario de contacto
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

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
  // Si no se envió una solicitud POST, devuelve una respuesta vacía
  // Esto permite el acceso directo a la página sin causar el error HTTP 405
  echo '';
}
?>

