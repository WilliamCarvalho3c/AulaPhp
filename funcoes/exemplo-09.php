	<?php
//funcoes recursivas
			$hierarquia = array(
				array(
				'nome_cargo'=> 'CEO',
				'subordinado'=>array(
					//inicio: Diretor comercial
					array(
						'nome_cargo'=> 'Diretor Comercial',
						'subordinado'=>array(
							//inicio gerente de vendas
							array(
							'nome_cargo'=> 'Gerente de Vendas'
						)
						//termino gerente de vendas
						)	
					),
					//termino: Diretor comercial
					//inicio diretor financeiro
					array(
						'nome_cargo'=> 'Diretor Financeiro',
						'subordinado'=>array(
						//inicio gerente de contas a pagar
							array(
							'nome_cargo'=> 'Gerente de Contas a pagar',
							'subordinado'=>array(
						//inicio do supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
						//fim de supervisor de pagamentos
							)
						),
						//termino de gerente de contas a pagar
						//inicio: Gerente de compras
							array(
								'nome_cargo'=> 'Gerente de compras',
								'subordinado'=>array(
						//inicio supervisor de suprimentos
							array(
								'nome_cargo'=> 'Supervisor de suprimentos',
								'subordinado'=>array(
									array(
										'nome_cargo'=> 'Funcionario'
									)
								)
							)
							//termino de supervisor de suprimentos
							)
						)
						//termino gerente de compras
									)
				//termino diretor financeiro
				)
			)
		)
	);

function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {

		$html .= "<li>";
		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinado']) && count($cargo['subordinado']) > 0 ){

		$html .= exibe($cargo['subordinado']);


		}

		$html .= "</li>";

	}

	$html .='</ul>';

	return $html;

}

echo exibe($hierarquia);

?>
