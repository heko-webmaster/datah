<?php
session_start();
$allowed_roles = ['Admin', 'Supervisor', 'CFV'];

if (!in_array($_SESSION['rol'], $allowed_roles)) {
    header("Location: inicio.php");
    exit;
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="theme.css" rel="stylesheet">
        <link rel="stylesheet" href="./estilos.css">

        <title>Tablero Full Tech Logistic</title>
    </head>

    <body id="home">
            <img src="./img/Logo.png" alt="Logo" class="logo">    

    <div id="home-options">
    <?php if ($_SESSION['rol'] == 'Admin' || $_SESSION['rol'] == 'Supervisor'): ?>
        <a href="balanced-scorecard.php"><img src="assets/media/Icono-balance.png"><p>Balanced Scorecard</p></a>
        <a href="profit-lost.php"><img src="assets/media/Icono-profit-lost.png"><p>Profit & Lost</p></a>
    <?php endif; ?>

    <?php if ($_SESSION['rol'] == 'Admin' || $_SESSION['rol'] == 'CFV'): ?>
        <a href="control-tower.php"><img src="assets/media/Icono-control-tower.png"><p>Control Tower</p></a>
    <?php endif; ?>
</div>
    <form id="logout-form" action="logout.php" method="POST">
        <button type="submit" class="btn-logout">
        <img src="./img/logout.png" alt="Cerrar sesión">
    </button>
    </form>
<?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'Admin'): ?>
        <form action="crear_usuario.php" method="get" class="form-crear-usuario">
            <button class="boton-imagen" type="submit">
                <img src="./img/user.png" alt="Crear Usuario">
            </button>
        </form>
    <?php endif; ?>
    </body>
</html>