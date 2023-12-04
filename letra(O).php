<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavras Alternando Direção</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Divide a frase em palavras
    $palavras = explode(' ', $frase);

    // Flag para alternar a direção de leitura
    $inverter = false;

    // Exibe as palavras alternando a direção de leitura
    echo "<h2>Palavras Alternando Direção:</h2>";
    foreach ($palavras as $palavra) {
        if ($inverter) {
            // Se a flag estiver definida, inverte a ordem da palavra
            $palavra = strrev($palavra);
        }

        echo $palavra . " ";

        // Inverte a flag para a próxima palavra
        $inverter = !$inverter;
    }
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