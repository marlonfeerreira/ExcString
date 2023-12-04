<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavra Central</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Divide a frase em palavras
    $palavras = explode(' ', $frase);

    // Calcula o índice da palavra central
    $indiceCentral = floor(count($palavras) / 2);

    // Obtém a palavra central
    $palavraCentral = $palavras[$indiceCentral];

    // Imprime a palavra central
    echo "A palavra central na frase é: $palavraCentral";
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
