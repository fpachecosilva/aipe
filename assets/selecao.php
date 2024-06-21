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
				<p class="subtitulo-espacado">INSCRIÇÕES: 25 DE JUNHO<br class="mob"> A 30 DE AGOSTO DE 2024</p>

				<div class="wrapper-linhas-dentro">	
					<div class="linhavert"></div>
					<div class="linha dflt">
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">1</div>
							</div>
							<div class="textos dflt <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Seleção preliminar'; } elseif ($paginaAtual == 'Turismo') { echo 'Seleção preliminar'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo 'De XX a XX a XX de XX de 2024'; } elseif ($paginaAtual == 'Turismo') { echo 'De XX a XX a XX de XX de 2024'; } ?></div>
								<div class="linha-texto"><?php if ($paginaAtual == 'Agricultura') { echo 'Análise do material enviado na inscrição de acordo com os critérios e seleção de organizações elegíveis.'; } elseif ($paginaAtual == 'Turismo') { echo 'Análise do material enviado na inscrição de acordo com os critérios e seleção de organizações elegíveis.'; } ?></div>
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">2</div>
							</div>
							<div class="textos dflt <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Seleção intermediaria'; } elseif ($paginaAtual == 'Turismo') { echo 'Seleção intermediaria'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo 'De XX de XX a 16 de setembro de 2024'; } elseif ($paginaAtual == 'Turismo') { echo 'De XX de XX a 16 de setembro de 2024'; } ?></div>
								<div class="linha-texto"><?php if ($paginaAtual == 'Agricultura') { echo 'Análise detalhada dos formulários.'; } elseif ($paginaAtual == 'Turismo') { echo 'Análise detalhada dos formulários.'; } ?></div>
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">3</div>
							</div>
							<div class="textos dflt <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Revisão dos pareceres'; } elseif ($paginaAtual == 'Turismo') { echo 'Revisão dos pareceres'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo 'De XX a XX a XX de XX de 2024'; } elseif ($paginaAtual == 'Turismo') { echo 'De XX a XX a XX de XX de 2024'; } ?></div>
								<div class="linha-texto"><?php if ($paginaAtual == 'Agricultura') { echo 'Organizações priorizadas passarão por uma entrevista online com especialistas.'; } elseif ($paginaAtual == 'Turismo') { echo 'Organizações priorizadas passarão por uma entrevista online com especialistas.'; } ?></div>
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">4</div>
							</div>
							<div class="textos dflt <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Avaliação final do comitê'; } elseif ($paginaAtual == 'Turismo') { echo 'Avaliação final do comitê'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo 'De XX a XX a XX de XX de 2024'; } elseif ($paginaAtual == 'Turismo') { echo 'De XX a XX a XX de XX de 2024'; } ?></div>
								<div class="linha-texto"><?php if ($paginaAtual == 'Agricultura') { echo 'O comitê avaliador da AIPÊ analisará os pareceres finais e realizará a seleção dos projetos que serão apoiados.'; } elseif ($paginaAtual == 'Turismo') { echo 'O comitê avaliador da AIPÊ analisará os pareceres finais e realizará a seleção dos projetos que serão apoiados.'; } ?></div>
							</div>
						</div>
					</div>
					
					<div class="linha dflt">						
						<div class="linha-wrapper dflt">
							<div class="bolinha-numero">
								<div class="linha-numero">5</div>
							</div>
							<div class="textos dflt <?php if ($temaCor == 'verde') { echo 'linhaverde'; } elseif ($temaCor == 'rosa') { echo 'linharosa'; } elseif ($temaCor == 'azul') { echo 'linhaazul'; } elseif ($temaCor == 'padrao') { echo 'linhapadrao'; } ?>">
								<div class="linha-titulo"><?php if ($paginaAtual == 'Agricultura') { echo 'Divulgação dos selecionados'; } elseif ($paginaAtual == 'Turismo') { echo 'Divulgação dos selecionados'; } ?></div>
								<div class="linha-secundaria"><?php if ($paginaAtual == 'Agricultura') { echo '12 de novembro de 2024'; } elseif ($paginaAtual == 'Turismo') { echo '12 de novembro de 2024'; } ?></div>	
								
							</div>
						</div>
					</div>
					
			</div>

			</div>
		</div>
	</div>
</section>