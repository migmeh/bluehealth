<?php
/*
boton para cancelar suscripcion paypal
*/
$sal=setcookie("usuarios", "", time() - 60*60*24*365);

if($sal){
	
	header("location:/");
	
}else{echo "error";}

?>