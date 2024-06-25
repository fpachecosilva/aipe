const menuMobile = document.querySelector('#menuToggle input');

menuMobile.addEventListener('click', function () {
	const menuLinks = document.querySelector('.menu-links');
	const body = document.querySelector('body');
	menuLinks.classList.toggle('opened');
	body.classList.toggle('opened');
});

document.addEventListener('DOMContentLoaded', function() {
    ajustarAlturaLinhavert();
    window.addEventListener('resize', ajustarAlturaLinhavert);
});

function ajustarAlturaLinhavert() {
    var wrapper = document.querySelector('.wrapper-linhas-dentro');
    var linhas = document.querySelectorAll('.wrapper-linhas-dentro .linha');
    var ultimaLinha = linhas[linhas.length - 1];
    var linhavert = document.querySelector('.linhavert');

    if (wrapper && ultimaLinha && linhavert) {
        var alturaWrapper = wrapper.clientHeight;
        var alturaUltimaLinha = ultimaLinha.clientHeight;
        var novaAlturaLinhavert = alturaWrapper - alturaUltimaLinha;
        linhavert.style.height = novaAlturaLinhavert + 'px';
    }
}



