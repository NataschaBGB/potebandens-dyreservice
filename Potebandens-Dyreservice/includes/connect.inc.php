<?php 
    // servername (localhost)
    $serverName = "localhost";
    // database name (phpMyAdmin)
    $dbName = "potebandens_dyreservice_db";
    // database username (always root)
    $dbusername = "root";
    // database password (normally empty)
    $dbpassword = "";

    // create connection to server
    $conn = new mysqli($serverName, $dbusername, $dbpassword, $dbName);

    // if connection failed - show error code
    if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }