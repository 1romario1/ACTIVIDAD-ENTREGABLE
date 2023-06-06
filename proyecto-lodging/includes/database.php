<?php

function conectar_db(){
    $db=mysqli_connect('localhost','root','','lodging');
    if(!$db){
        'No se encontro la bace de datos';
        exit;
    }
    else{
        echo 'Conexion exitosa';
    }
    return $db;
}