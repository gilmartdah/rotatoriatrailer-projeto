<!DOCTYPE html>
<html>
<head>
    <title>Calcular Troco</title>
</head>
<body>

<?php
if ("POST") {
    $total = 21.00;
    $valor_cliente = $_POST['valor_cliente'];
    $troco = $valor_cliente - $total;
    echo "<p>Total: R$ " . number_format($total, 2, ',', '.') . "</p>";
    echo "<p>Troco: R$ " . number_format($troco, 2, ',', '.') . "</p>";
}
?>

<form method="post" action=''>
    <input type="number" step="0.01" name="valor_cliente" placeholder="Digite o valor que o cliente deu" required>
    <button type="submit">Calcular Troco</button>
</form>

</body>
</html>
