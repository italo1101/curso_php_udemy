<?php
    $email = $_POST["inputEmail"];

    var_dump($_POST);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "www.google.com/recaptcha/api/verify");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt
?>