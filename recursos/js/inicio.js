document.addEventListener('DOMContentLoaded', function () {
    const categoryLinks = document.querySelectorAll('.sidebar a.category');

    categoryLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Previne o comportamento padrão do link

            // Seleciona a subcategoria correspondente
            const subcategory = this.nextElementSibling;

            // Verifica se a subcategoria está visível
            const isVisible = subcategory.classList.contains('visible');

            // Fecha todas as subcategorias que estão visíveis
            document.querySelectorAll('.subcategory').forEach(sub => {
                sub.classList.remove('visible');
            });

            // Se a subcategoria clicada não estiver visível, exibe-a
            if (!isVisible) {
                subcategory.classList.add('visible');
            }
        });
    });
});

document.getElementById("menuIcon").onclick = function () {
    openNav();
};

function openNav() {
    document.getElementById("sidebar").style.width = "400px";
    document.querySelector(".sidebar .closebtn").style.transform = "rotate(90deg)"; // Rotaciona o ícone de fechar
}

function closeNav() {
    document.getElementById("sidebar").style.width = "0";
    document.querySelector(".sidebar .closebtn").style.transform = "rotate(0deg)"; // Reseta a rotação do ícone de fechar
}

document.addEventListener("DOMContentLoaded", function () {
    const sidebarLinks = document.querySelectorAll(".sidebar a:not(.closebtn)");
    const categoryLinks = document.querySelectorAll("nav.categories ul li a");

    sidebarLinks.forEach(link => {
        link.addEventListener("click", function () {
            // Remove a classe 'selected' de todos os links
            sidebarLinks.forEach(link => link.classList.remove("selected"));
            // Adiciona a classe 'selected' ao link clicado
            this.classList.add("selected");
        });
    });

    categoryLinks.forEach(link => {
        link.addEventListener("click", function () {
            // Remove a classe 'active' de todos os links de categoria
            categoryLinks.forEach(link => link.classList.remove("active"));
            // Adiciona a classe 'active' ao link clicado
            this.classList.add("active");
        });
    });
});
