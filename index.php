<?php
include("head.php");
error_reporting(0);
 if($_COOKIE["usuarios"]=="root"){header("location:/admin.php");}
 
?>   
<title>Index</title>
</head>
<body class="fondo_azul"> 

<div class="banner">
<strong>Nombre:</strong> root<br />
<strong>Password:</strong> root
</div>
<div class="contenedor">

	<div class="my_entrar_uno">
		<form method="post" class="my_entrar">
		<input type="text" name="nombre" placeholder="Nombre" />
		<input type="password" name="password" placeholder="Password" />
		<input type="submit" value="Entrar" class="my_boton" />
		<?php
		$uno= $_POST["nombre"];
		$dos= $_POST["password"];
		echo "<div class='mensaje'>";
		if($_POST){
			if($uno=="root" and $dos=="root"){
				setcookie("usuarios", $uno, time() + 60*60*24*365); // 86400 = 1 day
				header("location:/admin.php");
			}else{
					
					$sql_com = "SELECT * FROM $usuarios WHERE nombre = '$uno'";
					$result_com = mysqli_query($conn, $sql_com);
					if (mysqli_num_rows($result_com) > 0) {
						// output data of each row
						$row = mysqli_fetch_assoc($result_com);

						if($dos==$row["password"]){
							//setcookie("usuarios", utf8_encode($uno), time() + 60*60*24*365); // 86400 = 1 day
							 $tu_u=$uno;
							header("location: http://bluehealth.mx");
						}else{
						echo "ERROR";
						}

					}else{
						echo " NO EXISTE";
					}
			}
		}
		
		
			
		echo "</div>";
		?>
		</form>
	</div>
</div>


<?php
include("pie.php");
?>