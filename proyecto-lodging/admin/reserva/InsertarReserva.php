<?php

require '../../includes/funciones.php';
$bd=conectar_db();
$errores=[];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $Nro_reserva=$_POST['Nro_reserva'];
    $Nro_Documento=$_POST['Nro_Documento'];
    $Nro_Habitacion=$_POST['Nro_Habitacion'];
    $Estado_Reserva=$_POST['Estado_Reserva'];
    $Fecha_Reserva=$_POST['Fecha_Reserva'];
    $Fecha_Ingreso=$_POST['Fecha_Ingreso'];
    $Fecha_Salida=$_POST['Fecha_Salida'];
    $Alojamiento=$_POST['Alojamiento'];
    
    if(!$Nro_reserva){
        $errores[]='No se ingreso el numero de reserva';
    }
    if(!$Nro_Documento){
        $errores[]='No se ingreso el numero de reserva';
    }
    if(!$Nro_Habitacion){
        $errores[]='No se ingreso el numero de reserva';
    }
    if(!$Estado_Reserva){
        $errores[]='No se ingreso el numero de reserva';
    }
    if(!$Fecha_Reserva){
        $errores[]='No se ingreso el numero de reserva';
    }
    if(!$Fecha_Ingreso){
        $errores[]='No se ingreso el numero de reserva';
    }
    if(!$Fecha_Salida){
        $errores[]='No se ingreso el numero de reserva';
    }
    if(!$Alojamiento){
        $errores[]='No se ingreso el numero de reserva';
    }

    if(empty($errores)){
        $sql="INSERT INTO reserva VALUES('$Nro_reserva','$Nro_Documento','$Nro_Habitacion','$Estado_Reserva',
        '$Fecha_Reserva','$Fecha_Ingreso','$Fecha_Salida','$Alojamiento')";

        echo $sql;
        $resultado=mysqli_query($bd, $sql);

        if($resultado){
            header('location: ../../index-reserva.php');
        }
        }
        else{
            foreach($errores as $error){
                echo '<br>'.$error;
            }
        }
    }
    
?>
<div>
    <p>reserva nueva</p>
    <a href='../../index-reserva.php'>Regresar</a>
    <form class='formulario' method='POST' action='InsertarReserva.php'>
    <fieldset>
        <legend>Datos</legend>
        <label for='Nro_reserva'>No reserva:</label><br>
        <input type='text' id='Nro_reserva' name='Nro_reserva'><br>

        <label for='Nro_Documento'>No documento:</label><br>
        <input type='text' id='Nro_Documento' name='Nro_Documento'><br>

        <label for='Nro_Habitacion'>Nro habitacion:</label><br>
        <input type='text' id='Nro_Habitacion' name='Nro_Habitacion'><br>

        <label for='Estado_Reserva'>Estado de reserva:</label><br>
        <input type='text' id='Estado_Reserva' name='Estado_Reserva'><br>

        <label for='Fecha_Reserva'>Fecha de reserva: </label><br>
        <input type='date' id='Fecha_Reserva' name='Fecha_Reserva'><br>

        <label for='Fecha_Ingreso'>Fecha de ingreso: </label><br>
        <input type='date' id='Fecha_Ingreso' name='Fecha_Ingreso'><br>

        <label for='Fecha_Salida'>Fecha de salida</label><br>
        <input type='date' id='Fecha_Salida' name='Fecha_Salida'><br>
        
        <label for='Alojamiento'>Alojamiento: </label><br>
        <input type='text' id='Alojamiento' name='Alojamiento'><br>
        <br>
        <input type='submit' id='enviar' name='enviar' value='Enviar datos'><br>
    </fieldset>
    </form>
</div>

