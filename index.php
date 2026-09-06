<?php
$tiene_error = isset($_GET["error"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de compra con descuento</title>
</head>
<body>
    <form action="proceso_calculadora.php" method="POST">

        <label for="cliente">Nombre del Cliente:</label>
        <input type="text" name="txtCliente" id="cliente" required>
        <br>
        <br>

        <label for="producto">Nombre del Producto:</label>
        <input type="text" name="txtProducto" id="producto" required>
        <br>
        <br>

        <label for="precio">Precio (S/):</label>
        <input type="number" name="txtPrecio" id="precio" step="0.01" min="0.01" required>
        <br>
        <br>

        <label for="cantidad">Cantidad (u):</label>
        <input type="number" name="txtCantidad" id="cantidad" min="1" required>
        <br>
        <br>

        <input type="submit" value="Calcular">
    </form>

    <?php if ($tiene_error): ?>
        <small style="color: red;">Error. Corrovorar los datos.</small>
    <?php endif; ?>
</body>
</html>