<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escreva a frase sem espaço em branco</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Remove espaços em branco da frase manualmente
    $fraseSemEspacos = '';
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] !== ' ') {
            $fraseSemEspacos .= $frase[$i];
        }
    }

    // Imprime a frase sem espaços
    echo $fraseSemEspacos;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>