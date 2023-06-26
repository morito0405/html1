<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $a= mt_rand(1,12);

  switch ($a){
    case 1:
    case 2:
      $judge = "冬" ;
      break;
    case 3:
    case 4:
    case 5:
      $judge = "春" ;
      break;
    case 6:
    case 7:
    case 8:
      $judge = "夏" ;
      break;
    case 9:
    case 10:
    case 11:
      $judge = "秋" ;
      break;
    case 12:
      $judge = "冬" ;
      break;
    default:
    $judge = "不明";
    break;
  }

  ?>
<p><?= "{$a}月は{$judge}の季節です。"; ?></p>
</body>
</html>