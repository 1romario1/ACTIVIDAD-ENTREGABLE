<?php
require '../../includes/funciones.php';

$bd=conectar_db();
$consulta='SELECT * FROM reserva;';

$resultado_consulta=mysqli_query($bd, $consulta);
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Consultar reservas</title>
</head>
<body>
    <h2>Gestion de reservas-Consultar</h2>
<table>
    <th>
        <tr>
            <td>Nro_reserva</td>
            <td>Nro_Documento</td>
            <td>Nro_Habitacion</td>
            <td>Estado_Reserva</td>
            <td>Fecha_Reserva</td>
            <td>Fecha_Ingreso</td>
            <td>Fecha_Salida</td>
            <td>Alojamiento</td>
        </tr>
    </th>
    <?php while($reserva=mysqli_fetch_assoc($resultado_consulta)){?>
    <tr>
        <td><?php echo $reserva['Nro_reserva'];?></td>
        <td><?php echo $reserva['Nro_Documento'];?></td>
        <td><?php echo $reserva['Nro_Habitacion'];?></td>
        <td><?php echo $reserva['Estado_Reserva'];?></td>
        <td><?php echo $reserva['Fecha_Reserva'];?></td>
        <td><?php echo $reserva['Fecha_Ingreso'];?></td>
        <td><?php echo $reserva['Fecha_Salida'];?></td>
        <td><?php echo $reserva['Alojamiento'];?></td>
        <td>
            
            <?php }?>
        </td>  
    </tr>
    <a href='../../index-reserva.php'>Regresar....</a>
</table>

<?php
mysqli_close($bd);
?>
</body>
</html>