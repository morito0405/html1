<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
$a = mt_rand(1, 100);
if ($a <=5){
  $judge = "大凶";
}
elseif($a <=20){
  $judge = "凶";
}
elseif($a <= 50){
  $judge = "吉";
}
elseif($a <= 80){
  $judge = "中吉";
}
else{
  $judge = "大吉";
}
?>

<p><?='今日の運勢は &quot;'. $judge .'&quot;です。'; ?></p>
</body>
</html>

