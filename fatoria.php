<?php
$numero = "";
$fatorial = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $fatorial = calcularFatorial($numero);
}

function calcularFatorial($numero) {
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    return $fatorial;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculo Fatorial</title>
</head>
<body>
    <h2>Calculo Fatorial</h2>
    <form action="" method="post">
        <label for="numero">Digite um número para calcular o fatorial:</label>
        <input type="number" name="numero" id="numero" value="<?php echo $numero; ?>">
        <input type="submit" value="Calcular">
    </form>

    <?php if ($fatorial !== ""): ?>
        <p>O fatorial de <?php echo $numero; ?> é: <?php echo $fatorial; ?></p>
    <?php endif; ?>
</body>
</html>
