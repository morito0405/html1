<?php
require_once('common.php');
// var_dump($_POST);
// exit;
if(isset($_POST["status"])){
  if(isset($_POST["id"])){
    $id = $_POST["id"];
  }
  if(isset($_POST["name"])){
    $name = $_POST["name"];
  }
  if(isset($_POST["age"])){
    $age = $_POST["age"];
  }
  if(isset($_POST["work"])){
    $work = $_POST["work"];
  }
  if(isset($_POST["old_id"])){
    $old_id = $_POST["old_id"];
  }
  
  if($_POST["status"] == "create"){
    if(check_input($id, $name, $age, $work, $error) == false){
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    // var_dump($db->idexist($id));
    // exit;
    
    if($db->idexist($id) == true){
      $error = "既に使用されているIDです";
      // var_dump($_POST);
      // exit;
      header("Location: syain_create.php?error={$error}&name={$name}&age={$age}&work={$work}");
      exit();
    }
    
    if($db->createsyain($id, $name, $age, $work)== false){
      $error = "DBエラー";
      // var_dump($id);
      // exit;
      header("Location: syain_create.php?error={$error}&id={$id}&name={$name}&age={$age}&work={$work}");
      exit();
    }
    header("Location: index.php");
    exit();
  }

  if($_POST["status"] == "delete"){
    if(check_input($id, $name, $age, $work, $error) == false){
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    // var_dump($db->idexist($id));
    // exit;

    if($db->deletesyain($id) == false){
      $error = "DBエラー";
      header("Location.syain_delete.php?error={$error}&id={$id}");
      exit();
    }
    header("Location: index.php");
    exit();
  }
  // 更新時の処理
  if($_POST["status"]=="update" ){
    // 入力パラメータのチェック
    if(check_input($id, $name, $age, $work, $error) == false){
      // 入力パラメータにエラーがあった場合社員情報更新画面に戻る。
      header("Location: syain_update.php?error={$error}&id={$old_id}");
      exit();
    }
    // $idが$old _idと違った場合にのみidの重複がないかチェックする。
    if($id !=$old_id and $db->idexist($id)){
      $error = "既に使用されているIDです";
      header("Location: syain_update.php?error={$error}&id={$old_id}");
      exit();
    }
    // TODO データベースを更新する
    if($db->updatesyain($id, $name, $age, $work, $old_id) ==false){
      $error = "DBエラー";
      header("Location: syain_update.php?error={$error}&id={$old_id}");
      exit();
    }
    // エラーがない場合に初期画面に戻る
    header("Location: index.php");
    exit();
  }


}
