<?php 
	if ( $paginaAtual == 'Agricultura' ) {
		$temaCor = 'verde';
	} elseif ( $paginaAtual == 'Turismo' ) {
		$temaCor = 'rosa';
	}
?>

<section class="selecao">
	<div class="container">
		<div class="box-selecao">
			<div class="wrapper-linhas">				
				<p class="subtitulo-generico">Cronograma e Etapas<br class="mob"> do Processo</p>
				<p class="subtitulo-espacado">INSCRIÇÕES: 27 DE JUNHO<br class="mob"> A 09 DE SETEMBRO DE 2024</p>

				<div class="wrapper-linhas-dentro">
					<div class="linhavert"></div>
					<div class="linha dflt">
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">1</div>
							</div>
							<div class="textos dflt <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Inscrições'; } elseif ($paginaAtual == 'Turismo') { echo 'Inscrições'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo 'de 27 de junho a 09 de setembro de 2024'; } elseif ($paginaAtual == 'Turismo') { echo 'de 27 de junho a 09 de setembro de 2024'; } ?></div>
								<!-- <div class="linha-texto"><?php if ($paginaAtual == 'Agricultura') { echo 'de 27 de junho a 21 de agosto de 2024'; } elseif ($paginaAtual == 'Turismo') { echo 'de 27 de junho a 21 de agosto de 2024'; } ?></div> -->
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">2</div>
							</div>
							<div class="textos dflt <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Resultado da seleção intermediária'; } elseif ($paginaAtual == 'Turismo') { echo 'Resultado da seleção intermediária'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo '31 de outubro de 2024'; } elseif ($paginaAtual == 'Turismo') { echo '31 de outubro de 2024'; } ?></div>
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">3</div>
							</div>
							<div class="textos dflt <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Resultado final: <span class="w500">análise do comitê e divulgação dos resultados</span>'; } elseif ($paginaAtual == 'Turismo') { echo 'Resultado final: <span class="w500">análise do comitê e divulgação dos resultados</span>'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo '10 de janeiro de 2025'; } elseif ($paginaAtual == 'Turismo') { echo '10 de janeiro de 2025'; } ?></div>
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">4</div>
							</div>
							<div class="textos dflt <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Início dos projetos'; } elseif ($paginaAtual == 'Turismo') { echo 'Início dos projetos'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo 'março de 2025'; } elseif ($paginaAtual == 'Turismo') { echo 'março de 2025'; } ?></div>
							</div>
						</div>
					</div>					
			</div>

			</div>
		</div>
	</div>
</section>