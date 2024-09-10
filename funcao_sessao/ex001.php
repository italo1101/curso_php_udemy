<?php
    require_once("config.php");

    echo session_save_path();

    echo "<br>";

    var_dump(session_status());

    switch(session_status()){
        case PHP_SESSION_DISABLED:
            echo "Desativado";
            break;
        case PHP_SESSION_NONE:
            echo "A sessão foi iniciada mas não foi habilitada";
            break;
        case PHP_SESSION_ACTIVE:
            echo "Ativado";
            break; 
    }
?>