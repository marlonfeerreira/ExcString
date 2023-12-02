<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavras na Vertical e Frase na Diagonal</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Divide a frase em palavras
    $palavras = explode(' ', $frase);

    // Exibe cada palavra na vertical
    echo "<h2>Palavras na Vertical:</h2>";
    foreach ($palavras as $palavra) {
        for ($i = 0; $i < strlen($palavra); $i++) {
            echo $palavra[$i] . "<br>";
        }
        echo "<br>";
    }

    // Exibe a frase na diagonal
    echo "<h2>Frase na Diagonal:</h2>";
    for ($i = 0; $i < strlen($frase); $i++) {
        // Adiciona espaços para alinhar a diagonal
        echo str_repeat("&nbsp;", $i);
        echo $frase[$i] . "<br>";
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