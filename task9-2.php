<?php
try{
  $pdo = new PDO(
    'mysql:host=localhost;dbname=consumer1;charset=utf8mb4',
    'root',
    'root'
  );
  // $pdo->query( 
  //   "CREATE TABLE information1(
  //     id INT PRIMARY KEY,
  //     name  VARCHAR(128) ,
  //     kana  VARCHAR(128),
  //     email VARCHAR(128) CHARACTER SET utf8mb4     COLLATE utf8mb4_unicode_ci NOT NULL,,
  //     tel   VARCHAR(64),
  //     inquiry VARCHAR(128),
  //     inquiry_contents  VARCHAR(300)
    

  $stmt = $pdo->query("SHOW TABLES");
}catch(PDOException $e){
  echo $e->getMessage(). '<br>';
  exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <title>確認ページ</title>
  <style>
    .error{
      text-align: center;
      color: red;
    }
  </style>
</head>
<body>
  <header>
    <div class="header_left">
      <h3>ここには会社名が入ります</h3>
    </div>
    <div class="header_right">
      <div class="header_right_1">
        <a href="#" class="btn_01">ボタン01</a>
      </div>
      <div class="header_right_2">
        <a href="#" class="btn_02">ボタン02</a>
      </div>
    </div>
  </header>
  <ul>
    <li><a href="#">メニュー01</a></li>
    <li><a href="#">メニュー02</a></li>
    <li><a href="#">メニュー03</a></li>
  </ul>
  <div class="mv">
    <h1>
      <img src="mv02.png" alt="MV">
    </h1>
  </div>
  <main>
  <div class="main_1">
    <div class="main_h2">
      <h2>お問い合わせ</h2>
    </div>
    <div class="main_p">
    <style>
      .main_p{
        color:blue;
      }
    </style>
      <h2>送信完了しました。</h2>
      </p>
    </div>
  </div>
  

</body>
  <div class="sec_05">
    <div class="sec_05_left">
      <h5>こちらからご購入ください</h5>
      <a href="#" class="btn">ネットショップ</a>
    </div>
    <div class="sec_05_right">
      <h5>お気軽にお問い合わせください</h5>
      <a href="#" class="btn_03">お問い合わせ</a>
    </div>
  </div>
</main>

  <footer>
    <div class="footer_01">
      <h5>ここには会社名が入ります</h5>
      <p>住所が入ります
        <br>
        03-1234-5678
        <br>
        営業時間:9:00~18:00
      </p>
    </div>
    <div class="footer_02">
      <ul>
        <li><a href="#">リンク01</a></li>
        <li><a href="#">リンク02</a></li>
        <li><a href="#">リンク03</a></li>
        <li><a href="#">リンク04</a></li>
        <li><a href="#">リンク05</a></li>
        <li><a href="#">リンク06
          <br>リンク07</a></li>
      </ul>
    </div>
    <div class="footer_last_p">
      <p>ここには会社名が入ります©️Copyright</p>
    </div>
  </footer>
  
</body>
</html>
