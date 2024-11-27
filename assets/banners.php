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
									Essa chamada nacional oferece apoio a associações sem fins lucrativos e redes que atuam em comunidades urbanas vulneráveis nos temas de reciclagem, economia circular, agroecologia, agricultura urbana e energias renováveis.
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