<?php
//課題1
$originalPrice = 5000; //元の価格
$discountRate = 0.2; //割引率
$discountPrice = $originalPrice * (1 - $discountRate); //割引後の価格

//課題2
$number = 1; //任意の数字

//偶数・奇数判定処理
function judgeNumber(int $number){
    if($number % 2 === 0){
        return $number."は偶数です";
    }else{
        return $number."は奇数です";
    }
}

//課題3
$age = 30;//任意の年齢
$isMember = false; //true:会員である, false:会員でない
$isStudent = false; //true:学生である, false:学生でない

//判定式
function judgeDiscount(int $age, bool $isMember, bool $isStudent): string{
    if($age >= 18 && $isMember){
        //年齢が18歳以上 かつ 会員である場合
        return '割引が適用されます';

    }elseif($age >= 65 || $isStudent) {
        //年齢が65歳以上 または 学生である場合: 
        return 'シニア・学生割引が適用されます';
    } else{
        return '割引は適用されません';
    }
}

//課題4
$initialScore = 100;

$score = $initialScore;

$score += 50;
$bonusScore = $score;

$score -= 30;
$damageScore = $score;

$score *= 2;
$twiceScore = $score;

$finalScore = $score;


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>追加演習</title>
</head>
<body>
    <h1>追加演習：演算子を使ったプログラム</h1>
    <h2>課題1:割引計算プログラム</h2>
    <div>
        <label for="originalPrice">元の価格: </label>
        <?= number_format($originalPrice) ?>円
    </div>
    <div>
        <label for="discountRate">割引率: </label>
        <?= ($discountRate * 100) ?>%
    </div>
    <div>
        <label for="discountPrice">割引後の価格: </label>
        <?= number_format($discountPrice) ?>円
    </div>

    <h2>課題2:偶数・奇数判定プログラム</h2>
    <p>判定結果</p>
    <?= judgeNumber($number) ?>

    <h2>課題3: 複数条件の判定</h2>
    <p>判定結果</p>
    <?= judgeDiscount($age, $isMember, $isStudent) ?>

    <h2>課題4: 複合代入演算子の練習</h2>
    <div>
        <label for="initialScore">初期スコア: </label>
        <?= $initialScore ?>点
    </div>
    <div>
        <label for="bonusScore">ボーナスステージクリア:</label>
        <?= $bonusScore ?>点
    </div>
    <div>
        <label for="damageScore">ダメージを受ける:</label>
        <?= $damageScore ?>点
    </div>
    <div>
        <label for="twiceScore">スコア　2倍アイテム使用:</label>
        <?= $twiceScore ?>点
    </div>
    <div>
        <label for="finalScore">最終スコア:</label>
        <?= $finalScore ?>点
    </div>
</body>


</html>