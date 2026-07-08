document.addEventListener('DOMContentLoaded', () => {
    const menuBurger = document.getElementById('menuBurger');
    const navContainer = document.getElementById('navContainer');

    if (menuBurger && navContainer) {
        menuBurger.addEventListener('click', () => {
            menuBurger.classList.toggle('open');
            navContainer.classList.toggle('active');
        });
    }

    const setupHoverMenus = () => {
        const hoverItems = document.querySelectorAll('.has-dropdown, .has-submenu');

        hoverItems.forEach(item => {
            const trigger = item.querySelector(':scope > a');
            const submenu = item.querySelector(':scope > .dropdown-menu, :scope > .submenu-child');
            let hideTimeout;

            if (!submenu) {
                return;
            }

            item.addEventListener('mouseenter', () => {
                if (window.innerWidth > 992) {
                    clearTimeout(hideTimeout);
                    submenu.classList.add('hover-open');

                    const icon = trigger?.querySelector('.drop-icon, .sub-icon');
                    if (icon) {
                        icon.style.transform = 'rotate(180deg)';
                    }
                }
            });

            item.addEventListener('mouseleave', (event) => {
                if (window.innerWidth > 992) {
                    const relatedTarget = event.relatedTarget;
                    if (relatedTarget && item.contains(relatedTarget)) {
                        return;
                    }

                    hideTimeout = setTimeout(() => {
                        submenu.classList.remove('hover-open');

                        const icon = trigger?.querySelector('.drop-icon, .sub-icon');
                        if (icon) {
                            icon.style.transform = 'rotate(0deg)';
                        }
                    }, 120);
                }
            });
        });
    };

    setupHoverMenus();

    window.addEventListener('resize', () => {
        if (window.innerWidth <= 992) {
            document.querySelectorAll('.dropdown-menu.hover-open, .submenu-child.hover-open').forEach((menu) => {
                menu.classList.remove('hover-open');
            });
        }
    });

    const interactiveItems = document.querySelectorAll('.has-dropdown > a, .has-submenu > a');

    interactiveItems.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                e.preventDefault();

                const targetsSubmenu = trigger.nextElementSibling;
                if (targetsSubmenu) {
                    targetsSubmenu.classList.toggle('mobile-open');

                    const icon = trigger.querySelector('.drop-icon, .sub-icon');
                    if (icon) {
                        icon.style.transform = targetsSubmenu.classList.contains('mobile-open')
                            ? 'rotate(180deg)'
                            : 'rotate(0deg)';
                    }
                }
            }
        });
    });
});
