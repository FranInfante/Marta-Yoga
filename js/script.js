document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.hamburger-menu');
    const navList = document.querySelector('nav ul');
    const navItems = document.querySelectorAll('nav ul li');

    menuButton.addEventListener('click', function () {
        navList.classList.toggle('show');

        navItems.forEach(item => {
            item.style.display = navList.classList.contains('show') ? 'block' : 'none';
        });
    });
});