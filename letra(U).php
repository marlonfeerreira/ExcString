<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavras na Diagonal</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Divide a frase em palavras
    $palavras = explode(' ', $frase);

    // Obtém a primeira e última palavra
    $primeiraPalavra = $palavras[0];
    $ultimaPalavra = end($palavras);

    // Exibe a primeira palavra na diagonal
    echo "<h2>Primeira Palavra na Diagonal:</h2>";
    for ($i = 0; $i < strlen($primeiraPalavra); $i++) {
        // Adiciona espaços para alinhar a diagonal
        echo str_repeat("&nbsp;", $i);
        echo $primeiraPalavra[$i] . "<br>";
    }

    // Exibe a última palavra na diagonal
    echo "<h2>Última Palavra na Diagonal:</h2>";
    for ($i = 0; $i < strlen($ultimaPalavra); $i++) {
        // Adiciona espaços para alinhar a diagonal
        echo str_repeat("&nbsp;", $i);
        echo $ultimaPalavra[$i] . "<br>";
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