<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_correto = "charles.naldo@gmail.com";
    $senha_correto = "123456";

    // Sanitiza e obtém as entradas
    $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $senha = htmlspecialchars(trim($_POST['senha'] ?? ''));

    // Valida as credenciais
    echo ($email === $email_correto && $senha === $senha_correto) 
        ? "Olá $nome, seja bem-vindo(a)! Você está logado(a)." 
        : "Email ou senha incorretos.";
}
?>