<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Índices de Caracteres não Vogais sem Função</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Inicializa a variável para armazenar a soma dos índices
    $somaIndicesNaoVogais = 0;

    // Percorre cada caractere da frase
    for ($i = 0; $i < strlen($frase); $i++) {
        $caractere = $frase[$i];

        // Verifica se o caractere não é uma vogal
        if (
            $caractere != 'a' && $caractere != 'e' &&
            $caractere != 'i' && $caractere != 'o' &&
            $caractere != 'u' && $caractere != 'A' &&
            $caractere != 'E' && $caractere != 'I' &&
            $caractere != 'O' && $caractere != 'U'
        ) {
            // Adiciona o índice ao total
            $somaIndicesNaoVogais += $i;
        }
    }

    // Imprime a soma dos índices de caracteres não vogais
    echo "A soma dos índices de caracteres não vogais na frase é: $somaIndicesNaoVogais";
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