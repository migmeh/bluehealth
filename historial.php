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
		$sql_ver = "SELECT * FROM $usuarios ORDER BY fecha DESC";	 
		$result_ver = mysqli_query($conn, $sql_ver);
					
		if (mysqli_num_rows($result_ver) > 0) {		  
			while($row_ver = mysqli_fetch_assoc($result_ver)) {
				if($row_ver["eliminar"]==1){
					
				
				echo "<div class='detalle'>";
					echo "<div class='sombra p_diez'>";
						echo "Se Elimino el usuario ".$row_ver["nombre"];
					echo "</div>";
				echo "</div>";
				}
									echo "<div class='detalle'>";
					echo "<div class='sombra p_diez'>";
						echo "Se creo el usuario ".$row_ver["nombre"];
					echo "</div>";
				echo "</div>";
				
		}
		}
		?>
		<div class="s"></div>
	</div>
</div>


<?php
include("pie.php");
?>