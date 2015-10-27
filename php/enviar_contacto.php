<?php

require_once('funciones.php');
// Campos del formulario
$resultado = "";
$nombre = addslashes(htmlspecialchars($_POST['nombre']));
$telefono = addslashes(htmlspecialchars($_POST['telefono']));
$email = addslashes(htmlspecialchars($_POST['email']));
$asunto = addslashes(htmlspecialchars($_POST['asunto']));
$mensaje = addslashes(htmlspecialchars($_POST['mensaje']));

// Envio el correo
$respueta = enviarcorreo($_POST['nombre'],$_POST['telefono'],$_POST['email'],$_POST['asunto'],$_POST['mensaje']);

$resultado = "<span> ". $respueta . " </span>";
echo $resultado;

