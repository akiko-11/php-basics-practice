<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>割引計算</title>
</head>
<body>
    <?php
    //課題1

    //定義
    $original_price = 5000;//元の価格
    $discount_rate = 0.20;//割引率
    $final_price = $original_price * ( 1 - $discount_rate);//割引後の価格
    ?>

    <?php
    //課題2

    //定義
    $number =10;

    //分岐処理
    if ($number % 2 == 0){
        echo "{$number}は偶数です<br>";
    } else {
        echo "{$number}は奇数です<br>";
    }
    ?>

    <?php
    //課題3

    //定義
    $age = 26; //年齢
    $is_member = true; //会員である
    $is_student = false; //学生でない

    //分岐処理
    //年齢が18歳以上かつ会員である場合
    if ($age >= 18 && $is_member) {
        echo "割引が適用されます<br>";
    }

    //年齢が65歳以上または学生である場合
    if ($age >= 65 || $is_student) {
        echo "シニア・学生割引が適応されます<br>";
    }
    ?>

    <?php
    //課題4

    //初期スコア100
    $score = 100;
    echo "初期スコア：{$score}点<br>";

    //ボーナスステージクリア+50
    $score += 50;
    echo "ボーナス後：{$score}点<br>";

    //ダメージを受ける-30
    $score -= 30;
    echo "ダメージ後：{$score}点<br>";

    //スコア2倍アイテム使用
    $score *= 2;
    echo "最終スコア：{$score}点<br>";
    ?>
</body>
</html>