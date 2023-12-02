<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frase substituindo as vogais por *</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Substitui vogais por *
    $fraseSubstituida = '';
    for ($i = 0; $i < strlen($frase); $i++) {
        $caractereAtual = $frase[$i];
        if (in_array($caractereAtual, ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'])) {
            $fraseSubstituida .= '*';
        } else {
            $fraseSubstituida .= $caractereAtual;
        }
    }

    // Imprime a frase substituindo vogais por *
    echo $fraseSubstituida;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>