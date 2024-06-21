<section class="fundadores">
	<div class="container">

		<?php 
			if ( $paginaAtual == 'Home' ) {
				echo('<p class="subtitulo-generico">Fundadores</p>');
			} elseif ( $paginaAtual == 'Agricultura' || $paginaAtual == 'Turismo' ) {
				echo('<p class="subtitulo-espacado">PARCERIA</p>');
			}
		?>
		
		<div class="carousel-container">
			<div class="carousel-inner">
				<img class="carousel-image" src="<? echo $images ?>home/fundadores.png" alt="fundadores">
				<img class="carousel-image" src="<? echo $images ?>home/fundadores.png" alt="fundadores">
			</div>
		</div>
	</div>
</section>