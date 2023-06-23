<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php 
  $top= Array('merchandise'=>'商品','price'=>'価格','taxin'=>'税込価格');?>
  <?php
  $stationary= Array('pencil'=>'鉛筆','eraser'=>'消しゴム','ruler'=>'定規');?>
  <?php
  $yen= Array('100'=>'100','200'=>'200','300'=>'300');
  ?>
  <?php
  $tax= '10';?>
  
  <table border="1" cellspacing="0" width="100%">
    <tr>
      <th>
        <?php echo $top[merchandise];?>
      </th>
      <th>
        <?php echo $top[price];?>
      </th>
      <th>
        <?php echo $top[taxin];?>
      </th>
    </tr>
    <tr>
      <td>
        <?php echo $stationary[pencil];?>
      </td>
      <td>
        <?php echo $yen[100];?>円
      </td>
      <td>
        <?= ($yen[100])+(($yen[100]*$tax/100));?>円
      </td>
    </tr>
    <tr>
      <td>
        <?php echo $stationary[eraser];?>
      </td>
      <td>
      <?php echo $yen[200];?>円
      </td>
      <td>
      <?= ($yen[200])+(($yen[200]*$tax/100));?>円
      </td>
    </tr>
    <tr>
      <td>
      <?php echo $stationary[ruler];?>
      </td>
      <td>
      <?php echo $yen[300];?>円
      </td>
      <td>
      <?= ($yen[300])+(($yen[300]*$tax/100));?>円
      </td>
    </tr>
    <p>消費税は10%です。</p>
  </table>
</body>

</html>