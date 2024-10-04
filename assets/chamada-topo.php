<?php
	if ( $paginaAtual == 'Home' ) {
		echo('			
			<div class="chamada-topo">
				<div class="container">					
					<div class="barra-top aviso">
						<span class="bgdabarra"></span>
						<p><strong>Inscrições prorrogadas até dia 02/10!</strong> Não perca a oportunidade!</p>
					</div>

					<div class="barra-top">
						<span class="bgdabarra"></span>
						<p><strong>Ainda tem dúvidas de como se inscrever?</strong> Participe dos nossos encontros virtuais.</p>
					</div>

					<div class="barra-chamadas">
						<div class="esq">
							<a href="https://us06web.zoom.us/j/83168323565?pwd=QbCp2LeJZC5xbvLbxDzhs3xNPh7pZf.1" class="btn green brownhover">Participar</a>
							<p>								
								Práticas de Agricultura Sustentável<br>
								<strong>									
									18/09, 16h às 17h30
								</strong>
							</p>
						</div>
						<div class="dir">
							<a href="https://us06web.zoom.us/j/83143301177?pwd=lUcegLbXKTpWgi1SGUUqemF1nSoKip.1" class="btn pink brownhover">Participar</a>
							<p>
								Turismo Sustentável<br>
								<strong>									
									18/09, 9h às 10h30<br>
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
		position: relative;
	}
	.chamada-topo .barra-top.aviso {
		background: #ea6b79;
		color: #fff;
		border-radius: 0;
	}
	.chamada-topo .barra-top.aviso p {
		color: #fff;
	}
	.chamada-topo .barra-top .bgdabarra {
		position: absolute;
		border-radius: 0 0 0 20px;
    top: 0;
    left: 0;
    right: calc(-50vw + 50%);		
    height: 100%;
		min-height: 50px;
		max-height: 78px;
    background-color: #ffeedc;
	}
	.chamada-topo .barra-top.aviso .bgdabarra {
		border-radius: 0;
		background: #ea6b79;
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
		gap: 50px;
		margin-top: 19px;
		font-size: 20px;
	}
	.chamada-topo .barra-chamadas .esq, .chamada-topo .barra-chamadas .dir {
		display: flex;
		gap: 20px;
		flex: 1;
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
	/* .chamada-topo .barra-chamadas .dir .btn { width: 340px } */
	.chamada-topo .barra-chamadas .dir a:last-child { text-decoration: underline }
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
			padding-right: 0;
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
			padding-top: 10px!important;
			padding: 10px 20px;
			line-height: 1.2;
		}
		.chamada-topo .barra-chamadas .esq p, .chamada-topo .barra-chamadas .dir p {
			font-size: 16px;
		}
		.chamada-topo .barra-chamadas .dir .btn { width: initial }
		.chamada-topo .barra-chamadas .btn {
			height: fit-content;			
		}
	}
</style>