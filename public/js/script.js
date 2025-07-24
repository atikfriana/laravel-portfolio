const navLinks = document.querySelectorAll(".nav-item");
const menuToggle = document.getElementById("navbarNav");
const bsCollapse = new bootstrap.Collapse(menuToggle, { toggle: false });
navLinks.forEach((l) => {
    l.addEventListener("click", () => {
        bsCollapse.toggle();
    });
});

const spinnerwraper = document.querySelector(".spinner-wrapper");

window.addEventListener("load", () => {
    spinnerwraper.style.opacity = "0";

    setTimeout(() => {
        spinnerwraper.style.display = "none";
    }, 1000);
});

gsap.to(".text-hello", {
    duration: 1,
    delay: 1,
    text: "Hallo,",
});

gsap.to(".text-nama", {
    duration: 2,
    delay: 1.5,
    text: "Saya Ahmad Zaelani",
});

AOS.init({ once: true });
