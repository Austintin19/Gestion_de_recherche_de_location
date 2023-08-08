     document.addEventListener("scroll", function () {
         const navbar = document.querySelector("nav .navbar");
         if (window.scrollY > 50) {
    navbar.style.backgroundColor = "#fff"; // Fond blanc lorsque l'utilisateur fait défiler la page
    navbar.style.boxShadow = "2px 2px 2px rgba(0, 0, 0, 0.5)";
} else {
    navbar.style.backgroundColor = "transparent"; // Fond transparent par défaut
    navbar.style.boxShadow = "0 0 0 rgba(0, 0, 0)";
}
});