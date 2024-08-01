<?php

session_start();

include 'config.php';



if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'Admin') {

    header("Location: index.php");

    exit;

}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre_usuario = $_POST['nombre_usuario'];

    $correo = $_POST['correo'];

    $password = $_POST['password'];

    $rol = $_POST['rol'];



    $password_hash = password_hash($password, PASSWORD_BCRYPT);



    $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, correo, password, rol) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $nombre_usuario, $correo, $password_hash, $rol);

    

    if ($stmt->execute()) {

        $mensaje = "Usuario creado exitosamente.";

    } else {

        $mensaje = "Error al crear el usuario.";

    }



    $stmt->close();

}

?>



<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Crear Usuario</title>

    <link rel="stylesheet" href="crear.css">

</head>

<body style="background-image: url('./assets/media/fondo.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="form-container">

        <h1>Crear Nuevo Usuario</h1>



        <?php if (isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>



        <form action="crear_usuario.php" method="post">

            <div class="caixa__input">

                <label for="nombre_usuario">Nombre de Usuario:</label>

                <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre de Usuario" required>

            </div>



            <div class="caixa__input">

                <label for="correo">Correo Electr贸nico:</label>

                <input type="email" id="correo" name="correo" placeholder="Correo Electr贸nico" required>

            </div>



            <div class="caixa__input">

                <label for="password">password:</label>

                <input type="password" id="password" name="password" placeholder="password" required>

            </div>



            <div class="caixa__input">

                <label for="rol">Rol:</label>

                <select id="rol" name="rol" required>

                    <option value="Admin">Admin</option>

                    <option value="Supervisor">Supervisor</option>

                    <option value="CFV">CFV</option>

                </select>

            </div>

            <div class="caixa__input">

            <input type="submit" value="Crear Usuario"> </div>

        </form>

    </div>

    <button class="back-button" onclick="window.history.back()">

        <img src="./img/left-arrow.png" alt="Volver atr谩s">

    </button>

</body>

</html>

