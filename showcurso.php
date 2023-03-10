<?php
session_start();


// Conectarse a la base de datos
include('config/conexion.php');
$curso = $_POST['aula'];

// Consultar los productos de la categoría seleccionada
$sql = "SELECT * FROM curso WHERE aula = $curso";
//$sql = "SELECT * FROM curso WHERE aula = 5";

$result = mysqli_query($conn, $sql);

// Generar la tabla de productos

while ($row = mysqli_fetch_object($result)) {

?>
    <option value="<?php echo $row->idCurso ?>"> <?php echo $row->nombreCurso ?> </option>
<?php
}
