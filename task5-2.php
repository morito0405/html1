<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $weekdays = array("月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日", "日曜日");
  $index = 0;
  echo '<ul>';
  while($index < count($weekdays)){
    echo '<li>' . $weekdays[$index] . '</li>';
    $index++;
  }
  echo '</ul>';
  ?>

</body>
</html>