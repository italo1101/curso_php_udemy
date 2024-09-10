<?php
    session_id('bug4h2mbo2ij4m2ntnmnqdgsqv');
    require_once("config.php");

    session_regenerate_id();

    echo session_id();

    var_dump($_SESSION);
?>