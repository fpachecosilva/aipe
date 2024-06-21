<?php 
	if ( $paginaAtual == 'Agricultura' ) {
		$temaCor = 'verde';
	} elseif ( $paginaAtual == 'Turismo' ) {
		$temaCor = 'rosa';
	} elseif ( $paginaAtual == 'Chamadas' ) {
		$temaCor = 'padrao';
	}
?>

<section class="oquee" id="oquee">
	<div class="container dflt divs5050 gap60">
		<div class="wrapper-txts-oquee">
			<?php if ( $paginaAtual == 'Agricultura' ) { 
					echo '
						<div class="bloco">
							<p class="subtitulo-generico">Qual o objetivo da chamada?</p>
							<p class="texto-generico">Aumentar a renda de produtores rurais de baixa renda por meio do fortalecimento de seus processos produtivos e apoio no desenvolvimento de práticas de agricultura sustentável, contribuindo para o aumento da resiliência e sustentabilidade de sistemas agrícolas.</p>
						</div>
						<div class="bloco">
							<p class="subtitulo-generico">Quem pode participar?</p>
							<p class="texto-generico">Associações ou cooperativas rurais que já adotem práticas ou tenham iniciado a transição para a agricultura sustentável e com CNPJ ativo há 2 anos, pelo menos. Serão priorizadas organizações lideradas ou formadas por mulheres, pessoas negras, indígenas, comunidades tradicionais e juventude rural.</p>
						</div>
						<div class="bloco">
							<p class="subtitulo-generico">Como participar?</p>
							<p class="texto-generico">As organizações interessadas devem inscrever seus projetos e enviar a documentação pedida até o dia XX/XX, pelo site da AIPÊ.</p>
						</div>
					';
				} 
				elseif ( $paginaAtual == 'Turismo' ) { 
					echo '
						<div class="bloco">
							<p class="subtitulo-generico">Qual o objetivo da chamada?</p>
							<p class="texto-generico">Incrementar a renda de comunidades que atuam em ações de promoção de turismo sustentável (urbano ou rural) por meio da articulação de atividades e negócios que preservem seus territórios e valorizem a cultura e patrimônio histórico local.</p>
						</div>
						<div class="bloco">
							<p class="subtitulo-generico">Como participar?</p>
							<p class="texto-generico">As organizações interessadas devem inscrever seus projetos e enviar a documentação solicitada até o dia XX/XX, pelo site da AIPÊ.</p>
						</div>
					';
				} 
				elseif ( $paginaAtual == 'Chamadas' ) { 
					echo '
						<div class="bloco">
							<p class="subtitulo-generico">Conheça os projetos que estão em andamento</p>
							<p class="texto-generico">As 18 primeiras iniciativas apoiadas pela Aliança estão em plena atividade.
								Os projetos são distribuídos por vários estados do Brasil e vão beneficiar diretamente milhares de integrantes de associações e cooperativas rurais, nano e microempreendedores.</p>
						</div>
					';
				} 
			?>		
		</div>

		<?php 
			if ( $paginaAtual == 'Agricultura' ) { 
				echo '
					<div class="mapa">
						<img src="' . $images . 'agricultura/mapa.png" alt="mapa">			
						<p class="subtitulo-generico ' . ($temaCor == 'verde' ? 'txtverde' : ($temaCor == 'rosa' ? 'txtrosa' : '')) . ' submap">Agricultura com sustentabilidade e dignidade</p>
					</div>
				';
			} 
			elseif ( $paginaAtual == 'Turismo' ) { 
				echo '
					<div class="wrapper-txts-oquee">						
						<div class="bloco">
							<p class="subtitulo-generico">Quem pode participar?</p>
							<p class="texto-generico">Organizações sem fins lucrativos com projetos ligados ao turismo sustentável e com CNPJ ativo há 4 anos, pelo menos. Serão priorizadas iniciativas de turismo de base comunitária, turismo étnico e organizações lideradas ou formadas por mulheres, pessoas negras, indígenas, comunidades tradicionais e juventudes.</p>
						</div>
						<p class="subtitulo-generico ' . ($temaCor == 'verde' ? 'txtverde' : ($temaCor == 'rosa' ? 'txtrosa' : '')) . ' submap">Turismo com preservação e inclusão</p>
					</div>
				';
			}
			elseif ( $paginaAtual == 'Chamadas' ) {
				echo '
					<div class="wrapper-projetos">
						<div class="check dflt">';
						include ('assets/img/icons/check.php');
							echo '
							<p>R$ 8 milhões investidos</p>							
						</div>
						<div class="check dflt">';
						include ('assets/img/icons/check.php');
							echo '
							<p>Mais de 600 inscrições</p>							
						</div>
						<div class="check dflt">';
						include ('assets/img/icons/check.php');
							echo '
							<p>18 projetos selecionados</p>							
						</div>
						<div class="check dflt">';
						include ('assets/img/icons/check.php');
							echo '
							<p>16 estados atendidos</p>							
						</div>
						<div class="check dflt">';
						include ('assets/img/icons/check.php');
							echo '
							<p>2.398 pessoas beneficiadas </p>							
						</div>
					</div>
				';
			}
		?>
	</div>

	<div class="agricultura-sustentabilidade">
		<div class="container">
			<?php if ( $paginaAtual == 'Agricultura' ) {
					echo '<img src="' . $images . 'agricultura/agricultura-mulher.png" alt="mapa">';
				}
				elseif ( $paginaAtual == 'Turismo' ) {
					echo '<img src="' . $images . 'turismo/turismo.png" alt="turismo">';
				}
				elseif ( $paginaAtual == 'Chamadas' ) {
					echo '<img src="' . $images . 'chamadas/chamadas.png" alt="chamadas">';
				}			
			?>
		</div>
	</div>
</section>