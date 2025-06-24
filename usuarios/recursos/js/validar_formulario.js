// ✅ Verifica idade mínima (18 anos)
document.querySelector("form").addEventListener("submit", function (e) {
    const idade = parseInt(document.getElementById("idade").value);
    if (idade < 18) {
        e.preventDefault();
        alert("Você precisa ter pelo menos 18 anos para se cadastrar.");
        return;
    }

    // ✅ Verifica e-mail com domínio @gmail.com ou @hotmail.com
    const email = document.getElementById("email").value;
    const emailRegex = /^[\w.-]+@(gmail\.com|hotmail\.com)$/;
    if (!emailRegex.test(email)) {
        e.preventDefault();
        alert("Estrutura de email não permitida!");
        return;
    }

    // ✅ Verifica se as senhas coincidem
    const senha = document.getElementById("senha").value;
    const confirmar = document.getElementById("confirmarSenha").value;
    if (senha !== confirmar) {
        e.preventDefault();
        alert("As senhas não coincidem.");
        return;
    }
});

// ✅ Máscara de telefone ao digitar
document.addEventListener("DOMContentLoaded", function () {
    const telefone = document.getElementById("telefone");
    if (telefone) {
        telefone.addEventListener("input", function (e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 11) value = value.slice(0, 11);
            if (value.length >= 2 && value.length <= 6) {
                value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
            } else if (value.length > 6) {
                value = `(${value.slice(0, 2)}) ${value.slice(2, 7)}-${value.slice(7)}`;
            }
            e.target.value = value;
        });
    }
});

// ✅ Mostrar/ocultar senha e confirmação
function toggleSenha(idCampo) {
    const campo = document.getElementById(idCampo);
    if (campo.type === "password") {
        campo.type = "text";
    } else {
        campo.type = "password";
    }
}
