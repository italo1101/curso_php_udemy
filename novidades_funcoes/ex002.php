<?php
    function soma(float ...$valores):float{
        return array_sum($valores);
    }

    echo var_dump(soma(2.2,4.1));
?>