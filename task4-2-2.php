<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $a = mt_rand(1,12);
  if($a <= 2){
    $judge = "冬";
  }elseif($a <= 5) {
    $judge = "春";
  }elseif($a <= 8) {
    $judge = "夏";
  }elseif($a <= 11){
    $judge = "秋";
  }else{
    $judge = "冬";
  }
  ?>

<p><?= "{$a}月は{$judge}の季節です。"; ?></p>
</body>
</html>