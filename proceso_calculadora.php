<?php

$cliente = $_POST["txtCliente"];
$producto = $_POST["txtProducto"];
$precio = (float) $_POST["txtPrecio"];
$cantidad = (int) $_POST["txtCantidad"];

if ($precio <= 0 || $cantidad <= 0) {
    // redirige de vuelta con un indicador de error
    header("Location: index.php?error=1");
    exit;
}

$subtotal = $precio * $cantidad;

if ($subtotal < 100) {
    $descuento = 0;
} elseif ($subtotal >= 100 && $subtotal <= 299.99) {
    $descuento = $subtotal * 0.05;
} elseif ($subtotal >= 300 && $subtotal <= 499.99) {
    $descuento = $subtotal * 0.1;
} else {
    $descuento = $subtotal * 0.15;
}

$total = $subtotal - $descuento;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora de compra con descuento</h1>

    <p><strong>Cliente: </strong><?php echo $cliente ?></p>
    <p><strong>Producto: </strong><?php echo $producto ?></p>
    <p><strong>Subtotal: </strong><?php echo $subtotal ?></p>
    <p><strong>Descuento: </strong><?php echo $descuento ?></p>
    <p><strong>Total: </strong><?php echo $total ?></p>
</body>
</html>