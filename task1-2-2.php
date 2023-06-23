<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  define('TAX','10%');//税率
  ?>
  <?php
  $pencil='100';//鉛筆の値段
  ?>
  <?php
  $eraser='200';//消しゴムの値段
  ?>
  <p>現在、消費税は<?= TAX;?>です。</p>
  <?="鉛筆が{$pencil}円で税込".(($pencil)+($pencil*TAX)/100)."円です。";?>
<br>
<br>
<?= "消しゴムが{$eraser}円で税込".($eraser+ ($eraser*TAX)/100)."円です。";?>

<?php
$a = array('田中',100,'OK');
$b = ['中田',55,'NG']
?>
<p>
  <?php print_r($a);?><br>
  <?php print_r($b);?><br>
  <?= $a[0];?><br>
  <?= $b[1];?><br>
</p>
</body>
</html>