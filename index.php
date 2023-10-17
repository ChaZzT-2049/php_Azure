<?php
    $dbhost = "webintphp-server.mysql.database.azure.com";
    $dbuser = "ypxsdmnyef";
    $dbpassword = "Y5BJJ5XACVJDLZZK$";
    $dbname = "webintphp-database";
    $port = 3306;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $port);
    if (!$conn){
        die("No hay conexión: ".mysqli_connect_error());
    }

    echo "Hello db";
?>