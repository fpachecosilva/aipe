const menuMobile = document.querySelector('#menuToggle input');

menuMobile.addEventListener('click', function () {
  const menuLinks = document.querySelector('.menu-links');
  const body = document.querySelector('body');
  menuLinks.classList.toggle('opened');
  body.classList.toggle('opened');
});

// controle de active no menu
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll('.menu-links a');
  const targetHash = '#inscrever';

  links.forEach(link => {
    if (link.getAttribute('href') === `index.php${targetHash}`) {
      link.classList.remove('active');

      if (window.location.hash === targetHash) {
        link.classList.add('active');
      }
    }
  });
});


