document.addEventListener('DOMContentLoaded', function () {
    // -------------------- Subcategorias --------------------
    const categoryLinks = document.querySelectorAll('.sidebar a.category');
    const subcategories = document.querySelectorAll('.subcategory');

    categoryLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            const subcategory = this.nextElementSibling;

            // Fecha todas as subcategorias, menos a atual
            subcategories.forEach(sub => {
                if (sub !== subcategory) sub.classList.remove('visible');
            });

            // Alterna visibilidade da subcategoria clicada
            subcategory.classList.toggle('visible');
        });
    });

    // -------------------- Sidebar Open/Close --------------------
    const sidebar = document.getElementById("sidebar");
    const closeBtn = document.querySelector(".sidebar .closebtn");
    const menuIcon = document.getElementById("menuIcon");

    menuIcon?.addEventListener("click", () => {
        sidebar.classList.add("open");
        closeBtn.style.transform = "rotate(90deg)";
    });

    closeBtn?.addEventListener("click", () => {
        sidebar.classList.remove("open");
        closeBtn.style.transform = "rotate(0deg)";
        // Fecha subcategorias abertas ao fechar a sidebar
        subcategories.forEach(sub => sub.classList.remove('visible'));
    });

    // -------------------- Destaque do Link Ativo --------------------
    const sidebarLinks = document.querySelectorAll(".sidebar a:not(.closebtn):not(.category)");
    const categoryNavLinks = document.querySelectorAll("nav.categories ul li a");

    sidebarLinks.forEach(link => {
        link.addEventListener("click", function () {
            sidebarLinks.forEach(l => l.classList.remove("selected"));
            this.classList.add("selected");
        });
    });

    categoryNavLinks.forEach(link => {
        link.addEventListener("click", function () {
            categoryNavLinks.forEach(l => l.classList.remove("active"));
            this.classList.add("active");
        });
    });
});
