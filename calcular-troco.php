<?php

$troco = 0;
$valoritem = 1200;

echo "<label name='valoritem'>Preco item: " . number_format($valoritem , '2', ',','.') . "</label>";

if (!empty($_POST['resultado'])) {

$resultado = $_POST['resultado'];



 $troco = $valoritem - $resultado;

    echo "<br>";
    echo "<label  for='final'  name='final'>Valor final R$ "  . number_format($troco, 2, ',', '.') .  "</label>";


}else{
}
?>







<!DOCTYPE html>
<html>
<head>
    <title>Calcular Troco</title>
</head>
<body>



<form method="post" action="">

    <label for="">Digite o valor que o cliente deu:</label>
    <input type="number" step="0.01" name="resultado" placeholder="Digite o valor que o cliente deu" required>
    
    <button type="submit">Calcular Troco</button>
</form>

</body>
</html>
