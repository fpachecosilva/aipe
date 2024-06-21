<?php 
	if ( $paginaAtual == 'Agricultura' ) {
		$temaCor = 'verde';
	} elseif ( $paginaAtual == 'Turismo' ) {
		$temaCor = 'rosa';
	}
?>

<section class="criterios">
	<div class="container">
		<p class="subtitulo-generico">Critérios de Seleção</p>
		<div class="criterios-wrapper dflt divs5050">
			<div class="esq dflt">		
				<div class="check dflt">
					<?php include 'assets/img/icons/check.php'; ?>
					<?php if ( $paginaAtual == 'Agricultura' ) { echo '<p>Experiência da organização</p>'; } elseif ( $paginaAtual == 'Turismo' ) { echo '<p>Experiência da organização</p>'; } ?>
				</div>
				<div class="check dflt">
					<?php include 'assets/img/icons/check.php'; ?>
					<?php if ( $paginaAtual == 'Agricultura' ) { echo '<p>Viabilidade do projeto</p>'; } elseif ( $paginaAtual == 'Turismo' ) { echo '<p>Viabilidade do projeto</p>'; } ?>
				</div>
				<div class="check dflt">
					<?php include 'assets/img/icons/check.php'; ?>
					<?php if ( $paginaAtual == 'Agricultura' ) { echo '<p>Impacto do projeto</p>'; } elseif ( $paginaAtual == 'Turismo' ) { echo '<p>Impacto do projeto</p>'; } ?>
				</div>
				<div class="check dflt">
					<?php include 'assets/img/icons/check.php'; ?>
					<?php if ( $paginaAtual == 'Agricultura' ) { echo '<p>Práticas sustentáveis</p>'; } elseif ( $paginaAtual == 'Turismo' ) { echo '<p>Práticas sustentáveis</p>'; } ?>
				</div>
				<div class="check dflt">
					<?php include 'assets/img/icons/check.php'; ?>
					<?php if ( $paginaAtual == 'Agricultura' ) { echo '<p>Atendimento ao público priorizado</p>'; } elseif ( $paginaAtual == 'Turismo' ) { echo '<p>Atendimento ao público priorizado</p>'; } ?>
				</div>
			</div>
			<div class="dir dflt">
				<?php 
					if ( $paginaAtual == 'Agricultura' ) {
						echo '
							<p class="subtitulo-generico">Apoiando a agricultura que beneficia quem produz, quem consome e o meio ambiente</p>
							<img src="' . $images . 'agricultura/agricultura-mulher-2.png" alt="agricultura meio ambiente">
						';
					} elseif ( $paginaAtual == 'Turismo' ) {
						echo '
							<p class="subtitulo-generico">Impulsionando o turismo que transforma realidades</p>
							<img src="' . $images . 'turismo/turismo-pessoas.png" alt="turismo pessoas">
							';
					}
				?>

			</div>
		</div>
	</div>
</section>