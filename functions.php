<?php
//共通で使うものを別ファイルにしておきましょう。
//include("functions.php"); //faile nameです。

//DB接続関数（PDO）書き方：$pdo= db_con()；
function db_con(){
    //通常はtry以下を記載する。
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
  return $pdo;
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}
}


//SQL処理エラー

  function error_db_Info($stmt){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
  }

//XSS:htmlspecialchars
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}



?>
