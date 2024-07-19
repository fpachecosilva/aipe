<?php
	if ( $paginaAtual == 'Home' ) {
		echo('			
			<div class="chamada-topo">
				<div class="container">
					<div class="barra-top">
					<div class="barra-top-bg"></div>
						<p><strong>Quer conhecer mais sobre as chamadas?</strong> Participe dos nossos encontros virtuais.</p>
					</div>

					<div class="barra-chamadas">
						<div class="esq">
							<a href="agricultura.php" class="btn green brownhover">Participar</a>
							<p>
								Práticas de Agricultura Sustentável<br>
								<strong>
									<a href="https://us06web.zoom.us/j/82669415464?pwd=N1bnRTnblnih7CDHtNqQ8gr6IbAnJv.1">23/07, 17h às 18h30</a><br>
									<a href="https://us06web.zoom.us/j/82669415464?pwd=N1bnRTnblnih7CDHtNqQ8gr6IbAnJv.1">13/08, 17h às 18h30</a>
								</strong>
							</p>
						</div>
						<div class="dir">
							<a href="turismo.php" class="btn pink brownhover">Participar</a>
							<p>
								Turismo Sustentável<br>
								<strong>
									<a href="https://us06web.zoom.us/j/84978806372?pwd=kR1DCxluNZT0XBbHxzbjJM6hOHmdBN.1">23/07, 09 às 10h30</a><br>
									<a href="https://us06web.zoom.us/j/84978806372?pwd=kR1DCxluNZT0XBbHxzbjJM6hOHmdBN.1">13/08, 09 às 10h30</a>
								</strong>
							</p>
						</div>
					</div>
				</div>
			</div>
		');
	}	
?>


<style>
	.chamada-topo {
		position: relative;
	}
	.chamada-topo .barra-top {
    background: #ffeedc;
    padding: 15px 20px;
    border-radius: 0 0 0 20px;
		font-size: 20px;
	}
	.chamada-topo .barra-top strong {
		font-weight: 700;
	}
	.chamada-topo .barra-top p {
		position: relative;
		z-index: 2;
	}
	.chamada-topo .barra-top-bg {
    z-index: 1;
    position: absolute;
    right: 0;
    top: 0;
    width: 1134px;
    height: 50px;
    background: #ffeedc;
	}
	.chamada-topo .barra-chamadas {
		display: flex;
		gap: 155px;
		margin-top: 19px;
		font-size: 20px;
	}
	.chamada-topo .barra-chamadas .esq, .chamada-topo .barra-chamadas .dir {
		display: flex;
		gap: 20px;
	}
	.chamada-topo .barra-chamadas .esq p, .chamada-topo .barra-chamadas .esq a {
		color: var(--verdebanner);
		padding-top: 8px;
		line-height: 1.2;
	}
	.chamada-topo .barra-chamadas .dir p, .chamada-topo .barra-chamadas .dir a {
		color: var(--rosabanner);
		padding-top: 8px;
		line-height: 1.2;
	}
	.chamada-topo .barra-chamadas .btn {
		transition: all .3s;
		height: 40px;
		cursor: pointer;
	}
	.chamada-topo .barra-chamadas .btn:hover {
		background: var(--principal)!important;
		color: var(--secundaria)!important;
	}
	.chamada-topo .barra-chamadas .btn.green {
		background: #29b79c;
		color: var(--primaria);
	}
	.chamada-topo .barra-chamadas .btn.pink {
		background: var(--rosabanner);
		color: var(--primaria);
	}

	@media screen and (max-width: 1240px) {
		.chamada-topo .barra-top-bg {
			width: 600px;
		}
	}

	@media screen and (max-width: 768px) {
		.chamada-topo .barra-top {
			font-size: 16px;
		}
		.chamada-topo .barra-top-bg {
			width: 50px;
			height: 62px;
		}
		.chamada-topo .barra-chamadas {
			flex-direction: column;
			gap: 19px;
			margin-top: 26px;
		}
		.chamada-topo .barra-chamadas .btn {
			padding: 10px 20px;
			line-height: 1.2;
		}
		.chamada-topo .barra-chamadas .esq p, .chamada-topo .barra-chamadas .dir p {
			font-size: 16px;
		}
	}
</style>

<script>
	function ajustarAlturaPseudoElemento() {
		const barraTop = document.querySelector('.chamada-topo .barra-top');
		const alturaBarraTop = barraTop.offsetHeight;
		const barraTopBg = document.querySelector('.chamada-topo .barra-top-bg');

		barraTopBg.style.height = `${alturaBarraTop}px`;
	}

	document.addEventListener('DOMContentLoaded', ajustarAlturaPseudoElemento);
	window.addEventListener('resize', ajustarAlturaPseudoElemento);
</script>