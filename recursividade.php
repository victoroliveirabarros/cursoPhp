<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //inicio: Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //Término: Gerente de Vendas
                )
            ),
            //Término: Diretor Comercial
            //inicio: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //inicio: Gerente de Contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a pagar',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Termino: Supervisor de Pagamentos
                        )
                    ),
                    //Término: Gerente de Contas a pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo'=> 'Supervisor de Suprimentos'
                            )
                            //Inicio: Supervisor de Suprimentos

                        )
                    )
                    //Termino: Gerente de Compras
                )
            )
            //Término: Diretor Financeiro
        )
    )
);

function exibe($cargos){

   $html = "<ul>";
   
   foreach($cargos as $cargo){
      $html .="<li>";
      
      $html .= $cargo['nome_cargo'];

      if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html.= exibe($cargo['subordinados']);
      }

      $html .= "</li>";
   } 

   $html .= "</ul>";

   return $html;

}

echo exibe($hierarquia);


?>