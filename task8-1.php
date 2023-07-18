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
      <p>お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。
        <br>
        後ほど担当者よりご連絡させていただきます。
      </p>
    </div>
  </div>
  <?php
  $error_msgs = array();  //エラーメッセージを格納する配列
  $name = $_POST['name'] ?? '';
  $kana = $_POST['kana'] ?? '';
  $email = $_POST['email'] ?? '';
  $tel = $_POST['tel'] ?? '';
  $inquiry = $_POST['inquiry'] ?? '';
  $message = $_POST['message'] ?? '';

  //フォームが送信された場合の処理
  $is_validated = true;
  if($_SERVER['REQUEST_METHOD'] ==='POST'){
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
  }else{
    echo "送信完了しました。";
  }
  ?>

<!--フォームの入力項目-->
<form action="task8-1.php" method="POST">
  <div class="form-item">
    <label for="name">お名前</label>
    <input type="text" id="name" name="name" required value= "<?= $name;?>">
  </div>
  <div class="form-item">
    <label for="kana">フリガナ</label>
    <input type="text" id="kana" name="kana" required value= "<?= $kana;?>">
  </div>
  <div class="form-item">
    <label for="email">メールアドレス</label>
    <input type="email" id="email" name="email" required
    value= "<?= $email;?>">
  </div>
  <div class="form-item">
    <label for="tel">電話番号</label>
    <input type="tel" id="tel" name="tel" required
    value= "<?= $tel;?>">
  </div>
  <div class="form-item">
    <label for="inquiry">お問い合わせ項目</label>
    <input type="text" class="Form-Item-Input" name="inquiry" value= "<?= $inquiry; ?>" required> 
  </div>
  <div class="form-item">
    <label for="message">お問い合わせ内容</label>
    <textarea class= "Form-Item-Textarea" name="message" required><?= $message;?></textarea>
  </div>
  <?php if($is_validated) : ?>
  <input type="submit" value="送信">
  <?php else : ?>
  <input type="submit" value="確認">
  <?php endif; ?>
</form>
</body>
  <!-- ここから -->
  
<form action="task8-1.php" method="POST">
  <div class="Form">
    <div class="Form-Item">
      <p class="Form-Item-Label">
        お名前 
        <span class="Form-Item-Label-Required">必須</span>
      </p>
      <input type="text" class="Form-Item-Input" name="name" placeholder="山田太郎">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label">フリガナ
        <span class="Form-Item-Label-Required">必須<span> 
      </p>
      <input type="text" class="Form-Item-Input" name="kana" placeholder="ヤマダタロウ">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label">メールアドレス
        <span class="Form-Item-Label-Required">必須</span>
      </p>
      <input type="email" class="Form-Item-Input" name="email" placeholder="info@fast-creademy.jp">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label">電話番号
        <span class="Form-Item-Label-Required">必須</span>
      </p>
      <input type="text" class="Form-Item-Input" name="tel" placeholder="00000000000">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label">お問い合わせ項目
        <span class="Form-Item-Label-Required">必須</span>
      </p>
      <input type="text" class="Form-Item-Input" name="
      inquiry" placeholder="選択してください">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg">お問い合わせ内容
        <span class="Form-Item-Label-Required">必須</span>
      </p>
      <textarea class="Form-Item-Textarea" name="message" placeholder="こちらにお問い合わせ内容をご記入ください"></textarea>
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label">個人情報保護方針
        <span class="Form-Item-Label-Required">必須</span>
      </p>
        <label>
          <input type="checkbox" name="privacy_policy">
          <span id="privacy_policy">個人情報保護方針</span><i class="fas fa-window-restore"></i>に同意します。
        </label>
      </div>
    </div>
    <input type="submit" class="Form-Btn" value="確認">
</form>
  <!-- ここまで -->
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