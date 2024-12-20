<?php 
	if ( $paginaAtual == 'Agricultura' ) {
		$temaCor = 'verde';
	} elseif ( $paginaAtual == 'Turismo' ) {
		$temaCor = 'rosa';
	} elseif ( $paginaAtual == 'Soluções Socioambientais' ) {
		$temaCor = 'padrao';
	}
?>

<section class="beneficios">
	<div class="container">
		<p class="subtitulo-generico">Como vamos<br> apoiar seu projeto?</p>
		<div class="beneficios-wrapper dflt divs5050">
				<?php if ($paginaAtual == 'Agricultura') {				
						echo '
						<div class="esq dflt">
							<div class="beneficio dflt">
								'; include 'assets/img/icons/moeda.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} 
								echo '">
									Apoio de até R$ 900 mil por projeto
								</p>
							</div>

							<div class="beneficio dflt">
								'; include 'assets/img/icons/lampada.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} 
								echo '">
									Acompanhamento técnico na execução do projeto e prestação de contas
								</p>
							</div>
						</div>

						<div class="dir dflt">
							<div class="beneficio dflt">
								'; include 'assets/img/icons/olho.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} 
								echo '">
									Oficinas temáticas
								</p>
							</div>

							<div class="beneficio dflt">
								'; include 'assets/img/icons/boneco.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} 
								echo '">
									Troca de boas práticas entre os projetos
								</p>
							</div>

						</div>
						';
				} ?>

				<?php if ($paginaAtual == 'Turismo') {				
						echo '
						<div class="esq dflt">
							<div class="beneficio dflt">
								'; include 'assets/img/icons/moeda.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} 
								echo '">
									Apoio de até R$ 500 mil por projeto
								</p>
							</div>

							<div class="beneficio dflt">
								'; include 'assets/img/icons/lampada.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} 
								echo '">
									Acompanhamento técnico na execução do projeto e prestação de contas
								</p>
							</div>
						</div>

						<div class="dir dflt">
							<div class="beneficio dflt">
								'; include 'assets/img/icons/olho.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} 
								echo '">
									Oficinas temáticas
								</p>
							</div>

							<div class="beneficio dflt">
								'; include 'assets/img/icons/boneco.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} 
								echo '">
									Troca de boas práticas entre os projetos
								</p>
							</div>

						</div>
						';
				} ?>

				<?php if ($paginaAtual == 'Soluções Socioambientais') {
						echo '
						<div class="esq dflt">
							<div class="beneficio dflt">
								'; include 'assets/img/icons/lampada.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} elseif ($temaCor == 'padrao') { 
									echo 'txtpadrao'; 
								} 
								echo '">
									Apoio de até XXX mil reais por projeto.
								</p>
							</div>

							<div class="beneficio dflt">
								'; include 'assets/img/icons/ampulheta.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} elseif ($temaCor == 'padrao') { 
									echo 'txtpadrao'; 
								} 
								echo '">
									Troca de boas práticas entre os projetos.
								</p>
							</div>
						</div>

						<div class="dir dflt">
							<div class="beneficio dflt">
								'; include 'assets/img/icons/olho-laranjav2.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} elseif ($temaCor == 'padrao') { 
									echo 'txtpadrao'; 
								} 
								echo '">
									Oficinas temáticas com especialistas.
								</p>
							</div>

							<div class="beneficio dflt">
								'; include 'assets/img/icons/check-laranjav2.php'; echo '
								<p class="beneficios-txt '; 
								if ($temaCor == 'verde') { 
									echo 'txtverde'; 
								} elseif ($temaCor == 'rosa') { 
									echo 'txtrosa'; 
								} elseif ($temaCor == 'padrao') { 
									echo 'txtpadrao'; 
								} 
								echo '">
									Assessoria no monitoramento e prestação de contas.
								</p>
							</div>

						</div>
						';
				} ?>
			</div>
		</div>
	</div>
</section>