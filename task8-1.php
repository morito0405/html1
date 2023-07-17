<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" href= "style.css">
  <link rel="stylesheet" href="reset.css">
  <title>確認ページ</title>
  <style>
    .error{
      color: red ;
      text-align: center;
    }
  </style>
</head>
<body>
  <?php
  $error_msgs = array();  //エラーメッセージを格納する配列
  
  //フォームが送信された場合の処理
  $is_validated = true;
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //必須項目のチェック
    if(empty($_POST['name'])){
      $error_msgs[] = "お名前は必須です。";
    }
    if(empty($_POST['kana'])){
      $error_msgs[] = "フリガナは必須です。";
    }
    if(empty($_POST['email'])){
      $error_msgs[] = "メールアドレスは必須です。";
    }
    if(empty($_POST['tel'])){
      $error_msgs[] = "電話番号は必須です。";
    }
    if(empty($_POST['inquiry'])){
      $error_msgs[] = "お問い合わせ項目は必須です。";
    }
    if(empty($_POST['message'])){
      $error_msgs[] = "お問い合わせ内容は必須です。";
    }
    //バリデーションチェック
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL, FILTER_FLAG_EMAIL_UNICODE)){
      $error_msgs[] = "正しい形式のメールアドレスを入力してください。";
      $is_validated = false;
    }
    if(!preg_match('/^\d{10,11}$/',$_POST['tel'])){
      $error_msgs[] ="正しい形式の電話番号を入力してください。";
      $is_validated = false;
    }

  //エラーメッセージがない場合、送信ページにリダイレクト
  if(empty($error_msgs)){
    header("Location: task8-2.php");
    exit();
  }
  }
  ?>
  
  <h1>お問い合わせフォーム</h1>
  <?php
  //エラーメッセージがある場合に表示
  if(!empty($error_msgs)){
    echo "<div class= 'error'>";
    foreach ($error_msgs as $msg){
      echo "<p>" . $msg . "</p>";
    }
    echo "</div>";
  }
  ?>

<!--フォームの入力項目-->
<form action="task8-1.php" method="POST">
  <div class="form-item">
    <label for="name">お名前</label>
    <input type="text" id="name" name="name" required>
  </div>
  <div class="form-item">
    <label for="kana">フリガナ</label>
    <input type="text" id="kana" name="kana" required>
  </div>
  <div class="form-item">
    <label for="email">メールアドレス</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-item">
    <label for="tel">電話番号</label>
    <input type="tel" id="tel" name="tel" required>
  </div>
  <div class="form-item">
    <label for="inquiry">お問い合わせ項目</label>
    <input type="text" id="inquiry" name="inquiry" required>
  </div>
  <div class="form-item">
    <label for="message">お問い合わせ内容</label>
    <textarea name="message" id="message" required></textarea>
  </div>
  <?php if($is_validated) : ?>
  <input type="submit" value="確認から送信">
  <?php else : ?>
  <input type="submit" value="確認">
  <?php endif; ?>
</form>
</body>

</html>

