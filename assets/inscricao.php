<section class="inscricao" id="inscricao">
	<div class="container">
		<div class="inscricao-wrapper divs5050 dfl">
			<div class="esq">
				<p class="subtitulo-generico">Inscrição</p>
				<p class="texto-generico">
					O processo seletivo está aberto até XX de XXXX de 20XX.<br> 
					Acesse o formulário e mande sua proposta.
				</p>
				<p class="subtitulo-generico sectop40">A transformação<br> começa agora!</p>
			</div>
			<div class="dir">
				<div class="wrapper-btn">	 				
					<a class="btn brown sechover" href="#"/>Inscrição</a>
					
					<a class="btn white brownhover" href="assets/pdf/<?php if ($paginaAtual == 'Agricultura') { echo 'PAS_Regulamento.pdf'; } elseif ($paginaAtual == 'Turismo') { echo 'TUR_Regulamento.pdf'; } ?>" target="_blank"/>Regulamento</a>
					
					<a class="btn white brownhover" href="<?php if ($paginaAtual == 'Agricultura') { echo 'https://drive.google.com/drive/folders/1zsCUWz6kee-ot_qEsf0CWFSnfsy0cGtp?usp=sharing'; } elseif ($paginaAtual == 'Turismo') { echo 'https://drive.google.com/drive/folders/1CudYao5ulnSQ8qWxy9j1EDvxEOOAcAwU?usp=sharing'; } ?>" target="_blank"/>Apoio e Documentos para inscrição</a>
					
					<a class="btn white brownhover" href="assets/pdf/<?php if ($paginaAtual == 'Agricultura') { echo 'PAS_FAQ.pdf'; } elseif ($paginaAtual == 'Turismo') { echo 'TUR_FAQ.pdf'; } ?>" target="_blank"/>Dúvidas frequentes</a>
				</div>
			</div>
		</div>
	</div>
</section>