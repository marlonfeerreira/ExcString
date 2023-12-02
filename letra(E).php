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

    // Calcula o comprimento da frase
    $comprimento = strlen($frase);

    // Escreve a frase na ordem contrária
    for ($i = $comprimento - 1; $i >= 0; $i--) {
        echo $frase[$i];
    }
} 

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>