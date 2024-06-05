const actives = document.body.querySelectorAll(".menu-item a:not(.menu-item-55 a)");

actives.forEach((active) => {
    if (active.href === window.location.href) {
        active.classList.add("active");
    }
});