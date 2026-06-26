<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $product_name = "ノートパソコン";
    $price = 80000;
    $quantity = 2;
    $tax_rate = 0.1;

    $subtotal = $price * $quantity;
    $tax_amount = $subtotal * $tax_rate;
    $total = $subtotal + $tax_amount;
    ?>

    <!-- <?php echo "商品名: $product_name";?></br>
    <?php echo "単価: $price 円";?></br>
    <?php echo "数量: $quantity 個";?></br>
    <?php echo "小計: $subtotal 円";?></br>
    <?php echo "消費税(10%): $tax_amount 円";?></br>
    <strong><?php echo "合計金額: $total 円";?></strong></br> -->

    <p>商品名: <?= $product_name ?></p>
    <p>単価: <?= $price ?>円</p>
    <p>数量: <?= $quantity ?>個</p>
    <p>小計: <?= $subtotal ?>円</p>
    <p>消費税(10%): <?= $tax_amount ?>円</p>
    <p><strong>合計金額: <?= $total ?>円</strong></p>
    
</body>
</html>