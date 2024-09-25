document.addEventListener('DOMContentLoaded', function() {
    var menuItems = document.querySelectorAll('.menu-item');
    
    var currentPath = window.location.pathname;

    function setActiveState(menuItem) {
        menuItems.forEach(item => item.classList.remove('active'));
        menuItem.classList.add('active');
    }

    menuItems.forEach(function(menuItem) {
        var menuPath = menuItem.getAttribute('href');

        if (menuPath && currentPath === new URL(menuPath, window.location.origin).pathname) {
            setActiveState(menuItem);
        }
    });

    menuItems.forEach(function(menuItem) {
        menuItem.addEventListener('click', function(e) {
            if (menuItem.getAttribute('href')) {
                setActiveState(this);
            }
        });
    });
});
