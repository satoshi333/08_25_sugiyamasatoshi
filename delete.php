<?php
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）


include("functions.php");

$id = $_GET["id"];  

//1.  DB接続します
$pdo = db_con();

//try {
//  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
//  return $pdo;
//} catch (PDOException $e) {
//  exit('データベースに接続できませんでした。'.$e->getMessage());
//}
//}

//２．データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）ここは決まり文句
  error_db_Info($stmt); 
  function errorInfo($stmt){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
  }
}else{
  //Selectデータの数だけ自動でループしてくれる
//  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
//    $view .='<p>';
//    $view .= '<a href="detail.php?id='.$result["id"].'">';
//    $view .= $result["name"]."[".$result["indate"]."]";
//    $view .='</a>';
//    $view .='</P>';
    header("Location: select.php");
    exit();
  }
?>