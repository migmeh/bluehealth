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

	<div class="c">
		<?php
		$sql_ver = "SELECT * FROM $usuarios ORDER BY id DESC";	 
		$result_ver = mysqli_query($conn, $sql_ver);
					
		if (mysqli_num_rows($result_ver) > 0) {		  
			while($row_ver = mysqli_fetch_assoc($result_ver)) {
				if($row_ver["eliminar"]!="1"){
					
				
				echo "<div class='caja'>";
					echo "<div class='sombra p_diez'>";
						echo "<div class='left veinte'><img src='images/user.png' class='imagen'></div>";
							echo "<div class='right ochenta datos'>";
							echo "<span class='tus_datos'><strong>Nombre: </strong>".$row_ver["nombre"]."</span>";
							echo "<span class='tus_datos'><strong>Mail: </strong>".$row_ver["mail"]."</span>";
							echo "<span class='tus_datos'><strong>Telefono: </strong>".$row_ver["telefono"]."</span>";
							echo "<div class='mas_info'>
							<a href='eliminar.php?id=".$row_ver["id"]."' class='my_boton_tres'>Eliminar</a> 
							<a href='editar.php?id=".$row_ver["id"]."' class='my_boton_dos'>Editar</a> 
							<a href='usuario.php?id=".$row_ver["id"]."' class='my_boton_dos'>Más información</a></div>";
							echo "</div>";
						echo "<div class='s'></div>";
					echo "</div>";
				echo "</div>";
				}
		}
		}
		?>
		<div class="s"></div>
	</div>
</div>


<?php
include("pie.php");
?>