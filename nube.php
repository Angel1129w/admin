<?php
$host = "localhost"; 
$user = "id22033154_angel1129"; 
$pass = "M423i32R4*";
$dbname = "id22033154_angel";

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $ID = $_POST["ID"];
    $nombre = $_POST["Nombre"];
    $edad = $_POST["Edad"];

    $sql = "INSERT INTO nube (id, nombre, edad) VALUES (:id, :nombre, :edad)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $ID, PDO::PARAM_INT);
    $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $stmt->bindParam(':edad', $edad, PDO::PARAM_INT);
    $stmt->execute();

    echo "Inserción exitosa!";

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
