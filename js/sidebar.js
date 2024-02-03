const ikona = document.querySelector(".ikona");
const navbarList = document.querySelector(".meny ul");

ikona.addEventListener("click", () => {
    ikona.classList.toggle("fa-bars");
    ikona.classList.toggle("fa-close");
    navbarList.style.display = (navbarList.style.display == "flex") ? "none" : "flex";
})

window.addEventListener("resize", () => {
    if(window.innerWidth > 850) {
        navbarList.style.display = "flex";
    } else {
        navbarList.style.display = "none";
        if(ikona.classList.contains("fa-close")) {
            ikona.classList.toggle("fa-bars");
            ikona.classList.toggle("fa-close");
        }
    }
})