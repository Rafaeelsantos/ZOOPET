document.querySelector("form").addEventListener("submit", function (e) {
    const idade = parseInt(document.getElementById("idade").value);
    if (idade < 18) {
        e.preventDefault();
        alert("Você precisa ter pelo menos 18 anos para se cadastrar.");
    }
});