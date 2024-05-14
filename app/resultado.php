<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Pagamento</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco = (float)$_POST['preco'];
        $valor_pago = (float)$_POST['valor_pago'];

        if ($valor_pago == $preco) {
            echo "<h1>Boa compra!</h1>";
        } elseif ($valor_pago > $preco) {
            $troco = $valor_pago - $preco;
            echo "<h1>Boa compra!</h1>";
            echo "<p>Seu troco é: R$ " . number_format($troco, 2, ',', '.') . "</p>";
        } else {
            $faltante = $preco - $valor_pago;
            echo "<h1>Valor insuficiente.</h1>";
            echo "<p>Faltam: R$ " . number_format($faltante, 2, ',', '.') . "</p>";
        }
    }
    ?>
</body><!DOCTYPE html>
<html>
<head>
    <title>Resultado do Pagamento</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco = (float)$_POST['preco'];
        $valor_pago = (float)$_POST['valor_pago'];

        if ($valor_pago == $preco) {
            echo "<h1>Boa compra!</h1>";
        } elseif ($valor_pago > $preco) {
            $troco = $valor_pago - $preco;
            echo "<h1>Boa compra!</h1>";
            echo "<p>Seu troco é: R$ " . number_format($troco, 2, ',', '.') . "</p>";
        } else {
            $faltante = $preco - $valor_pago;
            echo "<h1>Valor insuficiente.</h1>";
            echo "<p>Faltam: R$ " . number_format($faltante, 2, ',', '.') . "</p>";
        }
    }
    ?>
</body>
</html>

</html>
