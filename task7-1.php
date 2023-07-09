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
  self ::$count++;
  $this->id = str_pad(self ::$count, 4, "0",STR_PAD_LEFT);
}
function show(){
  printf("(S%s) %s %d歳 %s<br>\n", $this->id,$this->name,$this->age,$this->sex ==='男' ? '男性':'女性' );
}
}
$staff1= new Staff("佐藤 一郎",31,'男');
$staff2= new Staff("山田 花子",25,'女');
$staff3= new Staff("鈴木 次郎",27,'男');

$staff1->show();
$staff2->show();
$staff3->show();
?>
</body>
</html>