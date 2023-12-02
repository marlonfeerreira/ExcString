<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frase na Diagonal</title>
</head>
<body>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a frase do formulário
    $frase = $_POST["frase"];

    // Imprime a frase na diagonal
    for ($i = 0; $i < strlen($frase); $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo '&nbsp;&nbsp;&nbsp;'; // Adiciona espaços para a diagonal
        }
        echo $frase[$i] . '<br>';
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase" id="frase" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>