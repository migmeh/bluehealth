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

	<div class="c">
		<?php
		$sql_ver = "SELECT * FROM $usuarios WHERE id='$id'";	 
		$result_ver = mysqli_query($conn, $sql_ver);
					
		if (mysqli_num_rows($result_ver) > 0) {		  
			$row_ver = mysqli_fetch_assoc($result_ver);
			if($row_ver["eliminar"]==1){
				header("location:/admin.php");
			}
				echo "<div class='detalle'>";
					echo "<div class='sombra p_diez'>";
						echo "<div class='left veinte'><img src='images/user.png' class='imagen'></div>";
							echo "<div class='right ochenta datos'>";
							echo "<span class='tus_datos'><strong>Nombre: </strong>".$row_ver["nombre"]."</span>";
							echo "<span class='tus_datos'><strong>Mail: </strong>".$row_ver["mail"]."</span>";
							echo "<span class='tus_datos'><strong>Telefono: </strong>".$row_ver["telefono"]."</span>";
							echo "<span class='tus_datos'><strong>Notas: </strong></span>";
							echo "<span class='tus_datos'></strong>".nl2br(htmlentities($row_ver["notas"]))."</span>";
							echo "</div>";
						echo "<div class='s'></div>";
					echo "</div>";
				echo "</div>";
		
		}
		?>
		<div class="s"></div>
	</div>
</div>


<?php
include("pie.php");
?>