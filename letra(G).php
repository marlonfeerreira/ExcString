<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frase sem vogais</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Remove vogais da frase manualmente
    $fraseSemVogais = '';
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    for ($i = 0; $i < strlen($frase); $i++) {
        if (!in_array($frase[$i], $vogais)) {
            $fraseSemVogais .= $frase[$i];
        }
    }

    // Imprime a frase sem vogais
    echo $fraseSemVogais;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>