<?php
    $hierarquia = array(
        array(
            'nome_cargo' => 'CEO',
            'subordinados' => array(
                // Inicio: Diretor comercial
                array(
                    'nome_cargo' => 'Diretor Comercial',
                    'subordinados' => array(
                        // Inicio: Gerente de Vendas
                        array(
                            'nome_cargo' => 'gerente de Vendas'
                        )
                    )
                ),
                // Inicio: Diretor Financeiro
                array(
                    'nome_cargo' => 'Diretor Financeiro',
                    'Subordinados' => array(
                        // Inicio gerente de Contas
                        'nome_cargo' => 'Gerente de contas',
                    )
                )
            )
        )
    );

    function exibe($cargos){
        $html = '<ul>';
            foreach($cargos as $cargo){
                $html .= "<li>";

                $html .= $cargo['nome_cargo'];

                if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                    $html .= exibe($cargo['subordinados']);
                }

                $html .= "</li>";
            }
        $html .= "</ul>";

        return $html;

    }

    echo exibe($hierarquia);
?>