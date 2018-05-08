<?php 
	
 $usuario=$_POST['usuario'];
 $clave=$_POST['clave'];

 $conexion=mysqli_connect("localhost", "root", "", "baseuser");
 $consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
 $resultado=mysqli_query($conexion,$consulta);

 $filas=mysqli_num_rows($resultado);

 if($filas>0){
 	session_start();
 	$_SESSION['usuario'] = $usuario;
 	header("location:panel.php");
 }else{
 	echo "Error en la autentificacion";
 }
 mysqli_free_result($resultado);
 mysql_close($conexion);

 

