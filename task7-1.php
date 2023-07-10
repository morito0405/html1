<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
ini_set('display_errors', 1);
//クラスは関数のアップグレード版。定義
class Staff{
  private $name;
  private $age;
  private $sex;
  private static $count = 0;
  private $id;

public function  __construct($name,$age,$sex){
  $this->name = $name;
  $this->age  = $age;
  $this->sex  = $sex;
  // self ::$count++;
  // $this->id = str_pad(self ::$count, 4, "0",STR_PAD_LEFT);
  /*29行目に printf("(S%04d)と記載することで23行目は記載しなくて良くなる*/
  $this->id = self ::$count++;
}
//関数はClassで定義したものを使う。
function show(){
  printf("(S%04d) %s %d歳 %s<br>\n", $this->id,$this->name,$this->age,$this->sex ==='男' ? '男性':'女性' );
}
}
$staff = [];
$staff[1]= new Staff("佐藤 一郎",31,'男');
$staff[2]= new Staff("山田 花子",25,'女');
$staff[3]= new Staff("鈴木 次郎",27,'男');
$staff[4]= new Staff("鈴木 次郎",27,'男');
$staff[5]= new Staff("鈴木 次郎",27,'男');
foreach($staff as $member){
  $member->show();
}

// $staff[1]->show();
// $staff[2]->show();
// $staff[3]->show();
?>
</body>
</html>