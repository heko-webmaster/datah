<?php
session_start();
include 'config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (isset($_SESSION['rol'])) {
    if (in_array($_SESSION['rol'], ['Admin', 'Supervisor', 'CFV'])) {
        header("Location: inicio.php");
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = isset($_POST['nombre_usuario']) ? $_POST['nombre_usuario'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!empty($nombre_usuario) && !empty($password)) {
        $stmt = $conn->prepare("SELECT nombre_usuario, password, rol FROM usuarios WHERE nombre_usuario = ?");
        if (!$stmt) {
            die("Error en la preparación: " . $conn->error);
        }
        $stmt->bind_param("s", $nombre_usuario);
        $stmt->execute();
        $stmt->bind_result($db_nombre_usuario, $db_password, $db_rol);
        
        if ($stmt->fetch()) {
            if ($password == $db_password) {
                $_SESSION['rol'] = $db_rol;

                if (in_array($db_rol, ['Admin', 'Supervisor', 'CFV'])) {
                    header("Location: inicio.php");
                    exit;
                }
            }
        }
        $stmt->close();
    }
    
    header("Location: index.php?error=true");
    exit;
}
?>
