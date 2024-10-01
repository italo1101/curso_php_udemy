<?php
    $conn = new PDO(
        "mysql:dbname=db_php;host=localhost","root",""
    );

    $stmt = $conn->prepare("SELECT * FROM tbusuarios ORDER BY deslogin");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($results as $row){
        foreach($row as $key => $value){
            echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
        }

        echo "--------------------------------------------- <br/>";
    }

?>