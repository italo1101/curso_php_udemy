<?php
    $conn = new mysqli("localhost", "root", "", "db_php");

    if ($conn->connect_error){
        echo "Error: " . $conn->connect_error;
    }

    $result = $conn->query("SELECT * FROM tbusuarios ORDER BY deslogin");

    $data = array();

    while($row = $result->fetch_assoc()){
        array_push($data, $row);
    }

    echo json_encode($data);
?>