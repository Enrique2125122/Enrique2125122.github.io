<?php
if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $to = "alecavazoc2000@gmail.com";  // 👈 pon aquí tu correo
    $subject = "Nuevo mensaje desde el formulario";
    $message = "Nombre: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Mensaje: " . $comment;

    $headers = "From: " . $email;

    if(mail($to, $subject, $message, $headers)) {
        echo "OK";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
