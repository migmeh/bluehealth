<?php
include("head.php");
 if($_COOKIE["usuarios"]!="root"){header("location:/");}
?>   
<title>Index</title>
</head>
<body> 

<?php
menu();
$id= $_GET["id"];
?>
<div class="contenedor">

<form method="post" class="my_entrar">
		<?php
		error_reporting(0);
		$sql_ver = "SELECT * FROM $usuarios WHERE id='$id'";	 
		$result_ver = mysqli_query($conn, $sql_ver);
					
		if (mysqli_num_rows($result_ver) > 0) {		  
			$row_ver = mysqli_fetch_assoc($result_ver);
			$a=$row_ver["nombre"];
			$b=$row_ver["telefono"];
			$c=$row_ver["mail"];
			$d=$row_ver["password"];
			$e=$row_ver["notas"];
		}else{header("location:/admin.php");}
		?>
		<input type="text" name="nombre" placeholder="Nombre" value="<?php echo $a; ?>" />
		<input type="text" name="telefono" placeholder="Telefono" value="<?php echo $b; ?>"/>
		<input type="mail" name="mail" placeholder="Mail" value="<?php echo $c; ?>"/>
		<input type="password" name="password" placeholder="Password" value="<?php echo $d; ?>"/>
		<textarea placeholder="Notas" name="notas"><?php echo $e; ?></textarea>
		<input type="submit" value="Editar" class="my_boton" />
		<?php
		
		$nombre= $_POST["nombre"];
		$telefono= $_POST["telefono"];
		$mail= $_POST["mail"];
		$password= $_POST["password"];
		$notas= $_POST["notas"];
		echo "<div class='mensaje'>";
		if($_POST){
			if($nombre!=""){
				
				$sql = "UPDATE $usuarios SET nombre='$nombre', telefono='$telefono', mail='$mail', password='$password', fecha='$fecha', notas='$notas' WHERE id='$id'";
				
				if (mysqli_query($conn, $sql)) {
					header("location:admin.php");
				}else{echo "Error";}
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