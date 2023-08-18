<?php
require_once('app/Database.php');
require_once('app/html_func.php');
require_once('app/check.php');
/*require_once は指定されたファイルを読み込み評価する
ファイルを見つけられない場合はE_ERROR を発行する。 */

function get_error()
{
  $error = "";
  if(isset($_GET ["error"])){
    $error =$_GET["error"];
  }
  return $error;
}
$db = new Database();
?>

