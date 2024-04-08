<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Configurar el destinatario y el asunto del correo electrónico
    $destinatario = "franklinlroa@gmail.com";
    $asunto = "Nuevo mensaje del formulario de contacto";

    // Construir el cuerpo del correo electrónico
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo Electrónico: $correo\n";
    $cuerpoMensaje .= "Mensaje:\n $mensaje\n";

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $cuerpoMensaje);

    // Redirigir de vuelta a la página de inicio u otra página de confirmación
    header("Location: index.html");
    exit;
}
?>