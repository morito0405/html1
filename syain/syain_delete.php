<?php
require_once('common.php');

show_top("削除確認");
if($_GET['error']){
  echo $_GET['error'];
  }
$id = $_GET['id'];
$member = $db->getsyain($id);
// var_dump($member);
// exit;
show_delete($member);

show_down(true);
?>
