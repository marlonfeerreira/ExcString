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

    // Encontra a maior palavra na frase manualmente
    $palavraAtual = '';
    $maiorPalavra = '';

    for ($i = 0; $i <= strlen($frase); $i++) {
        $caractereAtual = strtolower($frase[$i]);

        // Se o caractere atual não é um espaço e não é o final da frase
        if ($caractereAtual != ' ' && $i < strlen($frase)) {
            $palavraAtual .= $frase[$i];
        } else {
            // Compara a palavra atual com a maior palavra até agora
            if (strlen($palavraAtual) > strlen($maiorPalavra)) {
                $maiorPalavra = $palavraAtual;
            }
            // Reinicia a palavra atual para a próxima palavra
            $palavraAtual = '';
        }
    }

    // Imprime a maior palavra
    echo "A maior palavra na frase é: $maiorPalavra";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>