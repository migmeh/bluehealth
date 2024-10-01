<?php

include("head.php");
 if($_COOKIE["usuarios"]!="root"){header("location:/");}
?>   
<title>Index</title>
</head>
<body> 

<?php
menu();
?>
<div class="contenedor">

<form method="post" class="my_entrar">
		<input type="text" name="nombre" placeholder="Nombre" />
		<input type="text" name="telefono" placeholder="Telefono" />
		<input type="mail" name="mail" placeholder="Mail" />
		<input type="password" name="password" placeholder="Password" />
		<textarea placeholder="Notas" name="notas"></textarea>
		<input type="submit" value="Agregar" class="my_boton" />
		<?php
		error_reporting(0);
		$nombre= $_POST["nombre"];
		$telefono= $_POST["telefono"];
		$mail= $_POST["mail"];
		$password= $_POST["password"];
		$notas= $_POST["notas"];
		$fecha;
		$eliminar = 0;
		$f_eliminar = $fecha;
		"<div class='mensaje'>";
		if($_POST){
			if($nombre!=""){
				$sql = "INSERT INTO $usuarios (nombre, telefono, mail, password, fecha, notas, eliminar, f_eliminar)
				VALUES ('$nombre', '$telefono','$mail', '$password', '$fecha', '$notas', '$eliminar', '$f_eliminar')";
				
				if (mysqli_query($conn, $sql)) {
					header("location:admin.php");
				}else{echo mysqli_error($conn);}
			}else{
				echo "El nombre es necesario";
			}
		}
		
		
			
		echo "</div>";
		?>
</form>
	
</div>


<?php
include("pie.php");
?>