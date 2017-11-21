var toggleMenu = document.getElementById('toggle-menuNav'),
    nav = document.getElementById('navMenu');

toggleMenu.addEventListener('click', function() {
    nav.classList.toggle('show-navMenu');
});