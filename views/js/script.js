var toggleMenu = document.getElementById('toggle-menuNav'),
    nav = document.getElementById('navMenu');

toggleMenu.addEventListener('click', function() {
    nav.classList.toggle('show-navMenu');
});

var parentLi = document.getElementById('parentSubMenu'),
    subMenu = document.getElementById('submenu');

parentLi.addEventListener('click', function(){
    subMenu.classList.toggle('showSubmenu');
});

var cartNav = document.getElementById('cartNav'),
cartMenu = document.getElementById('cartMenu');

cartNav.addEventListener('click', function(){
    cartMenu.classList.toggle('showCartNav');
});