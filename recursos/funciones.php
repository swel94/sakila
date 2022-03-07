<?php

function refrezcar ($archivo){

    header("Locartion: $archivo");
}

function alerta($titulo, $texto, $icono){
    return "swal({
        title: '$titulo',
        text: '$texto',
        icon: '$icono'
    })";
}

?>