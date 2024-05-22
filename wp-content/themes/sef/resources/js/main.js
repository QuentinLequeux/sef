const actives = document.body.querySelectorAll(".menu-item a");

actives.forEach(active => {
    active.addEventListener("click", (e) => {
        //e.preventDefault();
        actives.forEach(active => {
            active.classList.remove("active")
        });
        active.classList.add("active");
    });
});