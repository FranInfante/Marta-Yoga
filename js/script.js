document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.hamburger-menu');
    const navList = document.querySelector('nav ul');
    const navItems = document.querySelectorAll('nav ul li');

    menuButton.addEventListener('click', function () {
        navList.classList.toggle('show');

        // Toggle the display property based on the presence of the 'show' class
        navItems.forEach(item => {
            item.style.display = navList.classList.contains('show') ? 'block' : 'none';
        });
    });

    // Check the window width on resize and remove the 'show' class if it's larger than 1120px
    window.addEventListener('resize', function () {
        if (window.innerWidth > 1120) {
            navList.classList.remove('show');

            // Ensure that list items are visible
            navItems.forEach(item => {
                item.style.display = 'inline-block';
            });
        }
    });
});