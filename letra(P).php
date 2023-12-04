<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogais em Maiúsculo</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Converte as vogais para maiúsculo
    $fraseModificada = '';
    for ($i = 0; $i < strlen($frase); $i++) {
        $caractere = $frase[$i];
        if (in_array(strtolower($caractere), ['a', 'e', 'i', 'o', 'u'])) {
            $fraseModificada .= strtoupper($caractere);
        } else {
            $fraseModificada .= $caractere;
        }
    }

    // Imprime a frase modificada
    echo "Frase apenas com vogais em maiúsculo: $fraseModificada";
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