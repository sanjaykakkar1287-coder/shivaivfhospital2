document.addEventListener('DOMContentLoaded', () => {
    const menuBurger = document.getElementById('menuBurger');
    const navContainer = document.getElementById('navContainer');

    // Toggle Mobile Drawer & Burger Morphing
    menuBurger.addEventListener('click', () => {
        menuBurger.classList.toggle('open');
        navContainer.classList.toggle('active');
    });

    // Handle Mobile Click-to-Expand Submenus (Accordions)
    const interactiveItems = document.querySelectorAll('.has-dropdown > a, .has-submenu > a');

    interactiveItems.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            // Target execution only on viewport break-point scale
            if (window.innerWidth <= 992) {
                e.preventDefault(); // Stop raw link jumping execution
                
                const targetsSubmenu = trigger.nextElementSibling;
                if (targetsSubmenu) {
                    targetsSubmenu.classList.toggle('mobile-open');
                    
                    // Optional: Rotate internal sub/drop arrows upon trigger interaction
                    const icon = trigger.querySelector('.drop-icon, .sub-icon');
                    if(icon) {
                        icon.style.transform = targetsSubmenu.classList.contains('mobile-open') 
                            ? 'rotate(180deg)' 
                            : 'rotate(0deg)';
                    }
                }
            }
        });
    });
});
