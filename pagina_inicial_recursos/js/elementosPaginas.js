document.querySelectorAll('.MenuList a').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();

        const page = link.getAttribute('data-page');
        if (!page) return;

        // Atualiza item ativo
        document.querySelectorAll('.MenuList li').forEach(li => li.classList.remove('active'));
        link.parentElement.classList.add('active');

        // Carrega o conteúdo via fetch
        fetch(`paginas/componentes/${page}.php`)
            .then(res => {
                if (!res.ok) throw new Error('Erro ao carregar: ' + page);
                return res.text();
            })
            .then(html => {
                const contentDiv = document.getElementById('content');
                contentDiv.style.opacity = 0; // efeito suave
                setTimeout(() => {
                    contentDiv.innerHTML = html;
                    contentDiv.style.opacity = 1;
                }, 150);
            })
            .catch(err => console.error(err));
    });
});
