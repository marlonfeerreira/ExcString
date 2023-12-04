<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substituir Espaços por Hífens sem Função</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Inicializa uma nova string
    $fraseSubstituida = '';

    // Percorre cada caractere da frase
    for ($i = 0; $i < strlen($frase); $i++) {
        // Se o caractere atual for um espaço, substitui por um hífen
        if ($frase[$i] == ' ') {
            $fraseSubstituida .= '-';
        } else {
            $fraseSubstituida .= $frase[$i];
        }
    }

    // Imprime a frase modificada
    echo "Frase com espaços substituídos por hífens: $fraseSubstituida";
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