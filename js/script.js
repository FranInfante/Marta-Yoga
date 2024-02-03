document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.menu');
    const navList = document.querySelector('.navlist');
    const navItems = document.querySelectorAll('nav ul li');
    const header = document.querySelector("header");

    menuButton.addEventListener('click', function () {
        navList.classList.toggle('show');

        // Toggle the display property based on the presence of the 'show' class
        navItems.forEach(item => {
            item.style.display = navList.classList.contains('show') ? 'block' : 'none';
        });

        // Toggle the active class for the clicked item
        navItems.forEach(item => {
            item.classList.remove('active');
        });
    });

    // Handle click on nav items
    navItems.forEach(item => {
        item.addEventListener('click', function () {
            // Remove the 'active' class from all items
            navItems.forEach(item => {
                item.classList.remove('active');
            });

            // Add the 'active' class to the clicked item
            this.classList.add('active');

            // If the window width is less than 1120px, close the menu after clicking
            if (window.innerWidth <= 1120) {
                navList.classList.remove('show');
            }
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

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 0) {
            header.classList.add("shrink");
            menuButton.classList.add("shrink");
            navList.classList.add("shrink");
        } else {
            header.classList.remove("shrink");
            menuButton.classList.remove("shrink");
            navList.classList.remove("shrink");
        }
    });
});
