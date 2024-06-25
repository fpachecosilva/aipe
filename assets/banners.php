<?php
	if ( $paginaAtual == 'Home' ) {
		echo('			
			<div class="banners-home">
				<div class="banners-separados dfc">
					<div class="separado-esquerda"><img src=" '. $images . 'home/banner-principal-homem.jpg" alt="banner"></div>
					<div class="separado-direita"><img src=" '. $images . 'home/banner-principal-mulher.jpg" alt="banner"></div>
				</div>

				<div class="container dfc">
					<div class="esq">
						<img class="banner" src=" '. $images . 'home/banner-principal-homem.jpg" alt="banner">	
						<div class="banner-conteudo" id="banner-conteudo">			
							<div class="conteudo">
								<p class="titulo">
									Práticas de Agricultura Sustentável
								</p>
								<p class="conteudo-texto">
									Com esta chamada, buscamos associações ou cooperativas rurais que desejem melhorar seus processos produtivos e avançar na implementação de práticas de agricultura sustentável, visando o aumento da renda de produtores de baixa renda e a resiliência e sustentabilidade dos sistemas agrícolas.
								</p>
							</div>
							<div class="wrapper-btn">
								<a class="btn white brownhover" href="agricultura.php"/>Mais informações</a>
								<a class="btn white brownhover" href="agricultura.php#inscricao"/>Inscrição</a>
							</div>
						</div>
					</div>
				
					<div class="dir">
						<img class="banner" src=" '. $images . 'home/banner-principal-mulher.jpg" alt="banner">	
						<div class="banner-conteudo">			
							<div class="conteudo">
								<p class="titulo">
									Turismo<br>sustentável
								</p>
								<p class="conteudo-texto">
									Com esta chamada, buscamos organizações que atuem em ações de promoção do turismo sustentável (urbano ou rural) por meio da articulação de atividades e negócios que preservem seus territórios e valorizem a cultura e patrimônio histórico local, com a finalidade de incrementar a renda das comunidades alcançadas.
								</p>
							</div>
							<div class="wrapper-btn">
								<a class="btn white brownhover" href="turismo.php"/>Mais informações</a>
								<a class="btn white brownhover" href="turismo.php#inscricao"/>Inscrição</a>
							</div>
						</div>
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
?>