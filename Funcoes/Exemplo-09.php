<?php 			// Função recursiva
$hierarquia = array(
	// Início: CEO
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			// Início: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					// Início: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					// Término: Gerente de Vendas	
				)
			),
			// Término: Diretor Comercial
			// Início: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					// Início: Gerente de Contas
					array(
						'nome_cargo'=>'Gerente de Contas',
						'subordinados'=>array(
							// Início: Supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor de pagamentos'
							)
							// Término: Supervisor de pagamentos
						)
					),
					// Término: Gerente de Contas
					// Início: Gerente de compras
					array(
						'nome_cargo'=>'Gerente de compras',
						'subordinado'=>array(
							// Início: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos'
							)
							// Término: Supervisor de Suprimentos
						)
					)
					// Término: Gerente de compras
				)
			)
			// Término: Diretor Financeiro
		)
	)
	// Término: CEO
);

function exibe($cargos){	// Treeview
	$html = '<ul>';			// tag html para listas desordenadas
	
	foreach ($cargos as $cargo) {
		$html.="<li>";
		$html.=$cargo['nome_cargo'];

		// Verificando se há subordinados no cargo e conta os elementos (maior que zero)
		if (isset($cargo['subordinados']) && count($cargo['subordinados'])>0) {
			$html.=exibe($cargo['subordinados']);
		}

		$html.="</li>";
	}
	
	$html.= '</ul>';
	return $html;
}

echo exibe($hierarquia);
 ?>