<?php
// Exemplo opcional para diferencial: recebe os dados do formulário.
// Para testar, execute em um servidor com PHP e altere o form para method="POST" action="enviar.php".
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $ideia = trim($_POST['ideia'] ?? '');

    if ($nome !== '' && $ideia !== '') {
        $nomeSeguro = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
        $ideiaSegura = htmlspecialchars($ideia, ENT_QUOTES, 'UTF-8');
        echo "<h1>Ideia recebida!</h1>";
        echo "<p>Obrigado, {$nomeSeguro}. Sua proposta: {$ideiaSegura}</p>";
    } else {
        http_response_code(400);
        echo "Preencha todos os campos.";
    }
}
?>