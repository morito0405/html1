<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
$products = array(
  array('商品名' => '鉛筆', '価格' => 100),
  array('商品名' => '消しゴム', '価格' => 200),
  array('商品名' => '定規', '価格' => 300)
);
$tax = 10; // 税率（%）
?>

<table border="1">
  <thead>
    <tr>
      <th>商品名</th>
      <th>価格</th>
      <th>税込価格</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $product) { ?>
      <tr>
        <td><?php echo $product['商品名']; ?></td>
        <td><?php echo $product['価格']; ?>円</td>
        <td><?php echo $product['価格'] + ($product['価格'] * ($tax/ 100)); ?>円</td>
      </tr>
    <?php } ?>
  
  </tbody>
</table>
</body>
</html>