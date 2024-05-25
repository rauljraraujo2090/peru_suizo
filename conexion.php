<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$port = '5432';
$dbname = 'nombre_basedatos';
$user = 'usuario';
$password = 'contraseña';

try {
    // Intentar conectar
    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
    
    // Verificar la conexión
    if (!$conn) {
        throw new Exception("Error de conexión: " . pg_last_error());
    }
    
    echo "Conexión exitosa\n";
    
    // Realizar una consulta
    $query = "SELECT * FROM tabla";
    $result = pg_query($conn, $query);
    
    if (!$result) {
        throw new Exception("Error en la consulta");
    }
    
    // Procesar los resultados
    while ($row = pg_fetch_assoc($result)) {
        echo "Nombre: " . $row['nombre'] . " - Edad: " . $row['edad'] . "<br>";
    }
    
    // Liberar el resultado y cerrar la conexión
    pg_free_result($result);
    pg_close($conn);
} catch (Exception $e) {
    // Manejar la excepción
    echo "Error: " . $e->getMessage();
}
?>
