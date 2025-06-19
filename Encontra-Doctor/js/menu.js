document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const body = document.body;
    const sidebar = document.querySelector('.sidebar');

    function toggleMenu() {
        body.classList.toggle('menu-open');
        
        // Alterna o ícone do menu
        const icon = menuToggle.querySelector('i');
        if (body.classList.contains('menu-open')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    }

    // Fecha o menu ao clicar em um link da sidebar
    const sidebarLinks = sidebar.querySelectorAll('a');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (body.classList.contains('menu-open')) {
                toggleMenu();
            }
        });
    });

    // Fecha o menu ao redimensionar a janela para desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768 && body.classList.contains('menu-open')) {
            toggleMenu();
        }
    });

    menuToggle.addEventListener('click', toggleMenu);
    sidebarOverlay.addEventListener('click', toggleMenu);
}); 