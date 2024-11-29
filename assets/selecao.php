<?php 
	if ( $paginaAtual == 'Agricultura' ) {
		$temaCor = 'verde';
	} elseif ( $paginaAtual == 'Turismo' ) {
		$temaCor = 'rosa';
	} elseif ( $paginaAtual == 'Soluções Socioambientais' ) {
		$temaCor = 'padrao';
	}
?>

<section class="selecao">
	<div class="container">
		<div class="box-selecao">
			<div class="wrapper-linhas">				
				<p class="subtitulo-generico">Cronograma</p>
				<p class="subtitulo-espacado">ETAPAS DO PROCESSO</p>

				<div class="wrapper-linhas-dentro">
					<div class="linhavert"></div>
					<div class="linha dflt">
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">1</div>
							</div>
							<div class="textos dfl <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Inscrições'; } elseif ($paginaAtual == 'Turismo') { echo 'Inscrições'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Até 14 de fevereiro de 2025'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo 'de 27 de junho a 02 de outubro de 2024'; } elseif ($paginaAtual == 'Turismo') { echo 'de 27 de junho a 02 de outubro de 2024'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Inscrições'; } ?></div>
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">2</div>
							</div>
							<div class="textos dfl <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Resultado da seleção intermediária'; } elseif ($paginaAtual == 'Turismo') { echo 'Resultado da seleção intermediária'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo '08 de abril de 2025'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo '26 de novembro de 2024'; } elseif ($paginaAtual == 'Turismo') { echo '26 de novembro de 2024'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Resultado da Seleção Intermediária'; } ?></div>
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">3</div>
							</div>
							<div class="textos dfl <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Resultado final: <span class="w500">análise do comitê e divulgação dos resultados</span>'; } elseif ($paginaAtual == 'Turismo') { echo 'Resultado final: <span class="w500">análise do comitê e divulgação dos resultados</span>'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo '03 de julho de 2025'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo '11 de fevereiro de 2025'; } elseif ($paginaAtual == 'Turismo') { echo '11 de fevereiro de 2025'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Resultado final: análise do comitê e divulgação dos resultados'; } ?></div>
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">4</div>
							</div>
							<div class="textos dfl <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Início dos projetos'; } elseif ($paginaAtual == 'Turismo') { echo 'Início dos projetos'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Setembro de 2025'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo 'abril de 2025'; } elseif ($paginaAtual == 'Turismo') { echo 'abril de 2025'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Início dos Projetos'; } ?></div>
							</div>
						</div>
					</div>					
			</div>

			</div>
		</div>
	</div>
</section>