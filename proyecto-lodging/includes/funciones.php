<?php

function Buscar_reservas(){
    try{
        require 'database.php';
        $sql='SELECT * FROM reserva;';
        $conexion=mysqli_query($db,$sql);
        return $conexion;
    }

    catch(\Throwable $th){
        echo '<pre>';
        var_dump($th);
        echo '<\pre>';
    }
}

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