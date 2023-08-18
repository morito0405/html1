<?php
require_once('common.php');

show_top("社員情報の追加");
if($_POST){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $age = $_POST['age'];
  $work = $_POST['work'];
}elseif($_GET){
  $id = $_GET['id'];
  $name = $_GET['name'];
  $age = $_GET['age'];
  $work = $_GET['work'];
}
show_create($id, $name, $age, $work);
show_down(true);
?>

