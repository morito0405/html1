<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
function showString($str,$num){
  echo str_repeat($str,$num);
}

showString("気合いだ！<br>", 3);
?>
</body>
</html>