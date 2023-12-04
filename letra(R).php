<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Última Posição de Vogal</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Inicializa a variável para armazenar a última posição de vogal
    $ultimaPosicaoVogal = -1;

    // Percorre a frase da direita para a esquerda
    for ($i = strlen($frase) - 1; $i >= 0; $i--) {
        $caractere = $frase[$i];
        // Verifica se o caractere é uma vogal
        if (in_array(strtolower($caractere), ['a', 'e', 'i', 'o', 'u'])) {
            $ultimaPosicaoVogal = $i;
            break; // Sai do loop ao encontrar a última vogal
        }
    }

    // Imprime a última posição de vogal
    echo "A última posição de uma vogal na frase é: $ultimaPosicaoVogal";
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