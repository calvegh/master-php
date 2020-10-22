<?php

function validar_email($email){
    $status = "No valido.";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }
    return $status;
}

if(isset($_GET['email'])){
    echo validar_email($_GET['email']);
}else{
    echo "Pasa por get un email...";
}