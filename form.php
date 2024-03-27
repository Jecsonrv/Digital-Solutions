<?php
if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['msg'])){
        $name = $_POST['name'];
        $msg = $_POST['msg'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];

        $destinatario= "digitalsolutionssacv@gmail.com";
        $asunto= "Solicitud de cotización";
        
        $contenido = "Nombre: $name \n";
        $contenido.= "Teléfono: $telefono \n";
        $contenido.= "Email: $email \n";
        $contenido.= "Mensaje: $mesaje";

        $header="From: DigitalSolutions.com";
        $mail= mail($destinatario,$asunto,$contenido,$header);

        if($mail){
            echo "<script>alert('El correo se envió correctamente :)'); </script>";
        }else{
            echo "<script>alert('El correo no pudo ser enviado'); </script>";
        }

    }
}

?>