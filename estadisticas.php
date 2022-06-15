<?php 
include("con_db.php");
$usuarios = "SELECT * FROM datos";
$prueba1 = "SELECT AVG(prueba_1) FROM datos";
$prueba2 = "SELECT AVG(prueba_2) FROM datos";
$prueba3 = "SELECT AVG(prueba_3) FROM datos";
$calificacion = "SELECT AVG(calificacion) FROM datos";
$recomendacion = "SELECT AVG(recomendacion) FROM datos";
$dificultad = "SELECT AVG(dificultad) FROM datos";
$correcto1 =  "SELECT SUM(correcto_1) FROM datos";
$correcto2 =  "SELECT SUM(correcto_2) FROM datos";
$correcto3 =  "SELECT SUM(correcto_3) FROM datos";
$fallo1 = "SELECT SUM(fallo_1) FROM datos";
$fallo2 = "SELECT SUM(fallo_2) FROM datos";
$fallo3 = "SELECT SUM(fallo_3) FROM datos";
?>

<!DOCTYPE html>
<html>
<head>
	<title>T-rex | Estadistiscas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="tabla.css">
</head>
<body>
<div class="container">
<table class="table">
            <caption>Estadistiscas Juego</caption>
            <thead>
                <tr>
                    <th>prueba 1</th>
                    <th>prueba 2</th>
                    <th>prueba 3</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $r1 = mysqli_query($conex, $prueba1);
                $r2 = mysqli_query($conex, $prueba2);
                $r3 = mysqli_query($conex, $prueba3);
               /* $result = mysqli_query($conex, $usuarios);
                while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                    <td><?php echo $row['prueba_1']; ?></td>
                    <td><?php echo $row['prueba_2']; ?></td>
                    <td><?php echo $row['prueba_3']; ?></td>
                </tr> <?php } */
                while($row = mysqli_fetch_assoc($r1)){
                    echo "<tr>";
                    echo "<td>".$row['AVG(prueba_1)']."</td>";
                } 
                while($row = mysqli_fetch_assoc($r2)){
                    echo "<td>".$row['AVG(prueba_2)']."</td>";
                } 
                while($row = mysqli_fetch_assoc($r3)){
                    echo "<td>".$row['AVG(prueba_3)']."</td>";
                }
                echo "<td><b>Promedio %</b></td>";
                ?>
                <?php
                $co1 = mysqli_query($conex, $correcto1);
                $co2 = mysqli_query($conex, $correcto2);
                $co3 = mysqli_query($conex, $correcto3);
                
                while($row = mysqli_fetch_assoc($co1)){
                    echo "<tr>";
                    echo "<td>".$row['SUM(correcto_1)']."</td>";
                }
                while($row = mysqli_fetch_assoc($co2)){
                    echo "<td>".$row['SUM(correcto_2)']."</td>";
                }
                while($row = mysqli_fetch_assoc($co3)){
                    echo "<td>".$row['SUM(correcto_3)']."</td>";
                }
                echo "<td><b>Correctas #</b></td>";
                ?>
                <?php
                $fal1 = mysqli_query($conex, $fallo1);
                $fal2 = mysqli_query($conex, $fallo2);
                $fal3 = mysqli_query($conex, $fallo3);
                
                while($row = mysqli_fetch_assoc($fal1)){
                    echo "<tr>";
                    echo "<td>".$row['SUM(fallo_1)']."</td>";
                }
                while($row = mysqli_fetch_assoc($fal2)){
                    echo "<td>".$row['SUM(fallo_2)']."</td>";
                }
                while($row = mysqli_fetch_assoc($fal3)){
                    echo "<td>".$row['SUM(fallo_3)']."</td>";
                }

                echo "<td><b>Incorrectas #</b></td>";
                ?>


            </tbody>
        </table>

        <table class="table">
            <caption>Resultado Encuesta</caption>
            <thead>
                <tr>
                    <th>calificacion juego</th>
                    <th>recomendacion</th>
                    <th>dificultad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cali = mysqli_query($conex, $calificacion);
                $reco = mysqli_query($conex, $recomendacion);
                $difi = mysqli_query($conex, $dificultad);

                while($row = mysqli_fetch_assoc($cali)){
                    echo "<td>".$row['AVG(calificacion)']."</td>";
                }
                while($row = mysqli_fetch_assoc($reco)){
                    echo "<td>".$row['AVG(recomendacion)']."</td>";
                }

                while($row = mysqli_fetch_assoc($difi)){
                    echo "<td>".$row['AVG(dificultad)']."</td>";
                }
            ?>
                   
            </tbody>
        </table>

        <table class="table">
            <caption>Usuarios</caption>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>mapa Favorito</th>
                    <th>Nota</th>
                    <th>fecha de registro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conex, $usuarios);

                while($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
                <th><?php echo $row['id']; ?></th>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['mapa']; ?></td>
                <td><?php echo $row['nota']; ?></td>
                <td><?php echo $row['fecha_reg']; ?></td>
                </tr> <?php } ?>
               
            </tbody>
        </table>

</body>
</html>