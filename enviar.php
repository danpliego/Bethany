<?php
$submit ="emilioboyg@gmail.com";
$name = $_post["name"];
$email = $_post["email"];
$subject = $_post["subject"];
$message = $_post["message"];
$contenido = "name: " . $name . "\nemail: " . $email . "\nsubject: " . $subject . "\nmessage: " . $message;
mail($destino,"subject", $contenido);
header("location:indexo.html");
?>
