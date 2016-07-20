<!DOCTYPE html>
<html lang="es">
<head>
	<title>Envio&iacute;o de datos por GET y Post</title>
	<meta charset="utef-8"/>
</head>
<body>
	<hgroup>
		<h1>Formulario enviado por el m&eacute;todo GET</h1>
	</hgroup>
	<form name="envia-get_frm" action="enviar-datos.php" method="get" enctype="application/x-www-form-urlencoded"> 
		<label>Ingresa tu Nombre:</label>
		<input type="text" name="nombre_txt"/>
		<br/> <br/>
		<label>Ingresa tu Password:</label>
		<input type="password" name="password_txt"/>
		<br/> <br/>
		<input type="submit"  name="enviar_btn" value="Envia-GET"/>
	</form>
	<form name="envia-post_frm" action="enviar-datos.php" method="post" enctype="application/x-www-form-urlencoded"> 
		<label>Ingresa tu Nombre:</label>
		<input type="text" name="nombre_txt"/>
		<br/> <br/>
		<label>Ingresa tu Password:</label>
		<input type="password" name="password_txt"/>
		<br/> <br/>
		<input type="submit"  name="enviar_btn" value="Envia-POST"/>
	</form>

</body>
<html>