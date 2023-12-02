<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Caractere na Frase</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];
    // Obtém o caractere a ser procurado
    $caractere = $_POST["caractere"];

    // Inicializa o contador de ocorrências
    $contagem = 0;

    // Conta quantas vezes o caractere aparece na frase
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] == $caractere) {
            $contagem++;
        }
    }

    // Imprime o resultado
    echo "O caractere '$caractere' foi encontrado $contagem vezes na frase.";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <br>
    <label for="caractere">Digite um caractere:</label>
    <input type="text" name="caractere" id="caractere" required maxlength="1">
    <br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>