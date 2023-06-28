<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php 
  $top= Array('merchandise'=>'商品','price'=>'価格','taxin'=>'税込価格');
  $stationary= Array('pencil'=>'鉛筆','eraser'=>'消しゴム','ruler'=>'定規');
  $yen= Array('100'=>'100','200'=>'200','300'=>'300');
  define('TAX','10%');?>
  
  <table border="1" cellspacing="0" width="100%">
    <tr>
      <th><?= $top[merchandise];?></th>
      <th><?= $top[price];?></th>
      <th><?= $top[taxin];?></th>
    </tr>
    <tr>
      <td><?= $stationary[pencil];?></td>
      <td><?= $yen[100];?>円</td>
      <td><?= ($yen[100])+(($yen[100]*TAX/100));?>円</td>
    </tr>
    <tr>
      <td><?= $stationary[eraser];?></td>
      <td><?= $yen[200];?>円</td>
      <td><?= ($yen[200])+(($yen[200]*TAX/100));?>円</td>
    </tr>
    <tr>
      <td><?= $stationary[ruler];?></td>
      <td><?= $yen[300];?>円</td>
      <td><?= ($yen[300])+(($yen[300]*TAX/100));?>円</td>
    </tr>
  </table>
</body>

</html>