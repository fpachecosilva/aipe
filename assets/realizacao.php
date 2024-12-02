<section class="realizacao <?php if ($paginaAtual === 'Home') { echo 'realizacaohome'; } elseif ($paginaAtual === 'Soluções Socioambientais') { echo 'realizacaochamadas'; } ?> ">
	<div class="container dflt">
		<div class="esq">
			<div class="realizacao-parceria dfc">
				REALIZAÇÃO
				<span></span>
			</div>
			<img class="logo" src="<? echo $images ?>home/logo-alianca-baixo.svg" alt="">
		</div>
		<div class="dir">
			<div class="realizacao-parceria dfc">
				UMA PARCERIA
				<span></span>
			</div>
			<img class="" src="<?php if ($paginaAtual === 'Home') { echo $images . 'home/parceiros-home.png'; } elseif ($paginaAtual === 'Soluções Socioambientais') { echo $images . 'chamadas/parceiros-chamadas.png'; } ?>" alt="">
		</div>
	</div>
</section>