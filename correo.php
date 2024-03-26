<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"])) {
        $nombre = $_POST["nombre"];
        $correo = $_POST["email"];
        $mensaje = $_POST["mensaje"];
        if (!empty($nombre) && !empty($correo) && !empty($mensaje)) { 
            if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $destinatario = "administracion@ecomexico.mx";
                $asunto = mb_encode_mimeheader("Comunicación pagina web", "UTF-8");
                $mensaje = "\n Nombre: " . $nombre . "\n Correo de comunicación: " . $correo. "\n Telefono: " . $_POST['telefono']. "\n\n Mensaje: \n" .  $mensaje;
            
                // Cabeceras del correo
                $cabeceras = "From: sistemas@ecomexico.mx\r\n";
                $cabeceras .= "Reply-To: sistemas@ecomexico.mx\r\n";
                $cabeceras .= "X-Mailer: PHP/" . phpversion();
                $cabeceras .= "MIME-Version: 1.0\r\n";
                $cabeceras .= "Content-Type: text/plain; charset=UTF-8\r\n";
                $cabeceras .= "Content-Transfer-Encoding: 8bit\r\n";
                // Enviar correo
                if(mail($destinatario, $asunto, $mensaje, $cabeceras)) {
                    echo "El correo se ha enviado correctamente.";
                } else {
                    echo "Hubo un error al enviar el correo.";
                }

            } else {
                echo "El correo electronico no es valido";
            }
            

        } else {
            echo "Algun campo no tiene informacion";
        }

        

    } else {
        echo "Por favor, completa todos los datos del formulario";
    }
   
} else {
    echo "Acceso denegado.";
}
?>