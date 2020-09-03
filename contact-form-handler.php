<?php

$name = $_POST['name'];
$lastname = $_POST['lastname']
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$interest = $_POST['interest'];
$role = $_POST['role'];
$preferred_method = $_POST['preferred_method'];

$email_from = 'daniela_williams@hotmail.com';

$email_subject = "Alguien se quiere comunicar con Shark";

$email_body = "Nombre: $name.\n".
                "Apellido: $lastname.\n".
                    "Correo: $visitor_email.\n".
                        "Teléfono: $visitor_phone.\n".
                        'Me interesa Shark Express para: ' . $interest . "\n".
                        'Soy: ' .$role . "\n".
                        'Método de contacto preferido: ' .$preferred_method . "\n";


$to = "dani.elen.williams@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: menu_html.html");

?>