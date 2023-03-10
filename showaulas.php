<?php

session_start();




// Conectarse a la base de datos
include ('config/conexion.php');

// Consultar los productos de la categoría seleccionada
$sql = "SELECT * FROM aulas ";
$result = mysqli_query($conn, $sql);

// Generar la tabla de productos

while ($row = mysqli_fetch_object($result)) {

?>
    <option value="<?php echo $row->idAula?>"> <?php echo $row->nombreAula?> </option>
<?php 
}
