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
                if (password_verify($password, $db_password)) {
                    $_SESSION['rol'] = $db_rol;
                    $_SESSION['acceso_permitido'] = true; 

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

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

        <meta http-equiv="Pragma" content="no-cache">

        <meta http-equiv="Expires" content="0">

        <title>Login</title>

        <link href="theme.css" rel="stylesheet">
    </head>
    <body id="main">
        <img class="client-logo" src="assets/media/logo-exer.png">    

        <div class="login">
            <h1>Login</h1>
            <form id="loginForm" method="post" action="index.php">
                <div class="caixa__input">
                    <input type="text" name="nombre_usuario" placeholder="Usuario" required>
                </div>
                <div class="caixa__input">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="caixa__input">
                    <input type="submit" value="Iniciar Sesion">
                </div>
                <?php if (isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                    <p style="color: red;">Usuario o contraseña incorrectos.</p>
                <?php endif; ?>
            </form>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="script.js" defer></script>
    <script src="theme.js" type="text/javascript"></script>
</html>