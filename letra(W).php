<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase criptografada do formulário
    $fraseCriptografada = $_POST["frase"];

    // Descriptografa a frase
    $fraseDescriptografada = descriptografarFrase($fraseCriptografada);

    // Imprime a frase descriptografada
    echo "Frase descriptografada: $fraseDescriptografada";
}

// Função para descriptografar a frase
function descriptografarFrase($fraseCriptografada) {
    $fraseDescriptografada = '';

    for ($i = 0; $i < strlen($fraseCriptografada); $i++) {
        $caractere = $fraseCriptografada[$i];

        // Substitui cada letra por outra (por exemplo, recua uma posição no alfabeto)
        if (ctype_alpha($caractere)) {
            $fraseDescriptografada .= recuarNoAlfabeto($caractere);
        } else {
            $fraseDescriptografada .= $caractere;
        }
    }

    return $fraseDescriptografada;
}

// Função para recuar uma posição no alfabeto
function recuarNoAlfabeto($letra) {
    $letra = strtolower($letra); // Converte para minúscula para garantir consistência
    $alfabeto = 'abcdefghijklmnopqrstuvwxyz';

    // Encontra a posição da letra no alfabeto
    $posicao = strpos($alfabeto, $letra);

    // Recua uma posição no alfabeto (considerando circularidade)
    $novaPosicao = ($posicao - 1 + 26) % 26;

    // Retorna a letra descriptografada (mantendo a caixa original)
    return ($letra === strtoupper($letra)) ? strtoupper($alfabeto[$novaPosicao]) : $alfabeto[$novaPosicao];
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase criptografada:</label>
    <input type="text" name="frase" id="frase" required>
    <br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>