<?php

    // show errors if any
    echo ini_set('display_errors', 1);
    echo ini_set('display_startup_errors', 1);
    echo error_reporting(E_ALL);

    include_once("../connect.inc.php");

    // get the white_id from delete white in script.js
    $id = $_REQUEST['white_id'];
    $image_name = $_REQUEST['image_name'];
    unlink("../extra-images/" . $image_name);

    // Set the DELETE SQL data
	$sql = "DELETE FROM white WHERE id='".$id."'";

	// Process the query so row is deleted from table and db
	if (!$conn->query($sql)) {
        echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close the connection after using it
	$conn->close();