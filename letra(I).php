<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantas palavras existem na frase</title>
</head>
<body>

<?php
  // Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Conta o número de palavras na frase manualmente
    $numeroPalavras = 1; // Começa com 1 para contar a primeira palavra
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] == ' ') {
            $numeroPalavras++;
        }
    }

    // Imprime o número de palavras
    echo "Número de palavras na frase: $numeroPalavras";
}


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>