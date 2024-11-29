<div class="container">

	<?php
		if ( $paginaAtual == 'Home' ) {
			echo('
				<div class="titulos dfsbfe">
					<div class="wrapper-txts">
						<div class="descritivo">INSCRIÇÕES ABERTAS</div>
						<div class="titulo">Nova chamada pública. Inscreva seu projeto!</div>
					</div>
					<div class="wrapper-botoes">
						<a href="#inscrever">
							<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect y="40" width="40" height="40" rx="20" transform="rotate(-90 0 40)" fill="#FFD600"/>
								<path d="M26.1433 17.0887L26.1433 17.0886C25.9004 16.8275 25.4985 16.8276 25.2555 17.0886L25.2555 17.0886L19.4285 23.3513L13.6016 17.0886C13.3586 16.8275 12.9568 16.8276 12.7138 17.0886L12.7138 17.0887L12.4964 17.3223C12.2631 17.5731 12.2631 17.9728 12.4964 18.2236L18.9847 25.197C19.2276 25.4581 19.6295 25.4581 19.8724 25.197L19.8725 25.197L26.3607 18.2236C26.594 17.9728 26.594 17.5731 26.3606 17.3223L26.1433 17.0887Z" fill="#592D34" stroke="#592D34" stroke-width="0.5"/>
							</svg>						
						</a>
					</div>
				</div>
			');
		}	
		
		if ( $paginaAtual == 'Agricultura' ) {
			echo('
				<div class="titulos dfsbfe">
					<div class="wrapper-txts">
						<div class="descritivo">INSCRIÇÕES ENCERRADAS</div>
						<div class="titulo">Práticas de Agricultura Sustentável</div>
					</div>
					<div class="wrapper-btn">
						<a class="btn brown sechover with-arrow" href="#oquee"/>O que é?</a>						
					</div>
				</div>
			');
		}

		if ( $paginaAtual == 'Turismo' ) {
			echo('
				<div class="titulos dfsbfe">
					<div class="wrapper-txts">
						<div class="descritivo">INSCRIÇÕES ENCERRADAS</div>
						<div class="titulo">Turismo Sustentável</div>
					</div>
					<div class="wrapper-btn">
						<a class="btn brown sechover with-arrow" href="#oquee"/>O que é?</a>						
					</div>
				</div>
			');
		}

		if ( $paginaAtual == 'Chamadas' ) {
			echo('
				<div class="titulos dfsbfe">
					<div class="wrapper-txts">						
						<div class="titulo">Do campo à cidade, transformando realidades</div>
					</div>					
				</div>
			');
		}

		if ( $paginaAtual == 'Soluções Socioambientais' ) {
			echo('
				<div class="titulos dfsbfe">
					<div class="wrapper-txts">						
						<div class="titulo">Soluções Socioambientais para Centros Urbanos</div>
					</div>
					<div class="wrapper-btn">
						<a class="btn brown sechover with-arrow" href="#objetivo"/>O que é?</a>						
						<a class="btn brown sechover" href="#inscricao"/>Inscreva-se</a>						
					</div>					
				</div>
			');
		}
	?>

</div>