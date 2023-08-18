<?php
require_once('common.php');

show_top("社員情報の更新");
$id = $_GET['id'];

$member = $db->getsyain($id);

// var_dump($member);
// exit;
show_update($member);
show_down(true);
?>
