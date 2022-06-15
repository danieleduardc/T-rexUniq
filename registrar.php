<?php 

include("con_db.php");

if (isset($_POST['register'])) {

    if (strlen($_POST['name']) >= 1) {
		$prueba1 = $_POST['prueba1'];
		$prueba2 = $_POST['prueba2'];
		$prueba3 = $_POST['prueba3'];
	    $name = trim($_POST['name']);
		$calificacion = $_POST['calificacion'];
		$dificultad = $_POST['dificultad'];
		$mapa = trim($_POST['mapa']);
		$recomendacion = trim($_POST['recomendacion']);
	    $fechareg = date("d/m/y");
		$nota = ($prueba1 + $prueba2 + $prueba3) / 3;
		$correcto1 = 0;
		$correcto2 = 0;
		$correcto3 = 0;
		$fallo1 = 0;
		$fallo2 = 0;
		$fallo3 = 0;
		if($prueba1 == 5){
			$correcto1 = 1;
		}else{
			$fallo1 = 1;
		}if($prueba2 == 5){
			$correcto2 = 1;
		}else{
			$fallo2 = 1;
		}if($prueba3 == 5){
			$correcto3 = 1;
		}else{
			$fallo3 = 1;
		}
	    $consulta = "INSERT INTO datos(prueba_1, prueba_2, prueba_3,correcto_1, correcto_2, correcto_3, fallo_1, fallo_2, fallo_3, nombre, nota, calificacion, dificultad, mapa, recomendacion, fecha_reg) VALUES ($prueba1, $prueba2, $prueba3 ,$correcto1, $correcto2, $correcto3, $fallo1, $fallo2, $fallo3, '$name', $nota, $calificacion, $dificultad, $mapa, $recomendacion,'$fechareg')";
		$resultado = mysqli_query($conex,$consulta);

		if($prueba1 == 5 && $prueba2 == 5 && $prueba3 == 5){
			$correcto = 1;
			echo '<script>alert(`
			Prueba 1 : correctamente 
			Prueba 2 : correctamente 
			Prueba 3 : correctamente`)</script>';
		}elseif($prueba1 == 5 && $prueba2 == 5 && $prueba3 != 5){
			echo '<script>alert(`
			Prueba 1 : correctamente 
			Prueba 2 : correctamente 
			Prueba 3 : fallo`)</script>';
		}elseif($prueba1 == 5 && $prueba2 != 5 && $prueba3 == 5){
			echo '<script>alert(`
			Prueba 1 : correctamente 
			Prueba 2 : fallo 
			Prueba 3 : correctamente`)</script>';
		}elseif($prueba1 == 5 && $prueba2 != 5 && $prueba3 != 5){
			echo '<script>alert(`
			Prueba 1 : correctamente 
			Prueba 2 : fallo 
			Prueba 3 : fallo`)</script>';
		}elseif($prueba1 != 5 && $prueba2 == 5 && $prueba3 == 5){
			echo '<script>alert(`
			Prueba 1 : fallo 
			Prueba 2 : correctamente 
			Prueba 3 : correctamente`)</script>';
		}elseif($prueba1 != 5 && $prueba2 == 5 && $prueba3 != 5){
			echo '<script>alert(`
			Prueba 1 : fallo 
			Prueba 2 : correctamente 
			Prueba 3 : fallo`)</script>';
		}elseif($prueba1 != 5 && $prueba2 != 5 && $prueba3 == 5){
			echo '<script>alert(`
			Prueba 1 : fallo 
			Prueba 2 : fallo 
			Prueba 3 : correctamente`)</script>';
		}elseif($prueba1 != 5 && $prueba2 != 5 && $prueba3 != 5){
			echo '<script>alert(`
			Prueba 1 : fallo 
			Prueba 2 : fallo 
			Prueba 3 : fallo`)</script>';
		}

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
			<?php
			echo "<script>window.location.href='index.html'</script>";
			?>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }

    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}




?>