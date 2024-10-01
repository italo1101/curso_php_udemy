<?php

    try {
        $total = 100 / 0;
    } catch (DivisionByZeroError $e) {
        echo json_encode(array(
            'code' => $e->getCode(),
            'message' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine()
        ));

        exit;
    }
?>
