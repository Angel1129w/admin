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

    $sql = "DELETE FROM nube WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $ID, PDO::PARAM_INT);
    $stmt->execute();

    echo "Usuario eliminado correctamente.";

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
