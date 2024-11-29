<?php
	if ( $paginaAtual == 'Home' ) {
		echo('			
			<div class="banners-home">
				<div class="dflt">
					<div class="esq">						
						<div class="banner-conteudo" id="banner-conteudo">			
							<div class="conteudo">
								<p class="titulo">
									Soluções Socioambientais para Centros Urbanos
								</p>
								<p class="conteudo-texto">
									A chamada pública oferece apoio a organizações sem fins lucrativos com o objetivo de aumentar a renda e postos de trabalho nas áreas de reciclagem, economia circular, agricultura e agroecologia urbanas e energias renováveis. A ideia é que juntos(as) possamos impulsionar projetos ligados a soluções sustentáveis e contribuir para a melhoria da vida nas cidades!
								</p>
							</div>
							<div class="wrapper-btn">
								<a class="btn white brownhover" href="socioambientais.php"/>Mais informações</a>
								<a class="btn white brownhover" href="socioambientais.php#inscricao"/>Inscrição</a>
							</div>
						</div>
					</div>
				
					<div class="dir">						
						<img class="banner" src=" '. $images . 'home/banner-principal.png" alt="banner">
					</div>
				</div>
			</div>
		');
	}	
	
	if ( $paginaAtual == 'Agricultura' ) {
		echo('
			<div class="banners-agricultura">
				<img class="banner" src=" ' . $images . 'agricultura/banner.jpg" alt="banner">	
			</div>
		');
	}

	if ( $paginaAtual == 'Turismo' ) {
		echo('
			<div class="banners-agricultura">
				<img class="banner" src=" ' . $images . 'turismo/banner.jpg" alt="banner">	
			</div>
		');
	}

	if ( $paginaAtual == 'Chamadas' ) {
		echo('
			<div class="banners-agricultura">
				<img class="banner" src=" ' . $images . 'chamadas/banner.jpg" alt="banner">	
			</div>
		');
	}

	if ( $paginaAtual == 'Soluções Socioambientais' ) {
		echo('
			<div class="banners-agricultura">
				<img class="banner" src=" ' . $images . 'chamadas/bannersocioambientais.png" alt="banner">	
			</div>
		');
	}
?>