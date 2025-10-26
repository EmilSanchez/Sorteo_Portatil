<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Cambia este correo por el tuyo
    $destinatario = "tucorreo@ejemplo.com";
    $asunto = "Nuevo mensaje desde el formulario";
    
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $correo\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $headers = "From: $correo";

    if (mail($destinatario, $asunto, $contenido, $headers)) {
        echo "<h2>✅ ¡Mensaje enviado correctamente!</h2>";
    } else {
        echo "<h2>❌ Error al enviar el mensaje. Inténtalo de nuevo.</h2>";
    }
}
?>
