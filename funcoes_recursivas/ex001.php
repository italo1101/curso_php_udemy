<?php
    $hierarquia = array(
        array(
            'nome_cargo' => 'CEO',
            'subordinados' => array(
                // Inicio: Diretor comercial
                array(
                    'nome_cargo' => 'Diretor Comercial'
                    'subordinados' => array(
                        array(
                            'nome_cargo' => 'gerente de Vendas'
                        )
                    )
                ),

                array()
            )
        )
    );
?>