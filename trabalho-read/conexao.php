<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'usbw'; 
    $dbname = 'floricultura';

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if (!$conn) {
        die("Erro na conexão: " . mysqli_connect_error());
    }


    mysqli_set_charset($conn, "utf8");
    ?>