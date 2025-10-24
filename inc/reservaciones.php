<?php

function lapizzeria_guardar(){

    if(isset($_POST['enviar']) && $_POST['oculto'] == "1"):
        $nombre = sanitize_text_field( $_POST['nombre']);
        $fecha = sanitize_text_field( $_POST['fecha']);
        $correo = sanitize_text_field( $_POST['correo']);
        $telefono = sanitize_text_field( $_POST['telefono']);
        $mensaje = sanitize_text_field( $_POST['mensaje']);
    endif;

}

add_action('init', 'lapizzeria_guardar');
