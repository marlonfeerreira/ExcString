<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Palavras com Letra Maiúscula</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Divide a frase em palavras
    $palavras = [];
    $palavraAtual = '';

    for ($i = 0; $i < strlen($frase); $i++) {
        $caractere = $frase[$i];

        // Se o caractere não for um espaço, adiciona ao palavraAtual
        if ($caractere != ' ') {
            $palavraAtual .= $caractere;
        } else {
            // Se for um espaço, adiciona a palavra atual ao array de palavras
            $palavras[] = $palavraAtual;
            // Reinicia a palavra atual
            $palavraAtual = '';
        }
    }

    // Adiciona a última palavra ao array de palavras
    $palavras[] = $palavraAtual;

    // Inicia manualmente cada palavra com letra maiúscula
    foreach ($palavras as &$palavra) {
        // Verifica se a palavra não está vazia antes de modificá-la
        if (!empty($palavra)) {
            $primeiraLetra = strtoupper($palavra[0]); // Converte a primeira letra para maiúscula
            $restoPalavra = strtolower(substr($palavra, 1)); // Converte o restante da palavra para minúscula
            $palavra = $primeiraLetra . $restoPalavra;
        }
    }

    // Reconstroi a frase com as palavras iniciadas com letra maiúscula
    $fraseModificada = implode(' ', $palavras);

    // Imprime a frase modificada
    echo "Frase modificada: $fraseModificada";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>