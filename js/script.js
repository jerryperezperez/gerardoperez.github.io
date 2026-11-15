const menuToggle = document.getElementById('menuToggle');
const siteMenu = document.getElementById('siteMenu');

if (menuToggle && siteMenu) {
    menuToggle.addEventListener('click', () => {
        const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', String(!isOpen));
        menuToggle.setAttribute('aria-label', isOpen ? 'Open navigation' : 'Close navigation');
        siteMenu.classList.toggle('isOpen', !isOpen);
    });

    siteMenu.addEventListener('click', (event) => {
        if (event.target.closest('a')) {
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.setAttribute('aria-label', 'Open navigation');
            siteMenu.classList.remove('isOpen');
        }
    });
}
