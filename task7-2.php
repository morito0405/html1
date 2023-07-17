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

  public function __construct($name,$age,$sex){
    $this->name = $name;
    $this->age = $age;
    $this->sex = $sex;
    self ::$count++;
    if ($this instanceof PartStaff) {
      $this->id = sprintf("P%04d", self::$count);
    } else {
      $this->id = sprintf("S%04d", self::$count);
    }

  }

 public function show(){
    printf("(%s) %s %d歳 %s<br>\n",$this->id, $this->name,$this->age,$this->sex === '男' ? '男性' : '女性');
  }
}
class PartStaff extends Staff{
  private $jikyu;

  public function  __construct($name,$age,$sex,$jikyu){
    parent:: __construct($name,$age,$sex);
    $this->jikyu = $jikyu;
  }
  
  public function show (){
    parent ::show();
    printf("時給:%d円<br>",$this->jikyu);
  }
}

$staff1 = new Staff("佐藤 一郎",31,'男');
$staff2 = new Staff("山田 花子",25,'女');
$staff3 = new Staff("鈴木 次郎",27,'男');

$partStaff = new PartStaff("田中 友子", 24, '女',900);
$staff4 = new Staff("中村 三郎", 25,'男');

$staff1->show();
$staff2->show();
$staff3->show();
$partStaff->show();
$staff4->show();

  ?>

</body>
</html>