<?php

session_start();




// Conectarse a la base de datos
include('config/conexion.php');
// Consultar los productos de la categoría seleccionada
$sql = "SELECT idIncidencia FROM incidencias ORDER BY `incidencias`.`idIncidencia` ASC";
//$sql = "SELECT * FROM curso WHERE aula = 5";

$result = mysqli_query($conn, $sql);

// Generar la tabla de productos
echo " <option>Selecciona Incidencia</option>";
while ($row = mysqli_fetch_object($result)) {

?>
   
    <option value="<?php echo $row->idIncidencia ?>"> <?php echo $row->idIncidencia ?> </option>
<?php
}
