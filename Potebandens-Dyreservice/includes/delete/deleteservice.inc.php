<?php

    // show errors if any
    echo ini_set('display_errors', 1);
    echo ini_set('display_startup_errors', 1);
    echo error_reporting(E_ALL);

    include_once("../connect.inc.php");

    // get the service_id from deleteService() function in script.js
    $id = $_REQUEST['service_id'];

    // Set the DELETE SQL data
	$sql = "DELETE FROM services WHERE id='".$id."'";

	// Process the query so row is deleted from table and db
	if (!$conn->query($sql)) {
        echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close the connection after using it
	$conn->close();