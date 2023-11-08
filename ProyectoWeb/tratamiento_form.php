<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basedatos = "sistemas";

// Crear la conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $password, $basedatos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recoger los datos del formulario
$primerNombre = $_POST['nom'];
$segundoNombre = $_POST['nom2'];
$primerApellido = $_POST['apel'];
$segundoApellido = $_POST['apel2'];
$dni = $_POST['dni'];
$correo = $_POST['corr'];
$numCelular = $_POST['numC'];
$estadoCivil = $_POST['Estado'];
$tipoMensaje = $_POST['Mensaje']; 
$comentario = $_POST['Comentario'];

// Query para insertar en la tabla (reemplaza 'nombre_tabla' por el nombre de tu tabla en la base de datos)
$sql = "INSERT INTO formulario_contacto (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, dni, 
correo, num_celular, estado_civil, tipo_mensaje, comentario) VALUES ('$primerNombre', 
'$segundoNombre', '$primerApellido', '$segundoApellido', '$dni', '$correo', '$numCelular', 
'$estadoCivil', '$tipoMensaje', '$comentario')";

if ($conexion->query($sql) === TRUE) {   
} else {
    echo "Error al insertar datos: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();

header("Location: contactenos.html");
exit;

?>