<?php 
	if ( $paginaAtual == 'Agricultura' ) {
		$temaCor = 'verde';
	} elseif ( $paginaAtual == 'Turismo' ) {
		$temaCor = 'rosa';
	}	elseif ( $paginaAtual == 'Soluções Socioambientais' ) {
		$temaCor = 'padrao';
	}
?>

<section class="processos">
	<div class="container">
		<p class="subtitulo-generico">Processo seletivo</p>
		<p class="subtitulo-espacado">DOCUMENTOS PARA INSCRIÇÃO</p>
		<div class="processos-wrapper dflt divs5050">
			<div class="esq dflt">
				
				<div class="processo dflt <?php if ($temaCor == 'verde') { echo 'bglightverde'; } elseif ($temaCor == 'rosa') { echo 'bglightrosa'; } elseif ($temaCor == 'azul') { echo 'bglightazul'; } elseif ($temaCor == 'padrao') { echo 'bglightpadrao'; } ?> ">
					<?php	if ($paginaAtual == 'Soluções Socioambientais') { include 'assets/img/icons/arquivo-laranjav2.php'; } else { include 'assets/img/icons/arquivo.php'; } ?>
					
					<div class="wrapper-txts dflt">
						<p class="processos-txt <?php if ($temaCor == 'verde') { echo 'txtverde'; } elseif ($temaCor == 'rosa') { echo 'txtrosa'; } elseif ($temaCor == 'azul') { echo 'txtazul'; } elseif ($temaCor == 'padrao') { echo 'txtpadrao'; } ?>">
							<?php if ($paginaAtual == 'Agricultura') { echo 'Formulário'; } elseif ($paginaAtual == 'Turismo') { echo 'Formulário'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Questionário'; } ?>
						</p>
						<p class="texto-generico">
							<?php if ($paginaAtual == 'Agricultura') { echo 'Detalhe informações sobre seu projeto e sua organização. Para iniciar esta etapa você precisará de um e-mail Google*.<p class="txtmenor">*Veja o Roteiro de Inscrição e Dúvidas Frequentes para saber mais.</p>'; } elseif ($paginaAtual == 'Turismo') { echo 'Detalhe informações sobre seu projeto e sua organização. Para iniciar esta etapa você precisará de um e-mail Google*.<p class="txtmenor">*Veja o Roteiro de Inscrição e Dúvidas Frequentes para saber mais.</p>'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Responda perguntas abertas e fechadas sobre seu projeto e sua organização.'; } ?>
						</p>
					</div>
				</div>

				<div class="processo dflt <?php if ($temaCor == 'verde') { echo 'bglightverde'; } elseif ($temaCor == 'rosa') { echo 'bglightrosa'; } elseif ($temaCor == 'azul') { echo 'bglightazul'; } elseif ($temaCor == 'padrao') { echo 'bglightpadrao'; } ?> ">
					<?php	if ($paginaAtual == 'Soluções Socioambientais') { include 'assets/img/icons/pasta-laranjav2.php'; } else { include 'assets/img/icons/pasta.php'; } ?>
					
					<div class="wrapper-txts dflt">
						<p class="processos-txt <?php if ($temaCor == 'verde') { echo 'txtverde'; } elseif ($temaCor == 'rosa') { echo 'txtrosa'; } elseif ($temaCor == 'azul') { echo 'txtazul'; } elseif ($temaCor == 'padrao') { echo 'txtpadrao'; } ?>">
							<?php if ($paginaAtual == 'Agricultura') { echo 'Documentação e evidências'; } elseif ($paginaAtual == 'Turismo') { echo 'Documentação e evidências'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Documentação'; } ?>
						</p>
						<p class="texto-generico">
							<?php if ($paginaAtual == 'Agricultura') { echo 'Compartilhe comprovações da atuação sustentável e responsável.'; } elseif ($paginaAtual == 'Turismo') { echo 'Compartilhe comprovações da atuação sustentável e responsável.'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Compartilhe comprovações da atuação sustentável e responsável. Clique aqui e confira quais são esses documentos.'; } ?>
						</p>
					</div>
				</div>

			</div>
			<div class="dir dflt">
				
				<div class="processo dflt <?php if ($temaCor == 'verde') { echo 'bglightverde'; } elseif ($temaCor == 'rosa') { echo 'bglightrosa'; } elseif ($temaCor == 'azul') { echo 'bglightazul'; } elseif ($temaCor == 'padrao') { echo 'bglightpadrao'; } ?> ">
					<?php	if ($paginaAtual == 'Soluções Socioambientais') { include 'assets/img/icons/video-laranjav2.php'; } else { include 'assets/img/icons/video.php'; } ?>	

					<div class="wrapper-txts dflt">
						<p class="processos-txt <?php if ($temaCor == 'verde') { echo 'txtverde'; } elseif ($temaCor == 'rosa') { echo 'txtrosa'; } elseif ($temaCor == 'azul') { echo 'txtazul'; } elseif ($temaCor == 'padrao') { echo 'txtpadrao'; } ?>">
							<?php if ($paginaAtual == 'Agricultura') { echo 'Vídeo'; } elseif ($paginaAtual == 'Turismo') { echo 'Vídeo'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Vídeo'; } ?>
						</p>
						<p class="texto-generico">
							<?php if ($paginaAtual == 'Agricultura') { echo 'Envie  um vídeo de até 5 minutos apresentando a proposta na prática e sua importância para a comunidade e o meio ambiente.'; } elseif ($paginaAtual == 'Turismo') { echo 'Envie  um vídeo de até 5 minutos apresentando a proposta na prática e sua importância para a comunidade e o meio ambiente.'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Envie um vídeo de até 5 min. apresentando a proposta na prática e sua importância para a comunidade e o meio ambiente.'; } ?>
						</p>
					</div>
				</div>

				<div class="processo dflt <?php if ($temaCor == 'verde') { echo 'bglightverde'; } elseif ($temaCor == 'rosa') { echo 'bglightrosa'; } elseif ($temaCor == 'azul') { echo 'bglightazul'; } elseif ($temaCor == 'padrao') { echo 'bglightpadrao'; } ?> ">
					<?php	if ($paginaAtual == 'Soluções Socioambientais') { include 'assets/img/icons/cronograma-laranjav2.php'; } else { include 'assets/img/icons/cronograma.php'; } ?>	
				
					<div class="wrapper-txts dflt">
						<p class="processos-txt <?php if ($temaCor == 'verde') { echo 'txtverde'; } elseif ($temaCor == 'rosa') { echo 'txtrosa'; } elseif ($temaCor == 'azul') { echo 'txtazul'; } elseif ($temaCor == 'padrao') { echo 'txtpadrao'; } ?>">
							<?php if ($paginaAtual == 'Agricultura') { echo 'Planejamento'; } elseif ($paginaAtual == 'Turismo') { echo 'Planejamento'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Cronograma'; } ?>
						</p>
						<p class="texto-generico">
							<?php if ($paginaAtual == 'Agricultura') { echo 'Apresente um planejamento físico-financeiro com todas as atividades previstas e os recursos necessários (de acordo com modelo disponível em “Apoio para inscrição”).'; } elseif ($paginaAtual == 'Turismo') { echo 'Apresente um planejamento físico-financeiro com todas as atividades previstas e os recursos necessários (de acordo com modelo disponível em “Apoio para inscrição”).'; } elseif ($paginaAtual == 'Soluções Socioambientais') { echo 'Apresente um planejamento físico-financeiro com todas as atividades previstas e os recursos necessários.'; } ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>