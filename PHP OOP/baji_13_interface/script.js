// Initialize the mobile menu
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuItems = document.querySelectorAll('.menu-item');

    mobileMenu.addEventListener('click', function(event) {
        if (event.target === mobileMenu) {
            mobileMenu.classList.toggle('active');
            menuItems.forEach(item => item.classList.remove('active'));
        }
    });
});