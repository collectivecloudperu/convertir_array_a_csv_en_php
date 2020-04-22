<?php 
   
	// Recibimos los datos del formulario 
	$datos = array( 
	    $_POST['nombre'], 
	    $_POST['precio'], 
	    $_POST['stock'] 
	); 
	  
	// Creamos y abrimos un archivo con el nombre 'archivo.csv' para escribir los datos que recibimos del formulario  
	$fp = fopen('archivo.csv', 'a'); 
	  
	// Escribimos los datos en el archivo 'archivo.csv' 
	fputcsv($fp, $datos); 
	  
	// Después de terminar de escribir los datos, cerramos el archivo 'archivo.csv' 
	fclose($fp); 

	// Redireccionamos a la página del formulario, le pasamos el estado en 1 
	header('Location: index.php?estado=1');
	exit();

?>