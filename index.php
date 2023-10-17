<?php

    $servername = "webintphp-server.mysql.database.azure.com";
    $username = "ypxsdmnyef";
    $password = "Y5BJJ5XACVJDLZZK$";
    $database = "webintphp-database";

    // Crear una conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE tareas (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        descripcion VARCHAR(100) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla: " . $conn->error;
    }

    $conn->close();

    echo "Hello db";
?>