document.addEventListener('DOMContentLoaded', function () {
    var categoriesNavItem = document.querySelector('.navbar-nav .dropdown');

    categoriesNavItem.addEventListener('mouseenter', function () {
        var dropdownMenu = categoriesNavItem.querySelector('.dropdown-menu');
        dropdownMenu.style.display = 'block'; // Hiển thị dropdown menu
    });

    categoriesNavItem.addEventListener('mouseleave', function () {
        var dropdownMenu = categoriesNavItem.querySelector('.dropdown-menu');
        dropdownMenu.style.display = 'none'; // Ẩn dropdown menu
    });
});
