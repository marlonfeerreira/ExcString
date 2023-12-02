<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Separar Sílabas de Duas Letras</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Separa as sílabas de duas letras
    $silabas = separarSilabas($frase);

    // Imprime as sílabas
    echo "Sílabas de duas letras na frase: $silabas";
}

// Função para separar sílabas de duas letras
function separarSilabas($frase) {
    $silabas = '';

    // Percorre cada caractere da frase
    for ($i = 0; $i < strlen($frase); $i += 2) {
        // Adiciona a sílaba de duas letras à string
        $silabas .= substr($frase, $i, 2) . ' ';
    }

    // Remove o espaço extra no final
    return rtrim($silabas);
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