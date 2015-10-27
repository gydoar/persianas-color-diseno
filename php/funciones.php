<?php
require_once('mandrill/Mindrill.class.php');

function enviarcorreo($nombre, $telefono, $email, $asunto, $mensaje){
    $Mindrill = new Mindrill("eY94DBrH9MabyoVw5BYrCw");

    $fechaenv = date("d-m-Y H:i:s"); ;

    /**ENVIAR CORREO DE BIENVENIDA**/
    $templateName = array('name' => 'contacto');
    $templateInfo = $Mindrill->call('/templates/info', $templateName);

    $_html = $templateInfo->code;
    $_subject = 'Correo de Contacto: ' . $asunto;
    $_from_email = 'ventas@persianascolorydiseno.com';
    $_from_name = 'Persianas Contacto';
    $_to[] = array('email' => 'ventas@persianascolorydiseno.com', 'name' => $_from_name);

    $_vars_content[] = array('name' => 'NOMBRE', 'content' => $nombre);
    $_vars_content[] = array('name' => 'TELEFONO', 'content' => $telefono);
    $_vars_content[] = array('name' => 'EMAIL', 'content' => $email);
    $_vars_content[] = array('name' => 'FECHA', 'content' => $fechaenv);
    $_vars_content[] = array('name' => 'ASUNTO', 'content' => $asunto);
    $_vars_content[] = array('name' => 'MENSAJE', 'content' => $mensaje);

    $_merge_vars[] = array('rcpt' => 'ventas@persianascolorydiseno.com', 'vars' => $_vars_content);

    $sendParams = array('message' => array(
        'html' => $_html,
        'subject' => $_subject,
        'from_email' => $_from_email,
        'from_name' => $_from_name,
        'to' => $_to,
        'merge_vars' => $_merge_vars));


    $sendMessage = $Mindrill->call('/messages/send', $sendParams);
    $resultSend = FALSE;

    foreach($sendMessage as $_resp)
    {
        $statusSend = $_resp->status;

        if($statusSend == 'sent' || $statusSend == 'queued' || $statusSend == 'scheduled')
        {
            $resultSend = TRUE;
        }
    }

    $message = 'Mensaje de contacto enviado. ';

    if($resultSend == TRUE)
    {
        $message .= 'Correctamente.';
    }
    else
    {
        $message .= 'Error. No se puedo enviar el correo, por favor contactar con el administrador del sistema.';
    }

    $response["error"] = 'SUCCES_REGISTER';
    $response["message"] = $message;
    /**END ENVIAR CORREO**/

    return $message;

}