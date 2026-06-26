<?php
$productName = "ノートパソコン"; //商品名
$price = 80000; //単価
$quantity = 2; //数量
$taxRate = 0.1; //消費税率

$subtotal = $price * $quantity; //小計
$consumptionRate = $subtotal * $taxRate; //消費税（10%）
$total = $subtotal + $consumptionRate; //合計金額

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPの基礎</title>
</head>
<body>

    <div>
        <label for="productName">商品名: </label>
        <?= $productName; ?>
    </div>

    <div>
        <label for="price">単価: </label>
        <?= number_format($price); ?>円
    </div>

    <div>
        <label for="quantity">数量:</label>
        <?= $quantity; ?>個
    </div>

    <div>
        <label for="subtotal">小計:</label>
        <?= number_format($subtotal); ?>円
    </div>

    <div>
        <label for="consumptionRate">消費税(10%):</label>
        <?= number_format($consumptionRate) ?>円
    </div>

    <div>
        <strong>
            <label for="total">合計金額:</label>
            <?= number_format($total) ?>円
        </strong>
    </div>

</body>
</html>