<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia de Frase</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Criptografa a frase
    $fraseCriptografada = criptografarFrase($frase);

    // Imprime a frase criptografada
    echo "Frase criptografada: $fraseCriptografada";
}

// Função para criptografar a frase
function criptografarFrase($frase) {
    $fraseCriptografada = '';

    for ($i = 0; $i < strlen($frase); $i++) {
        $caractere = $frase[$i];

        // Substitui cada letra por outra (por exemplo, avança uma posição no alfabeto)
        if (ctype_alpha($caractere)) {
            $fraseCriptografada .= avancarNoAlfabeto($caractere);
        } else {
            $fraseCriptografada .= $caractere;
        }
    }

    return $fraseCriptografada;
}

// Função para avançar uma posição no alfabeto
function avancarNoAlfabeto($letra) {
    $letra = strtolower($letra); // Converte para minúscula para garantir consistência
    $alfabeto = 'abcdefghijklmnopqrstuvwxyz';

    // Encontra a posição da letra no alfabeto
    $posicao = strpos($alfabeto, $letra);

    // Avança uma posição no alfabeto (considerando circularidade)
    $novaPosicao = ($posicao + 1) % 26;

    // Retorna a letra criptografada (mantendo a caixa original)
    return ($letra === strtoupper($letra)) ? strtoupper($alfabeto[$novaPosicao]) : $alfabeto[$novaPosicao];
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