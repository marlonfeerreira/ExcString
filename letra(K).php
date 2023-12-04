<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substituir Palavra na Frase</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];
    // Obtém a primeira palavra a ser procurada
    $palavra1 = $_POST["palavra1"];
    // Obtém a segunda palavra a ser usada na substituição
    $palavra2 = $_POST["palavra2"];

    // Divide a frase em palavras
    $palavras = explode(' ', $frase);

    // Verifica se a primeira palavra está presente e substitui
    foreach ($palavras as &$palavra) {
        if ($palavra == $palavra1) {
            $palavra = $palavra2;
        }
    }

    // Reconstroi a frase com as palavras modificadas
    $fraseModificada = implode(' ', $palavras);

    // Imprime a frase modificada
    echo "Frase modificada: $fraseModificada";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <br>
    <label for="palavra1">Palavra a ser substituída:</label>
    <input type="text" name="palavra1" id="palavra1" required>
    <br>
    <label for="palavra2">Palavra para substituição:</label>
    <input type="text" name="palavra2" id="palavra2" required>
    <br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>